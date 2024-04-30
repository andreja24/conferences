<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel project - @yield('title', 'Register')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
<section class="registration col-9">
    <h3>sign up</h3>
        <form action="{{ route('register') }}" class="col-12" method="POST">
            @csrf
            <div class="formInputDiv">
                <label for="name-input">Name</label>
                <input type="text" id="name-input" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv">
                <label for="username-input">Username</label>
                <input id="username-input" type="text" name="username" value="{{ old('username') }}">
            </div>
            @error('username')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv">
                <label for="email-input">Email</label>
                <input id="email-input" type="email" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv">
                <label for="password-input">Password</label>
                <input id="password-input" type="password" name="password">
            </div>
            @error('password')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div class="formInputDiv">
                <label for="password-confirmation-input">Confirm Password</label>
                <input id="password-confirmation-input" type="password" name="password_confirmation">
            </div>
            @error('password_confirmation')
            <p class="errorMessage">{{ $message }}</p>
            @enderror
            <div>
            <input type="submit" value="CREATE AN ACCOUNT">
            </div>
        </form>
</section>
</body>
</html>


