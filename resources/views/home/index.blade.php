@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="welcome row align-content-center m-0 col-12">
        <h1 class="heading1 col-7 row offset-1">WHERE MINDS ALIKE MEET</h1>
        <h2 class="heading2 col-7 offset-1">CONFERENCES IN VILNIUS</h2>
        @if(session('error'))
            <div class="status col-5 offset-1">
                {{ session('error') }}
            </div>
        @endif
    </section>
    <section class="scrolling-container col-12">
        <div class="scrolling-text col-12">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">CREATE AN ACCOUNT</a>
                @else<span class="col-2">welcome back</span>@endguest
        </div>
    </section>
    <section class="row justify-content-center topArticles">
        <h3 class="row col-7 justify-content-center align-content-end heading3">LAST CHANCE BEFORE IT'S SOLD OUT</h3>
        <div class="row flex-row align-content-center">
            @each('articles.partials.list', $articles, 'article')
            @if($articles->isEmpty())
                <p>You have not registered for any conferences yet.</p>
            @endif
        </div>
       <a class="col-3" href="{{ route('articles.index') }}"><button class="col-12 conferencesBtn">ALL CONFERENCES</button></a>
    </section>
@endsection
