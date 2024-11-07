<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Edit </h4>

    <form action="{{ route('akun.update', $user->id) }}" method="post">
        @csrf
        <label>Nama</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2">

        <label>Alamat</label>
        <input type="text" name="email"value="{{ $user->email }}" class="form-control mb-2">

        <label>Password</label>
        <input type="text" name="password" value="{{ $user->password }}"class="form-control mb-2">

        <button class="btn btn-primary">Edit</button>
    </form>

</body>

</html>
