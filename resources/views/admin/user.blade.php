<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Admin Page - Daftar Pengguna</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Pengguna</h1>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>

            </tr>

            @foreach ($user as $no => $data)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>

                    <td>
                        <a href="{{ route('user.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit User</a>
                        <form action="{{ route('user.destroy', $data->id) }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger mt-3">Hapus User</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
