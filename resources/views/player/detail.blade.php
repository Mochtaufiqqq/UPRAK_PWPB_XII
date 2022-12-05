<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail Player</title>
</head>
<body>
    <section class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail Player</h4>
        </div>
        <div class="card-body">
            <div class="row g-0 bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                  <img src="{{ asset($player->photo) }}" class="w-50" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                  <h5 class="mt-0">Player Name : <span class="text-primary">{{ $player->name }}</span></h5>
                  <h5 class="mt-0">Position : <span class="text-primary">{{ $player->position }}</span></h5>
                  <h5 class="mt-0">Age : <span class="text-primary">{{ $player->age }} yo</span></h5>
                  <h5 class="mt-0">Height : <span class="text-primary">{{ $player->height }} cm</span></h5>
                  <h5 class="mt-0">Country : <img src="{{ asset($player->country->photo_country) }}" alt="" height="50" width="150"></h5>
                    
                </div>
              </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-warning" href="/playeredit/{{ $player->id }}">Edid</a>
                <a href="/deleteplayer/{{ $player->id }}" class="btn btn-danger" data-bs-target="#modalDelete{{ $player->id }}" data-bs-toggle="modal">Delete</a>
            <a href="/playershow" class="btn btn-primary">Back</a>
            <!-- Modal -->
            <div class="modal fade" id="modalDelete{{ $player->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Player</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure want to delete player who name {{ $player->name }} ? </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="/deleteplayer/{{ $player->id }}" method="POST">
                        @method('delete')
                        @csrf
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>