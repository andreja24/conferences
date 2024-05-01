<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel project - @yield('title', 'Register')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header row col-10 justify-content-center">
    <a class="col-2" href="{{ route('articles.index') }}">CONFERENCES</a>
    <a class="col-2" href="{{ route('home.index') }}">HOME</a>
    @guest
        <a class="col-2" href="{{ route('login') }}">LOGIN</a>
        <a class="col-2" href="{{ route('register') }}">REGISTER</a>
    @else
        <a class="col-2" href="{{ route('logout') }}" id="logout-btn">LOGOUT</a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none col-2">
            @csrf
        </form>
    @endguest
    <a class="col-2" href="{{ route('user.profile') }}">PROFILE</a>
</header>
<section class="registration col-9">
    <h3 class="heading3">SING UP</h3>
        <form action="{{ route('register') }}" class="col-11" method="POST">
            @csrf
            <div class="formInputDiv col-5 row">
                <label class="row label-input col-5 justify-content-center align-content-center" for="name-input">Name</label>
                <input class="col-6" type="text" id="name-input" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv col-5 row">
                <label class="row label-input col-5 justify-content-center align-content-center" for="username-input">Username</label>
                <input class="col-6" id="username-input" type="text" name="username" value="{{ old('username') }}">
            </div>
            @error('username')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv col-5 row">
                <label class="row label-input col-5 justify-content-center align-content-center" for="email-input">Email</label>
                <input class="col-6" id="email-input" type="email" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv col-5 row">
                <label class="row label-input col-5 justify-content-center align-content-center" for="password-input">Password</label>
                <input class="col-6" id="password-input" type="password" name="password">
            </div>
            @error('password')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv col-5 row">
                <label class="row label-input col-5 justify-content-center align-content-center" for="password-confirmation-input">Confirm Password</label>
                <input class="col-6" id="password-confirmation-input" type="password" name="password_confirmation">
            </div>
            @error('password_confirmation')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div>
            <input class="mainButton" type="submit" value="CREATE AN ACCOUNT">
            </div>
        </form>
</section>
</body>
</html>


