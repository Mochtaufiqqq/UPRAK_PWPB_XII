<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail Country</title>
</head>
<body>
    <section class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail Country</h4>
        </div>
        <div class="card-body">
            <div class="row g-0 bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                  <img src="{{ asset($country->photo_country) }}" class="w-50" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                  <h5 class="mt-0">Name Country : <span class="text-primary">{{ $country->name_country }}</span></h5>
                  <h5 class="mt-0">Player : 
                  
                    </h5>
                    @foreach ($country->player as $item)
                        <div class="col-12">
                    <a href="/detailplayer/{{ $item->id }}"><img src="{{ asset($item->photo) }}" alt="" width="150" height="150"></a>
                    <p>{{ $item->name }}</p>
                  </div>
                   @endforeach
                
                </div>
              </div>

        </div>
        <div class="card-footer">
            <a class="btn btn-warning" href="/countryedit/{{ $country->id }}">Edid</a>
                <a href="/deletecountry/{{ $country->id }}" class="btn btn-danger" data-bs-target="#modalDelete{{ $country->id }}" data-bs-toggle="modal">Delete</a>
            <a href="/countryshow" class="btn btn-primary">Back</a>
            <!-- Modal -->
            <div class="modal fade" id="modalDelete{{ $country->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Country</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure want to delete country who name {{ $country->name_country }} ? </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form action="/deletecountry/{{ $country->id }}" method="POST">
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