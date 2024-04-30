@yield('content')
    @extends('layouts.app')
    @section('content')
        <h3 class="row justify-content-center heading3">CONFERENCES</h3>
        @guest
            <p>SVECIAS</p>
        @endguest
        @if(session('status'))
            <div class="status">{{session('status')}}</div>
        @endif
        @auth
            @if(auth()->user()->isAdmin())
                <a href="{{ route('articles.create') }}"><button type="button">Create article</button></a>
            @endif
        @endauth
        @each('articles.partials.list', $articles, 'article')
    @endsection

