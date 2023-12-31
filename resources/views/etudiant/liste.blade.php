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


    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>CRUD IN LARAVEL 10</h1>
                <hr>
                    <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>

                    @endif

                    <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Classe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $ide=1;
                        @endphp

                            @foreach ($etudiants as $etudiant)
                            <tr>
                                <td> {{ $etudiant ->id}}</td>
                                <td>{{ $etudiant ->nom}}</td>
                                <td>{{ $etudiant ->prenom}}</td>
                                <td>{{ $etudiant ->classe}}</td>
                                <td>
                                    <a href="/update-etudiant/{{ $etudiant ->id}}" class="btn btn-info">Update</a>
                                    <a href="/delete-etudiant/{{ $etudiant ->id}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @php
                                $ide += 1;
                            @endphp
                            @endforeach
                    </tbody>
                </table>

                {{ $etudiants->links() }}
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
