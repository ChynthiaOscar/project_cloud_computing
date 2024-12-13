<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #0081C8;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Open Sans', sans-serif;
        }

        nav {
            background-color: #FFFFFF;
            padding: 10px 50px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Logo Section */
        .logo-container {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-container img {
            width: 80px;
            margin-right: 10px;
        }

        .event-info {
            display: flex;
            gap: 20px;
            align-items: center;
            color: #0081C8;
            font-size: 1rem;
            font-weight: 600;
        }

        .event-info div {
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 25px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-links a:hover {
            background-color: #0081C8;
            color: white;
        }

        .login-btn {
            background-color: white;
            color: #20252f;
            padding: 8px 16px;
            font-size: 1rem;
            border: 2px solid #20252f;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .login-btn:hover {
            background-color: #0081C8;
            color: white;
        }

        .outer-container {
            display: flex;
            justify-content: center;
            width: 90%;
            height: 80%;
            border: 8px solid #FCB131;
            padding: 20px;
            background-color: #00A651;
            margin-top: 80px;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
            text-align: center;
        }

        /* Card Styles */
        .card {
            width: auto;
            max-width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #FCB131;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
            cursor: pointer;
        }

        .card h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #20252f;
        }

        .card p {
            margin-top: 10px;
            font-size: 1rem;
            color: #555;
        }

        /* My Tickets Heading */
        .border-line h2 {
            margin-top: 30px;
            font-size: 2rem;
            font-weight: 600;
            color: #20252f;
        }

        /* Left Section (Sport, Nationality, Date) */
        .left-section {
            flex: 1;
        }

        .left-section p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Right Section (Standard Seat) */
        .right-section {
            width: 250px;
            text-align: center;
        }

        .right-section h4 {
            font-size: 1.5rem;
            color: #20252f;
        }

        .price {
            font-size: 1.2rem;
            color: #FCB131;
            font-weight: 600;
        }

        /* Modal Styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .modal img {
            width: 300px;
            height: 3.00px;
        }


        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #FCB131;
            color: white;
            border: none;
            font-size: 1.5rem;
            padding: 5px 10px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <a href="{{ route('welcome') }}" class="logo-container">
            <img src="./assets/logo.png" alt="Logo">
        </a>
        <div class="event-info">
            <div>Olympic Winter Games</div>
            <div>6 - 25 FEBRUARY 2026</div>
            <div>-</div>
            <div>Paralympic Winter Games</div>
            <div>6 - 15 MARCH 2026</div>
        </div>
        <div class="nav-links">
            <a href="{{ route('match') }}">Match</a>
            <a href="{{ route('my_ticket') }}">My Tickets</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </nav>

    @php
        use App\Models\Draws;
        use App\Models\Packages;
        use App\Models\Tickets;
        use App\Models\Tickets_Detail;
        use App\Models\Packages_Detail;
        use Carbon\Carbon;

        $user = Auth::guard('account')->user()->id;
        $draw = Draws::get()->where('account_id', $user)->where('status', '2');
        $package = Packages::get()->whereIn('id', $draw->pluck('package_id'));
        $ticket = Tickets::get()->whereIn('id', $draw->pluck('ticket_id'));

    @endphp

    <!-- Login Section -->
    <div class="outer-container">
        <div class="container">
            <!-- My Tickets Heading -->
            <div class="border-line">
                <h2>My Tickets</h2>
            </div>

            <!-- Card Section -->
            @foreach ($package as $p)
                @php
                    $index = 0;
                    $pDetails = Packages_Detail::get()->where('package_id', $p->id);
                @endphp
                <div class="card" id="ticketCard">
                    <!-- Left Section -->
                    <div class="left-section">
                        <h3>WINTER OLYMPIC 2026</h3>
                        <p><strong>Sport:</strong> {{ $p->sports }}</p>
                        <p><strong>Nationality:</strong> {{ $p->nationality }}</p>
                        <p><strong>Date & Time:</strong>
                            @foreach ($pDetails as $pD)
                                {{ Carbon::parse($pD->matches->start_time)->format('j F Y') }},
                                {{ Carbon::parse($pD->matches->start_time)->format('g:i A') }} <strong>|</strong>
                            @endforeach
                        </p>
                    </div>

                    <!-- Right Section -->
                    <div class="right-section">
                        <h4>{{ $ticket[$index++]->type }}</h4>
                        <p>{{ $ticket[$index++]->type }} seating</p>
                        <div class="price"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal for Barcode -->
    <div class="modal" id="barcodeModal">
        <div class="modal-content">
            <button class="close-btn" id="closeModalBtn">X</button>
            <img src="./assets/barcode.png" alt="Ticket Barcode">
        </div>
    </div>

    <script>
        const ticketCard = document.getElementById("ticketCard");
        const barcodeModal = document.getElementById("barcodeModal");
        const closeModalBtn = document.getElementById("closeModalBtn");
        ticketCard.addEventListener("click", function() {
            barcodeModal.style.display = "flex";
        });
        closeModalBtn.addEventListener("click", function() {
            barcodeModal.style.display = "none";
        });
        window.addEventListener("click", function(event) {
            if (event.target === barcodeModal) {
                barcodeModal.style.display = "none";
            }
        });
    </script>
</body>

</html>
