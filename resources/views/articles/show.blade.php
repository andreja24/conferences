@extends('layouts.app')
@section('title', 'Conference')
@section('content')
    @if(session('status'))
        <div class="status"> {{session(('status'))}}</div>
    @endif
    <section class="articleProfile">
        <article class="article me-3 col-4 row align-content-center justify-content-center">
            <h4 class="heading4 row justify-content-center">{{ $article['title'] }}</h4>
        </article>
        <div class="col-3 ms-3 row articleInfo">
            <h4>@lang('texts.speaker'): <span>{{$article['speaker']}}</span></h4>
            <h4>@lang('texts.date'): <span>{{$article['date']}}</span></h4>
            <h4>@lang('texts.address'): <span>{{$article['address']}}</span></h4>
            <h4> @lang('texts.start_time'): <span>{{$article['start_time']}}</span></h4>
            @if ($article->tickets_left > 0)
                <form action="{{ route('articles.register', $article) }}" method="POST" class="registerBtn row justify-content-start">
                    @csrf
                    <button type="button" class="mainButton col-8">
                        <b>@lang('texts.delete')</b>
                    </button>
                </form>
            @else
                <button class="btn btn-danger">@lang('texts.disabled')</button>
            @endif
        </div>
    </section>
    <section class="scrolling-container col-12">
        <div class="scrolling-text col-12">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
            <span class="col-2">about</span>
            <img class="col-1" src="{{ asset('images/icon.svg') }}" alt="Description of SVG">
        </div>
    </section>
    <section class="aboutArticle">
        <p class="col-7">{{$article['content']}}</p>
    </section>
@endsection
