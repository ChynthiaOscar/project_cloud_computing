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
            /* Untuk offset dari navbar */
        }

        .container {
            justify-content: center;
            width: 100%;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
        }

        .border-line h2 {
            font-size: 30px;
            margin-bottom: 40px;
            color: #000000;
            text-align: center;
        }

        .border-line img.logo {
            display: block;
            margin: 0 auto 40px;
            width: 15%;
        }

        .input-group {
            margin-bottom: 10px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            margin-left: 350px;
            color: #000000;
        }

        .input-group input {
            width: 50%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-left: 25%;
        }

        .input-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .forgot-password {
            color: #000000;
            cursor: pointer;
            display: flex;
            justify-content: center;
        }

        .forgot-password p {
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }

        .forgot-password p:hover {
            text-decoration: underline;
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
            cursor: pointer;
        }

        .btn:hover {
            background-color: #005f8e;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }


        .button {
            display: flex;
            text-decoration: none;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .border-line p {
            text-align: center;
            color: #000000;
            margin-bottom: 10px;
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

    <!-- Login Section -->
    <div class="outer-container">
        <div class="container">
            <form action="{{ route('logging_in') }}" method="GET">
                @csrf
                <div class="border-line">
                    <img class="logo" src="./assets/logo.png" alt="Logo">
                </div>
                <div class="input-group">
                    <label for="email">Email Address*</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password*</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="forgot-password">
                    <p>Forgot password?</p>
                </div>
                <div class="button">
                    <button type="submit" class="btn">Log
                        In</button>
                </div>
            </form>
            <div class="border-line">
                <p><strong>Don't have an account</strong></p>
                <p>Be part of the journey, celebrate champions, and stay connected with the latest updates and events
                    from around the world.</p>
            </div>
            <div class="button">
                <button type="button" class="btn" onclick="window.location.href='{{ route('signup') }}'">Create New
                    Account</button>
            </div>
        </div>
    </div>
</body>

</html>
