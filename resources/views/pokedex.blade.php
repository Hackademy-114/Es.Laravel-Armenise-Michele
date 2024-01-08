<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Michele</title>
</head>
<body>
    <p> Ciao sono {{$trainer}} </p>
    <ul>
        @foreach ($pokemons as $pokemon)
        <li>
            nome : {{$pokemon['name']}} , tipo : {{$pokemon['type']}}
        </li>

        @endforeach
    </ul>

</body>
</html>