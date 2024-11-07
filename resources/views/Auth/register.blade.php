<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Sirkula</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <x-navbar></x-navbar>

    <div class="hr"></div>
    <div class="container">
        <div class="form-container">
            <h1>Sign Up</h1>
            <p>Create Your Account</p>
            <form action="{{ route('register.submit') }}" method="post">
                <input type="text" id="fullname" name="name" placeholder="Full Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="signin.html"><span>Sign In</span></a></p>
        </div>
    </div>
</body>

</html>
