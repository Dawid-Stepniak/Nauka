<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dane użytkownika</h3>
    Imię:{{$dane['firstName']}}<br>
    Nazwisko:{{$dane['lastName']}}<br>
    <ul>
        @foreach($dane['hobby'] as $hobby)
                <li>{{$hobby}}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($inneDane['odpoczynek'] as $hobby)
        <li>{{$hobby}}</li>
        @endforeach
    </ul>
</body>
</html>