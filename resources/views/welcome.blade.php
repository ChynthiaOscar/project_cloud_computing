<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
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

        .logo-container span {
            font-size: 1.2rem;
            font-weight: bold;
            white-space: nowrap;
        }

        /* Center Section */
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

        /* Navbar Links */
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

        /* Welcome Section */
        .welcome-section {
            background: linear-gradient(100deg, #0f567c, #07bdff);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            text-align: center;
            height: 100vh;
            padding: 0 200px;
        }

        .welcome-section h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .welcome-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .signup-btn {
            background-color: white;
            color: #0081C8;
            padding: 12px 30px;
            font-size: 1.2rem;
            border: none; /* Menghilangkan border */
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah */
            transition: background-color 0.3s, color 0.3s;
        }

        .signup-btn:hover {
            background-color: #006699;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <!-- Logo Section -->
        <a href="{{route('welcome')}}" class="logo-container">
            <img src="./assets/logo.png" alt="Logo">
        </a>

        <!-- Center Section -->
        <div class="event-info">
            <div>Olympic Winter Games</div>
            <div>6 - 22 FEBRUARY 2026</div>
            <div>-</div>
            <div>Paralympic Winter Games</div>
            <div>6 - 15 MARCH 2026</div>
        </div>

        <!-- Navbar Links -->
        <div class="nav-links">
            <a href="{{ route('my_ticket') }}">My Tickets</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <h1>Welcome to the Official Ticketing Platform of Winter Olympic 2026</h1>
        <p>Learn how to purchase tickets for all sessions of the upcoming Olympic and Paralympic Winter Games<br> and sign up to gain early access to ticket sales.</p>
        <a href="{{ route('signup') }}" class="signup-btn">Sign Up</a>
    </section>
</body>

</html>
