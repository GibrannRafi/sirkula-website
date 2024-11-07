<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<header>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Sirkula Logo"> Sirkula
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('article') }}">Article</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        @if (Auth::check())
            <!-- Dropdown for Profile when logged in -->
            <div class="dropdown">
                <button class="btn login-btn dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item">Hi, {{ Auth::user()->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <!-- Log in button when not logged in -->
            <a href="{{ route('login.tampil') }}" class="btn login-btn">Log in</a>
        @endif
    </nav>
</header>
