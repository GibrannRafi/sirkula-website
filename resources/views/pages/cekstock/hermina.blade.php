<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkula</title>
    <link rel="stylesheet" href="{{ asset('css/hermina.css') }}">
</head>

<body>

    <!-- Panggil komponen navbar di sini -->
    <x-navbar />

    <section class="judul2">
        @foreach ($rs as $data)
            <h1>Rs.Hermina Depok</h1>
            <div class="hermina">
                <img src="{{ $data->gambar_rs }}" alt="Image of Rs Hermina">
            </div>
    </section>

    <section class="alamat">
        <div class="place">
            <span><img src="place.png" alt="Location Icon">Jl. Siliwangi No.50, Depok, Kec. Pancoran Mas, Kota Depok,
                Jawa Barat 16436</span>
        </div>
    </section>

    <section class="telpon">
        <div class="telf">
            <span><img src="phone-call 1.png" alt="Phone Icon">(021)7773245</span>
        </div>
    </section>

    <section class="atastable">
        <h1>Blood stock at Hermina Hospital, Depok</h1>
        <p>Update | 26-Oktober-2024 08:30:00</p>
    </section>

    <div class="tabel">
        <table>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>A+</th>
                <th>B+</th>
                <th>O+</th>
                <th>AB+</th>
            </tr>
            <tr>
                <td>1</td>
                <td>WB (Whole Blood)</td>
                <td>10</td>
                <td>0</td>
                <td>20</td>
                <td>15</td>
            </tr>
            <tr>
                <td>2</td>
                <td>TC (Thrombocyte Concentrate)</td>
                <td>0</td>
                <td>0</td>
                <td>4</td>
                <td>8</td>
            </tr>
            <tr>
                <td>3</td>
                <td>PRC (Packed Red Cells)</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>20</td>
            </tr>
            <tr>
                <td>4</td>
                <td>LP (Liquid Plasma)</td>
                <td>3</td>
                <td>0</td>
                <td>25</td>
                <td>0</td>
            </tr>
            <tr>
                <td>5</td>
                <td>FFP (Fresh Frozen Plasma)</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>23</td>
            </tr>
        </table>
        @endforeach
    </div>

    <x-footer></x-footer>
</body>

</html>
