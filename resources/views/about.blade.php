<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Sirkula</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>

<body>
    <x-navbar></x-navbar>

    <section class="about-us">
        <div class="about-header">
            <h1>We are the people who make up Sirkula</h1>
            <p>Our philosophy is simple; hire great people and give them the resources and support to do their best
                work.</p>
        </div>

        <div class="team-container">
            <div class="team-member">
                <img src="{{ asset('img/People 1.png') }}" alt="Salma">
                <h3>Salma Istimirnaiti</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 4.png') }}" alt="Gibran">
                <h3>Gibran Rafi</h3>
                <p>Fullstack Developer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 2.png') }}" alt="Reffi">
                <h3>Reffi Ardyan</h3>
                <p>UI/UX Designer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 7.png') }}" alt="Tri">
                <h3>Tri Wahyudi</h3>
                <p>Database Manager</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 6.png') }}" alt="Ramadhya">
                <h3>Ramadhya Bagas</h3>
                <p>Backend Developer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 3.png') }}" alt="Zaidan">
                <h3>Muhammad Zaidan</h3>
                <p>Database Manager</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 8.png') }}" alt="Farhan">
                <h3>Muhammad Farhan</h3>
                <p>Frontend Developer</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('img/People 5.png') }}" alt="Daffa">
                <h3>Daffa Dio</h3>
                <p>Frontend Developer</p>
            </div>
        </div>
    </section>

    <!-- Section about company -->
    <section class="about-company">
        <h1>About Sirkula</h1>
        <div class="company-content">
            <div class="company-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="company-image">
                <img src="{{ asset('img/image 8.jpg') }}" alt="Company">
            </div>
        </div>
    </section>

    <!-- Section contact us -->
    <section class="contact-us">
        <h2>Have a question? Our team is happy to assist you</h2>
        <div class="contact-content">
            <div class="contact-text">
                <p>Ask about Sirkula services or anything else. Our team is standing by, ready to help.</p>
                <button class="contact-btn">Contact Us</button>
                <p>Or call +62 12358398</p>
            </div>
            <div class="contact-image">
                <img src="{{ asset('img/image 7.jpg') }}" alt="Team">
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</body>

</html>
