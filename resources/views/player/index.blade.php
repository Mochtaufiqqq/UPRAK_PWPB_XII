<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Player</title>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">World Cup</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="/playershow">Player</a>
              <a class="nav-link" href="/countryshow">Country</a>
              {{-- <a class="nav-link" href="#">Pricing</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            </div>
          </div>
        </div>
      </nav>
      @if (session('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Congratulations ! </strong>
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
          {{ session('success') }}
        </div>
        @endif
      <section class="container mt-5">
        <a class="btn btn-primary mb-5" href="/playeradd">Add Player</a>
        <div class="row">
          
        @foreach ($players as $player)
            <div class="col-2">
       
        <div class="card rounded-lg h-25" style="width: 10rem; ">
            <img src="{{ asset($player->photo) }}" class="card-img-top"width="200">
            <div class="card-body">
              <p class="h5 card-text mb-2">{{ $player->name }}</p>
              <p class="card-text text-muted">{{ $player->position }}</p>

              <img src="{{ asset($player->country->photo_country) }}" alt="" width="100" height="50" class="mb-2">
              <div class="card-footer">
                
                <a class="stretched-link" href="/detailplayer/{{ $player->id }}">Lihad</a>
                

                
              </div>
            </div>
          </div>
          
        </div>
          @endforeach
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>