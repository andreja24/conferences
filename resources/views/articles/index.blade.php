@yield('content')

    @extends('layouts.app')

    @section('content')
        <h2>List of articles</h2>
        @guest
            <h3>SVECIAS</h3>
        @endguest
        @if(session('status'))
            <div class="articleStatus">{{session('status')}}</div>
        @endif
        @auth
            @if(auth()->user()->isAdmin())
                <a href="{{ route('articles.create') }}"><button type="button">Create article</button></a>
            @endif
        @endauth
            @each('articles.partials.list', $articles, 'article')
    @endsection

