<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkula</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <x-navbar></x-navbar>

    <section class="hero">
        <h1 class="slightest-help">The slightest help from you,</h1>
        <h1 class="mean-a-lot">will mean a lot to them</h1>
        <p class="complete-info">Complete information regarding the availability of blood in</p>
        <p class="various-hospitals">various hospitals, and borrowing of hospital equipment.</p>

        <div class="hands">
            <img src="{{ asset('img/Hand1.png') }}" alt="Left hand">
            <div class="btn-started">
                <button class="get-started-btn" onclick="window.location.href='{{ route('login.tampil') }}'">Get
                    Started</button>
            </div>
            <div class="hands1">
                <img src="{{ asset('img/Hand2.png') }}" alt="Right hand">
            </div>
    </section>

    <div class="carousel-container">
        <div class="carousel">
            <!-- Slide Images Container -->
            <div class="slides">
                <div class="slide"><img src="{{ asset('img/image 1.jpg') }}" alt="Image 1"></div>
                <div class="slide"> <img src="{{ asset('img/image 2.jpg') }}" alt="Image 2"></div>
                <div class="slide"> <img src="{{ asset('img/image 3.jpg') }}" alt="Image 3"></div>
            </div>
        </div>
    </div>
    <!-- Dots for Navigation -->
    <div class="dots">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>

    <section class="what-we-do">
        <h2>What We Do</h2>
        <div class="wedo">
            <p>We provide information about hospitals that provide blood, </p>
            <p>borrowing hospital equipment, and equipment availability.</p>
        </div>

        <div class="card-container">
            <form action="{{ route('rs.tampil') }}">
                @csrf
                <div class="blood-card">
                    <div class="icon">
                        <img src="{{ asset('img/diagnostic.png') }}" alt="Blood Icon">
                    </div>
                    <h2>Blood Availability</h2>
                    <p>We provide information regarding the availability of blood that has been donated in various
                        Indonesian hospitals, with the aim of making it easier for people to find the blood they need.
                        Lorem, ipsum.</p>
                    <div class="arrow">
                        <button class="arrow-button">
                            <span>&#10095;</span>
                        </button>
                    </div>
                </div>
            </form>
            <form action="{{ route('reqblood.tampil') }}">
                <div class="blood-card">
                    <div class="icon">
                        <img src="{{ asset('img/diagnostic.png') }}" alt="Blood Icon">
                    </div>
                    <h2>Blood Availability</h2>
                    <p>We help users to make it easier to request blood at the nearest hospital. with the aim of making
                        it
                        easier for people to find the blood they need, yessir yessir Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing.</p>
                    <div class="arrow">
                        <button class="arrow-button">
                            <span>&#10095;</span>
                        </button>
                    </div>
                </div>
            </form>
            <form action="">
                <div class="blood-card">
                    <div class="icon">
                        <img src="{{ asset('img/diagnostic.png') }}" alt="Blood Icon">
                    </div>
                    <h2>Blood Availability</h2>
                    <p>We make it easy for someone to register if they want to donate blood. with the aim of making it
                        easier for people to find the blood they need, yessir yessir. Lorem, ipsum dolor sit amet
                        consectetur adipisicing.</p>
                    <div class="arrow">
                        <button class="arrow-button">
                            <span>&#10095;</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <section class="explore-locations">
        <h2>Explore Locations</h2>
        <p>Find the location of hospitals that provide blood and </p>
        <p>medical equipment in various regions in Indonesia.A</p>
        <div class="map-container">
            <img src="{{ asset('img/Indonesia Map.png') }}" alt="Map of Indonesia with hospital locations">
        </div>
    </section>

    <section class="articles-section">
        <h2>Our Article</h2>
        <div class="articles">
            <div class="article-card">
                <img src="{{ asset('img/image 5.jpg') }}" alt="Article Image 1">
                <div class="article-content">
                    <p>12 Oct, 2024 | Sirkula</p>
                    <h3>Nervousness is something that exists in everybody's</h3>
                    <a href="{{ route('article') }}" class="read-more">Read more</a>
                </div>
            </div>
            <div class="article-card">
                <img src="{{ asset('img/image 4.jpg') }}" alt="Article Image 2">
                <div class="article-content">
                    <p>12 Oct, 2024 | Sirkula</p>
                    <h3>Nervousness is something that exists in everybody's</h3>
                    <a href="{{ route('article') }}" class="read-more">Read more</a>
                </div>
            </div>
            <div class="article-card">
                <img src="{{ asset('img/image 6.jpg') }}" alt="Article Image 3">
                <div class="article-content">
                    <p>12 Oct, 2024 | Bagas Care</p>
                    <h3>Nervousness is something that exists in everybody's</h3>
                    <a href="{{ route('article') }}" class="read-more">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>


</body>

</html>
