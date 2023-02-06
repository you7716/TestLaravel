<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projet</title>
  </head>

  <body>
    <h1 class="text-center text-success">Details</h1>

    <div class="container">

        <h4> id : {{$projet->id}} </h4>
        
        <h4> Nom : {{$projet->nom}} </h4> <br>

        <h4> Description : {{$projet->description}} </h4> 

        <h4> Date Debut : {{$projet->DateD}} </h4> <br>

        <h4> Date Fin : {{$projet->DateF}} </h4>
        <a class="btn btn-dark mt-3" href="{{ route('phase.index',$projet->id) }}">Ajout_Phase</a>
    </div>

</body>
</html>

