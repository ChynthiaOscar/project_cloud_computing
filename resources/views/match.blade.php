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
            background-color: #FCB131;
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
            margin-top: 80px;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
            height: 520px;
            text-align: center;
        }

        .input-group {
            gap: 10px;
            width: 100%;
        }

        .input-group label {
            font-size: 16px;
            font-weight: bold;
            color: #000000;
            width: 30%;
        }

        .input-group select {
            flex: 1;
            margin-left: 50px;
            width: 60%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .input-group-container {
            display: flex;
            gap: 20px;
            width: 100%;
            justify-content: space-between;
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

        .card.main-card {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            padding: 16px;
            margin-top: 30px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #0081C8;
            width: 100%;
        }

        .main-card .title {
            font-size: 1.9rem;
            font-weight: 800;
            color: #FFFFFF;
        }

        .main-card .subtitle {
            margin-top: 5vh;
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            text-align: start;
        }

        .sub-card {
            flex: 1;
            margin-bottom: 10px;
            padding: 16px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .sub-card-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            margin-top: 20px;
        }

        .sub-card .time {
            font-size: 1.2rem;
            font-weight: bold;
            color: #EE334E;
            margin-bottom: 10px;
        }

        .sub-card .teams {
            font-size: 1rem;
            font-weight: 800;
            font-size: 22px;
            color: #000000;
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
            <a href="{{ route ('match')}}">Match</a>
            <a href="{{ route('my_ticket') }}">My Tickets</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </nav>

    <div class="outer-container">
        <form class="container">
            @php
            use App\Models\Matches;
            use Carbon\Carbon;
            $matches = Matches::where('status', 1)->get()->groupBy('sports');

            $groupedMatches = $matches->map(function ($sportGroup) {
            return $sportGroup->groupBy(function ($match) {
            return $match->stages;
            });
            });

            $distinctSports = Matches::where('status', 1)
            ->select('sports')
            ->distinct()
            ->orderBy('sports', 'asc')
            ->get();

            $distinctType = Matches::where('status', 1)
            ->select('type')
            ->distinct()
            ->orderBy('type', 'asc')
            ->get();
            @endphp
            <div class="input-group-container">
                <div class="input-group">
                    <label for="sport">Sport</label>
                    <select id="sport" name="sport" required>
                        <option value="">Select sport</option>
                        @foreach ($distinctSports as $sportName )
                        <option value="{{$sportName->sports}}">{{$sportName->sports}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group">
                    <label for="date">Tipe</label>
                    <select id="type" name="type" required>
                        <option value="">Select tipe</option>
                        @foreach ($distinctType as $typeName )
                        <option value="{{$typeName->type}}">{{$typeName->type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div id="match-container"></div>

            <div id="default-matches">
                @foreach ($groupedMatches as $sportName => $sportGroup)
                <div class="card main-card">
                    <div class="title">{{ strtoupper($sportName) }}</div>
                    @foreach ($sportGroup as $stageName => $stageGroup)
                    <div class="subtitle">{{ $stageName }}</div>
                    <div class="sub-card-container">
                        @foreach ($stageGroup as $data)
                        <div class="card sub-card">
                            <div class="time">
                                {{ Carbon::parse($data->start_time)->format('j F Y') }} - {{ Carbon::parse($data->start_time)->format('g:i A') }}
                            </div>
                            <div class="teams">{{ $data->home ?: 'n/a' }} vs {{ $data->away ?: 'n/a' }}</div>
                            <div style='color: {{$data->type == 'Men' ? '#2594f5' : '#db4bc6'}} ;'>{{$data->type}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>

        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function fetchFilteredData() {
            console.log('Fetching data...');
            const sport = $('#sport').val();
            const type = $('#type').val();

            $.ajax({
                url: '/filter-matches', // Update with your endpoint
                method: 'GET',
                data: {
                    sport: sport,
                    type: type
                },
                success: function (response) {
                    // Hide the default matches section
                    $('#default-matches').hide();

                    // Update the match-container with the new data
                    $('#match-container').html(response);
                },
                error: function (xhr) {
                    console.error('Error fetching data:', xhr.responseText);
                }
            });
        }

        // Trigger data fetch on filter change
        $('#sport, #type').on('change', fetchFilteredData);
    });
</script>

</html>