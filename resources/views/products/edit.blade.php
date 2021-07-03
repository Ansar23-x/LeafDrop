<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="p-3 mb-2 bg-primary text-white">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card border-primary mb-3" style="max-width: 40rem;">
                <div class="card-body text-primary">
                    <h5 class="card-title">Edit Data</h5>
                    <div class="container">
                        <form action="/products/{{$product->id}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">ID</label>
                                <input type="text" class="form-control" name="judul" value="{{$product->judul}}" id="formGroupExampleInput" placeholder="Masukkan ID">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="deskripsi" value="{{$product->deskripsi}}" id="formGroupExampleInput" placeholder="Masukkan Nama">
                            </div>
                            <div class="mb-3" style="margin-top: 20px;">
                                <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="tanggal" value="{{$product->tanggal}} id=" formGroupExampleInput" placeholder="Masukkan Alamat">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">URL Profil</label>
                                <input type="text" class="form-control" name="image_url" value="{{$product->image_url}}" id="formGroupExampleInput2" placeholder="Masukkan URL Profil">
                            </div>
                            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <legend><strong>Edit Page</strong></legend>
    </div>
    <div class="container">
        <form action="/products/{{$product->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Judul</label>
                <input type="text" class="form-control"  name="judul" value="{{$product->judul}}" id="formGroupExampleInput" placeholder="Masukkan judul">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="deskripsi" value="{{$product->deskripsi}}" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Deskripsi</label>
            </div>
            <div class="mb-3" style="margin-top: 20px;">
                <label for="formGroupExampleInput" class="form-label">Tanggal</label>
                <input type="text" class="form-control" name="tanggal" value="{{$product->tanggal}} id="formGroupExampleInput" placeholder="Masukkan Tanggal">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">URL Gambar</label>
                <input type="text" class="form-control" name="image_url" value="{{$product->image_url}}" id="formGroupExampleInput2" placeholder="Masukkan URL Gambar">
            </div>

            <button type="submit" value="Save" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body> -->