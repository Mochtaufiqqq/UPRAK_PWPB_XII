<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Player</title>
</head>

<body>
    <section class="container">
        <div class="card border-primary mt-3">
            <div class="card-body">
        <form action="/playeradd" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                
                <input type="file" name="photo" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" onchange="previewImage()" id="image">
                    <img class="img-preview mb-3">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputPassword1">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Position</label>
                <select class="form-select @error('position') is-invalid @enderror" name="position" aria-label="Default select example">
                    <option selected disabled>Select Position</option>
                    <option value="forward">Forward</option>
                    <option value="backward">Backward</option>
                    <option value="center">Center</option>
                </select>
                @error('position')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="exampleInputPassword1">
                @error('age')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Height</label>
                <input type="number" name="height" class="form-control  @error('height') is-invalid @enderror" id="exampleInputPassword1">
                @error('height')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Country</label>
                <select class="form-select @error('country_id') is-invalid @enderror" name="country_id" aria-label="Default select example">
                    <option selected disabled>Select Country</option>
                    @foreach ($country as $c)

                    <option value="{{ $c->id }}">{{ $c->name_country }}</option>
                    @endforeach
                </select>
                @error('country_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>