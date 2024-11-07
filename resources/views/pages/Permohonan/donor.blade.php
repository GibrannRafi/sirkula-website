<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor | Sirkula</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/permohonan.css') }}">
</head>

<body>
    <x-navbar></x-navbar>

    <br><br><br>
    <div class="title">
        <a href="index.html"><img src="{{ asset('img/panah.png') }}" alt="Arrow Left"></a>Donor
    </div>
    <br>

    <div class="container">
        <form class="form" action="{{ route('subblood.create') }}" method="post">
            @csrf
            @if (@session('gagal'))
                <p class="text-danger text-center fs-6">{{ session('gagal') }}</p>
            @endif
            @if (session('alert'))
                <div class="alert alert-warning">
                    {{ session('alert') }}
                </div>
            @endif
            <br>
            <h2 class="pateintinf">Donor Name</h2>



            <div class="form-group">
                <label for="patient-name">Name</label>
                <input type="text" name="nama_donor" placeholder="Full Name">
            </div>

            <div class="form-group">
                <label for="hospital">Place and date of birth</label>
                <input type="text" name="tgl_lahir" placeholder="Place and date of birth">
            </div>

            <div class="form-group">
                <label for="city">Gender</label>
                <input type="text" name="jenis_kel" placeholder="Male/Female">
            </div>

            <div class="form-group">
                <label for="location">Blood donor location & additional information</label>
                <textarea id="location" placeholder="Where blood donations take place" name="alamat"></textarea>
            </div>

            <div class="form-group">
                <label for="blood-type">Blood Type</label>
                <select id="blood-type" name="blood_type">
                    <option>Select ABO</option>
                    <option>A</option>
                    <option>B</option>
                    <option>AB</option>
                    <option>O</option>
                </select>
            </div>

            <div class="form-group">
                <label for="donor-type" style="flex: 2.1;">Donor Type</label>
                <select id="donor-type" name="donor_type">
                    <option>Select donor type</option>
                    <option>Whole Blood</option>
                    <option>Apherasis</option>
                    <option>Plasma Konvalesen</option>
                </select>

                <select id="rhesus-type" name="rhesus" style="margin-left: 1px;">
                    <option>Select Rhesus</option>
                    <option>Positive</option>
                    <option>Negative</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city">Weight</label>
                <input type="text" name="weight" placeholder="Enter weight">
            </div>

            <div class="form-group">
                <label for="city">Age</label>
                <input type="text" name="umur" placeholder="Enter age">
            </div>

            <br>
            <hr class="garis1">
            <br>

            <h2>Contact Person</h2>

            <div class="form-group">
                <label for="contact-name">Full Name</label>
                <input type="text" name="fullname" placeholder="Name of the patient's companion">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number/Whatsapp</label>
                <input type="text" name="no_telp" placeholder="Example: 08xxx">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email address">
            </div>

            <br>
            <button type="submit" class="submit-button">Send</button>
            <br>

            <div id="popup" class="popup">
                <div class="popup-content">
                    <img src="{{ asset('img/ceklis.png') }}" alt="ceklispopup" class="ceklis">
                    <br><br>
                    <h3>Data has been changed</h3>

                    <p>Your data has been successfully changed</p>
                    <br>
                    <button onclick="closePopup()">OK</button>
                </div>
            </div>

            <script src="{{ asset('js/permohonan.js') }}"></script>

        </form>
    </div>
    <br>

    <x-footer></x-footer>

</body>

</html>
