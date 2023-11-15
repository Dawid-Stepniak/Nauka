<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="OpisUzytkownika" method="get">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" name="firstName" placeholder="Imię" autofocus>@error('firstName'){{$message}}@enderror<br><br>
        <input type="text" name="lastName" placeholder="Nazwisko">@error('lastName'){{$message}}@enderror<br><br>
        <input type="password" name="password" placeholder="Hasło">@error('password'){{$message}}@enderror<br><br>
        <input type="email" name="email" placeholder="Email">@error('email'){{$message}}@enderror<br><br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>