<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach($cours as $cour)
        <tr>
            <td>{{$cour->Num}}</td>
            <td>{{$cour->nom}}</td>
            <td>{{$cour->duree}}</td>
        </tr>
       @endforeach
    </table>
</body>
</html>