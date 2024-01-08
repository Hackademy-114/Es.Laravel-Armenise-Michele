<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
</head>
<body>
    <h1>Ciao sono il vostro Mister</h1>
    <h2>{{$mister}}</h2>
    <p>voi come vi chiamate?</p>
    <li>
        @foreach ($players as $player)
        <p> ciao sono {{$player['name']}} e sono {{$player['nation']}}</p>
        @endforeach
    </li>
</body>
</html>