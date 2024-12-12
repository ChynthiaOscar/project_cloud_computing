<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Draw</title>
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
            align-items: center;
            gap: 20px;
            width: 100%;
            border: 5px solid #EE334E;
            padding: 20px;
            background-color: #ffffff;
            flex-direction: column;
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
            width: 50%;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #000000;
        }

        .input-group select {
            width: 40%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .top-panel {
            flex: 3;
            width: 70%;
        }

        .bottom-panel {
            flex: 2;
            padding: 20px;
            width: 50%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .description {
            margin-bottom: 20px;
        }

        .description h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #000000;
        }

        .description p {
            font-size: 16px;
            color: #333333;
        }

        .cards {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }

        .card {
            flex: 1;
            background-color: #F9F9F9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 5px;
            text-align: center;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #000000;
        }

        .card p {
            font-size: 16px;
            color: #666666;
        }

        .btn:hover {
            background-color: #005f8e;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.5);
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .btn {
            display: inline-block;
            padding: 10px 40px;
            font-size: 16px;
            text-align: center;
            font-weight: 500;
            border-radius: 25px;
            color: #FFFFFF;
            border: none;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            margin-bottom: 50px;
            width: 100%;
            background-color: #0081C8;
            cursor: pointer;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: auto;
        }
    </style>
</head>

<body>
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

    <div class="outer-container">
        <form class="container">
            <div class="border-line">
                <img class="logo" src="./assets/logo.png" alt="Logo">
            </div>
            <div class="top-panel">
                <div class="input-group">
                    <label for="sport">Sport</label>
                    <select id="sport" name="sport" required>
                        <option value="">Select a sport</option>
                        @foreach ($matches->pluck('sports')->unique() as $match)
                            <option value="{{ $match }}">{{ $match }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="nationality">Nationality</label>
                    <select id="nationality" name="nationality" required>
                        <option value="">Select nationality</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="type">Type</label>
                    <select id="type" name="type" required>
                        <option value="">Select type</option>
                    </select>
                </div>
            </div>

            <div class="bottom-panel">
                <div class="description">
                    <h2>Package Information</h2>
                    <p>Here is the pricing information for the packages available for specific sports. <br>Please review
                        the details and feel free to purchase tickets for the sport you love most!</p>
                </div>
                <div id="ticket_price" class="cards">
                </div>
            </div>
            <div class="button">
                <button type="button" class="btn" onclick="location.href='{{ route('information') }}'">Join
                    Now</button>
            </div>
    </div>
    </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#sport').change(function() {
            const sport = $(this).val();
            $('#nationality').html('<option value="">Loading...</option>');

            $.ajax({
                url: '/get-nationalities',
                type: 'POST',
                data: {
                    sport: sport,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#nationality').html('<option value="">Select nationality</option>');
                    data.forEach(function(item) {
                        $('#nationality').append('<option value="' + item + '">' +
                            item + '</option>');
                    });
                }
            });
        });

        $('#nationality').change(function() {
            const sport = $('#sport').val();
            const nationality = $(this).val();
            $('#type').html('<option value="">Loading...</option>');

            $.ajax({
                url: '/get-types',
                type: 'POST',
                data: {
                    sport: sport,
                    nationality: nationality,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#type').html('<option value="">Select type</option>');
                    console.log(data);
                    data.forEach(function(item) {
                        $('#type').append('<option value="' + item + '">' +
                            item + '</option>');
                    });
                }
            });
        });

        $('#type').change(function() {
            const sport = $('#sport').val();
            const nationality = $('#nationality').val();
            const type = $(this).val();
            

            $.ajax({
                url: '/get-price',
                type: 'POST',
                data: {
                    sport: sport,
                    nationality: nationality,
                    type: type,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    data.forEach(function(item) {
                        if (item.ticket_id == 1) {
                            $('#ticket_price').html('<div class="card">' +
                            '<h3>VIP</h3>' +
                            '<p>Price: $' + item.price + '</p>' +
                            '</div>');
                        } else if (item.ticket_id == 2) {
                            $('#ticket_price').append('<div class="card">' +
                            '<h3>Premium</h3>' +
                            '<p>Price: $' + item.price + '</p>' +
                            '</div>');
                        } else {
                            $('#ticket_price').append('<div class="card">' +
                            '<h3>Standard</h3>' +
                            '<p>Price: $' + item.price + '</p>' +
                            '</div>');
                        }
                    });
                }
            });
        });
    });
</script>

</html>
