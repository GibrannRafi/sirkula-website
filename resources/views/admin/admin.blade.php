<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <title>Document</title>
</head>

<body>
    <div class="text-center mb-5">
        <h1 class="mt-3 tracking-normal">Hai Anak It Welcome</h1>
        <h2>To</h2>
        <h2>Admin Page</h2>
    </div>

    <div class="container bg-gray-200">
        <h5 class="no-margin text-center">Mau Kemana?</h5>
        <div class="button-geys d-flex">
            <a href="{{ route('user.index') }}" class="btn btn-outline-dark ">User</a>
            <a href="{{ route('rums.tampil') }}" class="btn btn-outline-dark">Rumah Sakit</a>
        </div>
    </div>
</body>

</html>
