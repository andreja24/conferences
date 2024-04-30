@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="welcome row align-content-center">
        <h1 class="heading1 col-7 align-content-center offset-1">WHERE MINDS ALIKE MEET</h1>
        <h2 class="heading2 col-7 offset-1">CONFERENCES IN VILNIUS</h2>
    </section>


    <div class="scrolling-container">
        <div class="scrolling-text">
            CREATE AN ACCOUNT
        </div>
    </div>




    <section class="row justify-content-center">
        <h3 class="row col-6 justify-content-center heading3">LAST CHANCE BEFORE IT'S SOLD OUT</h3>
        <div class="row flex-row">
            @each('articles.partials.list', $articles, 'article')
            @if($articles->isEmpty())
                <p>You have not registered for any conferences yet.</p>
            @endif
        </div>
        <button class="col-4"><a href="{{ route('articles.index') }}">ALL CONFERENCES</a></button>
    </section>

@endsection
@if(session('error'))
    <div class="status">
        {{ session('error') }}
    </div>
@endif
