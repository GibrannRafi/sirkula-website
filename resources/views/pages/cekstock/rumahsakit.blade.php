<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital List - Sirkula</title>
    <link rel="stylesheet" href="{{ asset('css/rumahsakit.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
</head>

<body>
    <x-navbar></x-navbar>

    <form action="{{ route('search.rs') }}" method="get">
        @csrf
        @if (isset($results) && count($results) > 0)
            <h2>Hasil Pencarian untuk "{{ $query }}"</h2>
            @foreach ($rs as $data)
                <p>{{ $data->nama_rs }}</p>
                <p>{{ $data->alamat }}</p>
                <p>Stok Darah: {{ $data->stok_blood }}</p>
                <!-- Tampilkan data lainnya -->
            @endforeach
        @elseif(isset($query))
            <p>Tidak ada hasil untuk pencarian "{{ $query }}"</p>
        @endif
        <div class="search-container">
            <div class="back-button"><img src="img/Back arrow.png" alt="Back"></div>
            <button class="search-input">
                <span class="search-icon"><img src="img/search.png" alt="Search"></span>
                <input type="text" name="nama_rs" placeholder="Search" />
                <span class="clear-icon">&#10006;</span>
            </button>
            <div class="filter-button"><img src="img/settings-sliders.png" alt="Filter"></div>
        </div>
    </form>


    <div class="container">
        <div class="hospital-list">
            @foreach ($rs as $data)
                <div class="hospital-card">
                    <img src="{{ $data->gambar_rs }}" alt="{{ $data->nama }}" class="hospital-image">
                    <!-- Ganti dengan field yang sesuai -->
                    <div class="hospital-details">
                        <div class="hospital-name">{{ $data->nama_rs }}</div>
                        <div class="info">
                            <span><img class="icon" src="img/marker.png" alt="location" width="14">
                                {{ $data->alamat }}
                            </span> <!-- Sesuaikan field -->
                            <span><img class="icon" src="img/clock.png" alt="time" width="14">
                            </span> <!-- Sesuaikan field -->
                            <span><img class="icon" src="img/walking.png" alt="distance" width="14">
                            </span> <!-- Sesuaikan field -->
                        </div>
                        <div class="avatars">
                            <img src="img/People 1.png" alt="User 1">
                            <img src="img/People 2.png" alt="User 2">
                            <img src="img/People 3.png" alt="User 3">
                            <div class="more-avatars">+50</div>
                        </div>

                        <div class="availability-button">
                            <a href="{{ route('rs.list', ['id' => $data->id]) }}">Available</a>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>


    <x-footer></x-footer>
</body>

</html>
