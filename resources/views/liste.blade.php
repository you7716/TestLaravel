<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($etudiant as $toto)
    <h1>{{$toto->id}}</h1>
    <h1>{{$toto->nom}}</h1>
    <h1>{{$toto->prenom}}</h1>
    <h1>{{$toto->age}}</h1>
    @endforeach
</body>
</html>