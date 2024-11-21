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
            border: 8px solid #FCB131;
            padding: 20px;
            background-color: #00A651;
            margin-top: 80px; /* Offset from navbar */
        }

        .container {
            justify-content: center;
            width: 100%;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
            text-align: center;
        }

        .border-line img.logo {
            display: block;
            margin: 0 auto 20px;
            width: 15%;
        }

        .message {
            font-size: 1.2rem;
            font-weight: 400;
            color: #333;
        }

        .message strong {
            font-size: 2rem;
            font-weight: 700;
            color: #0081C8;
        }

        .draw-button {
            margin-bottom: 40px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 600;
            background-color: #0081C8;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .draw-button:hover {
            background-color: #EE334E;
        }

        .draw-button a {
            color: #FFFFFF;
            text-decoration: none;
        }

        .draw-button a:hover {
            color: #FFFFFF; 
        }

        .label {
            color: #EE334E;
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <a href="{{route('welcome')}}" class="logo-container">
            <img src="./assets/logo.png" alt="Logo">
        </a>
        <div class="event-info">
            <div>Olympic Winter Games</div>
            <div>6 - 22 FEBRUARY 2026</div>
            <div>-</div>
            <div>Paralympic Winter Games</div>
            <div>6 - 15 MARCH 2026</div>
        </div>
        <div class="nav-links">
            <a href="{{ route('my_ticket') }}">My Tickets</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="outer-container">
        <div class="container">
            <div class="border-line">
                <img class="logo" src="./assets/logo.png" alt="Logo">
            </div>
            <p class="message">
                You have successfully registered as part of the Olympic draw tickets for this event. 
                <br><br>
                Please return to this website on <br><br><strong>JUNE 25, 2025 at 00:00</strong><br><br> to proceed with purchasing tickets if you are lucky enough to win the draw.
            </p>
            <br><br>
            <p class="label">Want to participate in another ticket draw?</p>
            <button class="draw-button">
                <a href="{{route('data')}}">
                    Join Another Ticket Draw
                </a>
            </button>
        </div>
    </div>
</body>

</html>
