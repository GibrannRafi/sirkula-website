<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button {
            margin-top: 32px;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            background-color: #c62828;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 12px;
            /* Adjusted font size */
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 2px;
            /* Reduced padding for compactness */
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        input[type="number"] {
            width: 40px;
            /* Smaller input width */
            padding: 2px;
            /* Reduced padding */
            font-size: 12px;
            /* Adjusted font size for input */
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form class="form" method="post" action="{{ route('rs.tambah') }}">
            <div class="mt-4">
                <p class="font-bold text-red-700">Nama Rumah Sakit</p>
                <input type="text" name="nama_rs"
                    class="outline-none border-2 rounded-lg border-red-700 py-1 px-3 w-full"
                    placeholder="Masukkan nama rumah sakit" />
            </div>
            <div class="mt-4">
                <p class="font-bold text-red-700">Alamat</p>
                <input type="text" name="alamat"
                    class="outline-none border-2 rounded-lg border-red-700 py-1 px-3 w-full"
                    placeholder="Masukkan alamat" />
            </div>
            <div class="mt-4">
                <p class="font-bold text-red-700">Gambar Rumah Sakit (URL)</p>
                <input type="text" name="gambar_rs"
                    class="outline-none border-2 rounded-lg border-red-700 py-1 px-3 w-full"
                    placeholder="Masukkan URL gambar" />
            </div>
            <td><input type="number" name="stok_blood" placeholder="0" /></td>

            <h2 class="font-bold text-red-700 mt-4">Stok Goldar</h2>
            <table>
                <thead>
                    <tr>
                        <th>Goldar</th>
                        <th>WB</th>
                        <th>TC</th>
                        <th>TCC</th>
                        <th>LP</th>
                        <th>FFP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td><input type="number" name="stok_wb_a" placeholder="0" /></td>
                        <td><input type="number" name="stok_tc_a" placeholder="0" /></td>
                        <td><input type="number" name="stok_tcc_a" placeholder="0" /></td>
                        <td><input type="number" name="stok_lp_a" placeholder="0" /></td>
                        <td><input type="number" name="stok_ffp_a" placeholder="0" /></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td><input type="number" name="stok_wb_b" placeholder="0" /></td>
                        <td><input type="number" name="stok_tc_b" placeholder="0" /></td>
                        <td><input type="number" name="stok_tcc_b" placeholder="0" /></td>
                        <td><input type="number" name="stok_lp_b" placeholder="0" /></td>
                        <td><input type="number" name="stok_ffp_b" placeholder="0" /></td>
                    </tr>
                    <tr>
                        <td>AB</td>
                        <td><input type="number" name="stok_wb_ab" placeholder="0" /></td>
                        <td><input type="number" name="stok_tc_ab" placeholder="0" /></td>
                        <td><input type="number" name="stok_tcc_ab" placeholder="0" /></td>
                        <td><input type="number" name="stok_lp_ab" placeholder="0" /></td>
                        <td><input type="number" name="stok_ffp_ab" placeholder="0" /></td>
                    </tr>
                    <tr>
                        <td>O</td>
                        <td><input type="number" name="stok_wb_o" placeholder="0" /></td>
                        <td><input type="number" name="stok_tc_o" placeholder="0" /></td>
                        <td><input type="number" name="stok_tcc_o" placeholder="0" /></td>
                        <td><input type="number" name="stok_lp_o" placeholder="0" /></td>
                        <td><input type="number" name="stok_ffp_o" placeholder="0" /></td>
                    </tr>
                </tbody>
            </table>


            <button type="submit" class="button">Add Rumah Sakit</button>
        </form>
    </div>

    <script>
        // document.getElementById('addRumahSakitForm').onsubmit = function(e) {
        //     e.preventDefault();
        //     const formData = new FormData(this);
        //     console.log('Form submitted!', formData);
        //     alert('Rumah sakit berhasil ditambahkan!');
        // };
    </script>
</body>

</html>
