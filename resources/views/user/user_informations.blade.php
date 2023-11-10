<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dane uzytkownika</h2>
    Imię: {{$informations['firstName']}}<br>
    Nazwisko: {{$informations['lastName']}}<br>
    Płeć: {{$informations['sex']}}<br>
    Miasto: {{$informations['city']}}<br>
    <h3>Hobby:</h3>
    <ul>
        @foreach($informations['hobby'] as $hobby)
            <li>{{$hobby}}</li>
        @endforeach
    </ul>
    <h3>Przedmioty maturalne</h3>
    <ul>
        @foreach($informations['school_subjects'] as $subject)
            <li>{{$subject}}</li>
        @endforeach
    </ul>


</body>
</html>