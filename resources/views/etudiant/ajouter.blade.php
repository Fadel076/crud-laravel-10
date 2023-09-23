<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD IN LARAVEL 10</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UN ETUDIANT - LARAVEL 10</h1>

                @if (session('status'))
                    <div class="alert alert-sucess">
                        {{ session('status') }}
                    </div>

                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                     <li class="alert alert-danger">  {{ $error }} </li>
                    @endforeach
                </ul>


                <hr>
                <form action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf

                    <div class="mb-3">
                      <label for="Nom" class="form-label">Nom</label>
                      <input type="text" class="form-control" id="Nom" name="nom" >
                    </div>

                    <div class="mb-3">
                      <label for="Prenom" class="form-label">Prénom</label>
                      <input type="text" class="form-control" id="Prenom" name="prenom" >
                    </div>

                    <div class="mb-3">
                      <label for="Classe" class="form-label">Classe</label>
                      <input type="text" class="form-control" id="Classe" name="classe" >
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>

                    <br> <br>
                    <button type="submit" class="btn btn-danger">Revenir à la liste des étudiants</button>
                  </form>


            </div>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
