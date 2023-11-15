<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formularz uzytkownika</h2>
    <form action="UserForm" method="get">
            <input type="text" name="firstName" placeholder="Imię" autofocus value="{{old('firstName')}}">@error('firstName'){{$message}}@enderror<br><br>
            <input type="text" name="lastName" placeholder="Nazwisko" value="{{old('lastName')}}">@error('lastName'){{$message}}@enderror<br><br>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}">@error('email'){{$message}}@enderror<br><br>
            <input type="submit" value="Zatwierdź dane">
    </form>

</body>
</html>