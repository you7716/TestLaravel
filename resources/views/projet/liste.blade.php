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
  <h1 class="text-center text-success">LISTE DES PROJETS</h1>

    <div class="container">
    <a href="{{ route('projet.index')}}" class="btn btn-warning mt-3" >Retour</a>

    <div class="container">

  <div class="container">
  <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Details</th>

            </tr>
            
        </thead>

        <tbody>
        @foreach($projet as $pr)

            <tr>
                <td>#{{ $pr->id}}</td>
                <td>{{ $pr->nom}}</td>
                <td>{{ $pr->DateD}}</td>
                <td>{{ $pr->DateF}}</td>
                <td><a href="{{ route('vueDetail',$pr->id) }}" class="btn btn-success mt-3">DETAILS</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>

    </div>
    
</body>
</html>
