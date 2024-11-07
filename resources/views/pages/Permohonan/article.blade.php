<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkula</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/artikel.css') }}">

</head>

<body>

    <x-navbar></x-navbar>

    <section class="artikeljudul">
        <h1>Article</h1>
    </section>

    <section class="judul2">
        <h1>Nervousness is something that </h1>
        <h1>exists in everybody’s</h1>
        <div class="orgsakit">
            <img src="{{ asset('img/image 5.jpg') }}" alt="Orang Sakit">
        </div>
    </section>

    <section class="bawahfoto">
        <div class="adimin">
            <img src="{{ asset('img/adimin.png') }}" alt="Image 1"> <span>By administrator</span> <img
                src="{{ asset('img/jam3.png') }}" alt="Image 1">
            <span>10 Oktober 2024 20.00</span> <img src="{{ asset('img/lope.png') }}" alt="lope"> <span>0</span>
        </div>

        <section class="isi">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida venenatis magna et egestas. Etiam
                urna lectus, interdum sed lectus faucibus, luctus luctus ligula. Etiam dapibus tristique auctor. Donec
                viverra eu nisi et porttitor. Aliquam ornare ac ante ac dictum. Fusce ac ipsum lectus. Donec commodo
                maximus risus, sit amet tempor elit hendrerit sed. Aenean lectus ante, egestas a pharetra ut, molestie
                vel urna. Donec ullamcorper sollicitudin suscipit. Pellentesque ut augue at dolor interdum tempor.
                Aenean imperdiet sapien ut posuere sagittis. Morbi interdum efficitur tellus, vel tincidunt elit
                faucibus ac.
                Morbi vestibulum suscipit turpis, vel rutrum lectus. Nunc pulvinar sapien eget augue laoreet, quis
                aliquam odio sagittis. Donec rutrum odio neque, eget hendrerit risus ullamcorper vehicula. Pellentesque
                elementum nibh id erat iaculis, sit amet tempor dolor aliquam. In rutrum felis vitae magna malesuada,
                sit amet tincidunt purus fermentum. Morbi in condimentum ex. Nam viverra ante libero, eu facilisis magna
                convallis eget.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida venenatis magna et egestas. Etiam
                urna lectus, interdum sed lectus faucibus, luctus luctus ligula. Etiam dapibus tristique auctor. Donec
                viverra eu nisi et porttitor. Aliquam ornare ac ante ac dictum. Fusce ac ipsum lectus. Donec commodo
                maximus risus, sit amet tempor elit hendrerit sed. Aenean lectus ante, egestas a pharetra ut, molestie
                vel urna. Donec ullamcorper sollicitudin suscipit. Pellentesque ut augue at dolor interdum tempor.
                Aenean imperdiet sapien ut posuere sagittis. Morbi interdum efficitur tellus, vel tincidunt elit
                faucibus ac.
                Morbi vestibulum suscipit turpis, vel rutrum lectus. Nunc pulvinar sapien eget augue laoreet, quis
                aliquam odio sagittis. Donec rutrum odio neque, eget hendrerit risus ullamcorper vehicula. Pellentesque
                elementum nibh id erat iaculis, sit amet tempor dolor aliquam. In rutrum felis vitae magna malesuada,
                sit amet tincidunt purus fermentum. Morbi in condimentum ex. Nam viverra ante libero, eu facilisis magna
                convallis eget.</p>
        </section>

        <x-footer></x-footer>


</body>

</html>
