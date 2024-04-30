@extends('layouts.app')
@section('title', 'Conference')
@section('content')
    @if(session('status'))
        <div class="status"> {{session(('status'))}}</div>
    @endif
    <section class="row justify-content-center articleProfile align-content-center">
        <article class="article col-4 p-3 me-3">
            <h4><a href="{{ route('articles.show', ['article' => $article['id']]) }}">{{ $article['title'] }}</a></h4>
            <p>{{ $article['date'] }}</p>
        </article>
        <div class="col-3 ms-3">
            <p>{{$article['speaker']}}</p>
            <p>{{$article['length']}}</p>
            <p>{{$article['start_time']}}</p>
            <p>{{$article['address']}}</p>
            <p>{{$article['date']}}</p>
            @if ($article->tickets_left > 0)
                <form action="{{ route('articles.register', $article) }}" method="POST" class="registerBtn">
                    @csrf
                    <button type="submit">Register</button>
                </form>
            @else
                <button class="btn btn-danger" disabled>Sold Out</button>
            @endif
        </div>
    </section>
@endsection
