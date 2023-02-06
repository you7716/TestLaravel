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
    <h1 class="text-center text-success">AJOUT PHASES</h1>

    <div class="container">
    <a href="{{ route('liste.projet')}}" class="btn btn-warning mt-3" >Retour</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('enregistrer.phase') }}" method="POST">
            @csrf   
            <label for="">Nom:</label>
            <input type="text" name="nom" id="" class="form-control"><br>
            <label for="">Duree:</label>
            <input type="number" name="duree" id="" class="form-control"><br>
            <label for="">Propriété:</label>
            <input type="text" name="propriete" id="" class="form-control"><br>

            <button class="btn btn-primary mt-3">Enregistrer</button>
        </form>
    </div>
</body>
</html>
