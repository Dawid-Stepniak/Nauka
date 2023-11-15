<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tabela: <?php print_r($users)?><br>
    Imię: {{$users[0]->firstName}}

    @dump($users)
    
</body>
</html>