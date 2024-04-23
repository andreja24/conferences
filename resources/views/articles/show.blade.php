<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel project - @yield('title')</title>
</head>
<body>
<div>
    @yield('content')
    @extends('layouts.app')

    @section('content')
        @if(session('status'))
            <div class="articleStatus"> {{session(('status'))}}</div>
        @endif
            <h1>{{$article['title']}} labas </h1>
            <p>{{$article['content']}}</p>
    @endsection
</div>
</body>
</html>
