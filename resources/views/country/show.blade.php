<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Country</title>
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
          <a class="nav-link" href="/playershow">Player</a>
          <a class="nav-link active" href="/countryshow">Country</a>
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
        <a class="btn btn-primary mb-5" href="/countryadd">Add Country</a>
        <div class="row">
        @foreach ($country as $c)
            <div class="col-2">
       
        <div class="card rounded" style="width: 10rem;">
            <img src="{{ asset($c->photo_country) }}" class="card-img-top"width="200" height="50">
            <div class="card-body">
              <p class="h5 card-text">{{ $c->name_country }}</p>
            </div>
          </div>

          <div class="card-footer">
          
          <a class="" href="/countrydetail/{{ $c->id }}">View Detail</a>
        </div>
        </div>
          @endforeach
          </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>