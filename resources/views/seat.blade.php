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
            padding-top: 80px;
            background-color: #0081C8;
            display: flex;
            justify-content: center;
            align-items: flex-start;
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
            justify-content: space-between;
            width: 90%;
            height: auto;
            border: 8px solid #FCB131;
            padding: 20px;
            background-color: #00A651;
        }

        .container {
            flex: 2;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Payment Section */
        .payment-section {
            padding: 20px;
            margin-top: 20px;
        }

        .payment-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .input-group label {
            width: 35%;
            font-weight: bold;
            color: #333;
        }

        .input-group input {
            width: 60%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .total-amount {
            text-align: center;
            font-size: 1.2rem;
            color: #333;
        }

        .pay-now-btn {
            background-color: #0081C8;
            color: #fff;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-align: center;
            margin: 0 auto;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .pay-now-btn:hover {
            background-color: #005f99;
        }

        /* Card Section */
        .card-section {
            flex: 1;
            margin-left: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            padding: 15px;
            background-color: #ffffff;
            border: 2px solid #EE334E;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin: 0 0 10px 0;
            color: #0081C8;
            font-size: 1.5rem;
        }

        .card p {
            margin: 5px 0;
            font-size: 1rem;
            color: #333;
        }

        /* Package Section */
        .package-card {
            padding: 0;
        }

        .package-card a {
            display: block;
            text-decoration: none;
            color: inherit;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #FFFFFF;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Active state for card */
        .package-card a.active {
            border-color: #EE334E;
        }

        .package-card h4 {
            font-size: 1.2rem;
            color: #0081C8;
            margin: 10px 0;
        }

        .package-card p {
            font-size: 1rem;
            color: #333;
            margin-bottom: 15px;
        }

        .package-card .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
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
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal h2 {
            color: #0081C8;
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
        use App\Models\Tickets;
        use App\Models\Tickets_Detail;
        $ticketType = Tickets::all();
    @endphp

    <!-- Main Content -->
    <div class="outer-container">
        <!-- Left Section -->
        <div class="container">
            <!-- Payment Section -->
            <div class="payment-section">
                <h2>Payment</h2>
                <form action="{{ route('payment', $id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="payment-form">
                        <div class="input-group">
                            <label for="name-on-card">Name on Card:</label>
                            <input type="text" name="name_on_card" id="name-on-card"
                                placeholder="Enter name on card">
                        </div>
                        <div class="input-group">
                            <label for="card-number">Card Number:</label>
                            <input type="text" name="card_number" id="card-number" placeholder="Enter card number">
                        </div>
                        <div class="input-group">
                            <label for="expiration-date">Expiration Date:</label>
                            <input type="text" name="expiration_date" id="expiration-date" placeholder="MM/YY">
                        </div>
                        <div class="input-group">
                            <label for="cvv">CVV:</label>
                            <input type="text" name="cvv" id="cvv" placeholder="Enter CVV">
                        </div>
                        <hr>
                        <div class="total-amount">
                            <strong>Total: <span id="price"></span></strong>
                            <input style="display: none;" id="tipe" name="tickets_id">
                        </div>
                        <button type="submit" class="pay-now-btn">Pay Now</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Section -->
        <div class="card-section">
            @foreach ($ticketType as $type)
            @php
                $quota = Tickets_Detail::get()
                    ->where('package_id', $id)
                    ->where('ticket_id', $type->id)->first();
            @endphp
                <div class="package-card" style="display: {{ $quota->quota == '0' ? 'none' : 'block' }};">
                    <a>
                        <p style="display: none;" id="ticket_id">{{ $type->id }}</p>
                        <h4>{{ $type->type }}</h4>
                        @if ($type->type == 'VIP')
                            <p>Exclusive access to VIP areas</p>
                        @elseif ($type->type == 'Premium')
                            <p>Premium seating and benefits</p>
                        @else
                            <p>Standard seating</p>
                        @endif

                        @php
                            $price = Tickets_Detail::get()
                                ->where('package_id', $id)
                                ->where('ticket_id', $type->id)
                                ->first();
                        @endphp
                        <div class="price">${{ $price->price }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div id="payment-modal" class="modal">
        <div class="modal-content">
            <h2>Processing Payment...</h2>
            <p>Your payment is being processed. Please wait a moment.</p>
        </div>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const packageCards = document.querySelectorAll('.package-card a');

        packageCards.forEach(card => {
            card.addEventListener('click', (e) => {
                packageCards.forEach(c => c.classList.remove('active'));
                e.currentTarget.classList.add('active');
                document.getElementById('price').innerText = e.currentTarget.querySelector(
                    '.price').innerText;
                document.getElementById('tipe').value = e.currentTarget.querySelector(
                    '#ticket_id').innerText;
                console.log(document.getElementById('tipe').value);
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const payNowButton = document.querySelector('.pay-now-btn');
        const modal = document.getElementById('payment-modal');

        payNowButton.addEventListener('click', () => {
            modal.style.display = 'flex';
            setTimeout(() => {
                modal.style.display = 'none';
                window.location.href = '{{ route('win') }}';
            }, 3000);
        });
    });
</script>
