<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
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

        .nav-links button {
            background-color: white;
            color: #20252f;
            padding: 8px 16px;
            font-size: 1rem;
            border: 2px solid #20252f;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }

        .nav-links button:hover {
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
            justify-content: center;
            width: 100%;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
        }

        .border-line img.logo {
            display: block;
            margin: 0 auto 40px;
            width: 15%;
        }

        .card-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: #f5f5f5;
            border: 2px solid #dcdcdc;
            border-radius: 10px;
            padding: 15px;
            width: 250px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .card:hover {
            border-color: #0081C8;
        }

        /* Highlighted card style */
        .card.selected {
            border-color: #0081C8;
            border-width: 3px;
        }

        .card h3 {
            font-size: 1.2rem;
            color: #000000;
            margin: 10px 0;
        }

        .card p {
            font-size: 1rem;
            color: #333333;
            margin: 5px 0;
        }

        .btn:hover {
            background-color: #005f8e;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            font-weight: 500;
            border: 2px solid #000000;
            border-radius: 25px;
            color: #FFFFFF;
            transition: background-color 0.3s ease;
            width: 20%;
            background-color: #0081C8;
        }

        .button {
            display: flex;
            text-decoration: none;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .message {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000000;
            text-align: center;
            margin-top: 50px;
        }

        .message strong {
            font-size: 1.8rem;
            font-weight: 700;
            color: #00A651;
        }

        .message span {
            font-size: 1rem;
            font-weight: normal;
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
            <a href="{{ route ('match')}}">Match</a>
            <a href="{{ route('my_ticket') }}">My Tickets</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Success Message Section -->
    <div class="outer-container">
        <div class="container">
            <div class="border-line">
                <img class="logo" src="./assets/logo.png" alt="Logo">
            </div>
            <p class="message">
                <strong>Congratulations</strong>, you have successfully secured the chance to purchase tickets for the Olympic 2026!<br>
                <br>
                <span>Please select one of the cards below to proceed with the purchase.</span><br>
            </p>

            <!-- Event Cards -->
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card" onclick="selectCard(this)">
                    <h3>Ice Hockey</h3>
                    <p>Canada</p>
                    <p>Women's Ice Hockey</p>
                    <p>12 February 2026, 10:00 AM</p>
                </div>
                <!-- Card 2 -->
                <div class="card" onclick="selectCard(this)">
                    <h3>Figure Skating</h3>
                    <p>USA</p>
                    <p>Men's Singles</p>
                    <p>14 February 2026, 2:00 PM</p>
                </div>
                <!-- Card 3 -->
                <div class="card" onclick="selectCard(this)">
                    <h3>Ski Jumping</h3>
                    <p>Japan</p>
                    <p>Mixed Team</p>
                    <p>16 February 2026, 3:30 PM</p>
                </div>
            </div>

            <div class="button">
                <button onclick="window.location.href='{{ route('seat') }}'" class="btn">Proceed to Purchase</button>
            </div>
        </div>
    </div>

    <script>
        function selectCard(selectedCard) {
            document.querySelectorAll('.card').forEach(card => {
                card.classList.remove('selected');
            });
            selectedCard.classList.add('selected');
        }
    </script>
</body>

</html>
