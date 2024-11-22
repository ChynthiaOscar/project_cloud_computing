<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding-top: 80px;
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
            height: auto;
            border: 8px solid #FCB131;
            padding: 20px;
            background-color: #00A651;
            margin-bottom: 20px;
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
            margin: 0 auto 20px;
            width: 15%;
        }

        .input-group {
            margin-bottom: 15px;
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
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .forgot-password a {
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .btn:hover {
            background-color: #005f8e;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            font-weight: 500;
            border: 2px solid #000000;
            border-radius: 25px;
            color: #FFFFFF;
            transition: background-color 0.3s ease;
            width: 20%;
            background-color: #0081C8;
            cursor: pointer;
        }

        .button {
            display: flex;
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

    <!-- Main Content -->
    <div class="outer-container">
        <div class="container">
            <form action="{{route('create')}}" method="POST">
                @csrf
                <div class="border-line">
                    <img class="logo" src="./assets/logo.png" alt="Logo">
                </div>
                <div class="input-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first_name" required>
                </div>
                <div class="input-group">
                    <label for="surname">Surname</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
                <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="date_of_birth" required>
                </div>
                <div class="input-group">
                    <label for="country">Country of Residence</label>
                    <input type="text" id="country" name="country_of_residence" required>
                </div>
                <div class="input-group">
                    <label for="postcode">Postcode (Optional)</label>
                    <input type="text" id="postcode" name="postcode">
                </div>
                <div class="forgot-password">
                    <a href="{{ route('login') }}">I already have an account</a>
                </div>
                <div class="button">
                    <button class="btn" type="submit" onclick="window.location.href='{{ route('signup') }}'">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
