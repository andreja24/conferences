@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="welcome row align-content-center m-0 col-12">
        <h1 class="heading1 col-7 row offset-1">@lang('texts.main_heading')</h1>
        <h2 class="heading2 col-7 offset-1">@lang('texts.sub_heading')</h2>
            @if(session('error'))
                <div class="status col-5 offset-1">
                    {{ session('error') }}
                </div>
            @endif
        <figure style="position: absolute">
            <img class="vilnius offset-5"  src="{{ asset('images/vilnius.png') }}" alt="vilnius illiustration">
        </figure>
    </section>
    <section class="scrolling-container col-12">
        <div class="scrolling-text col-12">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="star icon">
            @guest <a class="col-2" href="{{ route('login') }}">@lang('texts.create_account')</a>
                @else<span class="col-2">@lang('texts.welcome_back')</span>@endguest
        </div>
    </section>
    <section class="row justify-content-center topArticles">
        <h3 class="row col-7 justify-content-center align-content-end heading3">@lang('texts.last_chance')</h3>
        <div class="row flex-row align-content-center">
            @each('articles.partials.list', $articles, 'article')
            @if($articles->isEmpty())
                <p>@lang('texts.no_conferences')</p>
            @endif
        </div>
       <a class="col-3" href="{{ route('articles.index') }}"><button class="col-12 conferencesBtn">@lang('texts.all_conferences')</button></a>
    </section>
@endsection
