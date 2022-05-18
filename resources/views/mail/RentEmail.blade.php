<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Email for Rent</title>

    <style>
        html {
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .text-center {
            text-align: center;
        }

        
    </style>
</head>
<body>


<div class="text-center">

    <h1>New rent reservation request from Ibimarine - {{ $data['boat_name'] }}</h1>

    <h2>Boat: <strong>{{ $data['boat_name'] }}</strong> Boat ID: <em>{{$data['boat_id']}}</em></h2>

    <p>Client Name: <strong>{{ $data['name'] }}</strong></p>

    <p>Client Email: <strong>{{ $data['email'] }}</strong></p>

    <p>Client Phone: <strong>{{ $data['phone'] }}</strong></p>

    <h3>Start Reservation Date: <em>{{$data['start_date']}}</em> - End Reservation Date: <em>{{$data['end_date']}}</em></h3>

    <p>Season price Selected: <em>{{$data['season_price'] ?? 'None'}}</em></p>
</div>  
</body>
</html>