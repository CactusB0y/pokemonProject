<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="/create">Create Pokemon</a>
              </div>
            </div>
          </nav>
    </header>
    <section>
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Niveau</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pokemons as $pokemon)
                        <tr>
                            <th scope="row">{{$pokemon->id}}</th>
                            <td>{{$pokemon->nom}}</td>
                            <td>{{$pokemon->type}}</td>
                            <td>{{$pokemon->niveau}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>