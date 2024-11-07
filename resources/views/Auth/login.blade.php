<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirkula</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <x-navbar></x-navbar>


    <div class="hr"></div>
    {{-- <div class="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <p>Welcome! Please log in with your Sirkula account to continue</p>
                @if (@session('gagal'))
                    <p class="text-danger text-center fs-6">{{ session('gagal') }}</p>
                @endif
                @if (session('alert'))
                    <div class="alert alert-warning">
                        {{ session('alert') }}
                    </div>
                @endif
                <input type="text" name="email" placeholder="Enter your Email or Phone" />
                <input type="password" name="password" placeholder="Enter your Password" />
                <a href="#">Forgot Password?</a>
                <button>Sign In</button>
                <div class="social-container">
                    <button class="social-btn">Login with Google</button>
                    <button class="social-btn">Login with Facebook</button>
                </div>
                <a href="signup.html">Don't have an account yet? <span>Sign Up</span></a>
            </form>
        </div>

    </div> --}}

    <div class="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <p>Welcome! Please log in with your Sirkula account to continue</p>
                @if (@session('gagal'))
                    <p class="text-danger text-center fs-6">{{ session('gagal') }}</p>
                @endif
                @if (session('alert'))
                    <div class="alert alert-warning">
                        {{ session('alert') }}
                    </div>
                @endif
                <input type="email" placeholder="Enter your Email or Phone" name="email" />
                <input type="password" placeholder="Enter your Password" name="password" />
                <a href="#">Forgot Password?</a>
                <button>Sign In</button>
                <div class="social-container">
                    <button class="social-btn">Login with Google</button>
                    <button class="social-btn">Login with Facebook</button>
                </div>
                <a href="{{ route('register.tampil') }}">Don't have an account yet? <span>Sign Up</span></a>
            </form>
        </div>

    </div>
</body>

</html>
