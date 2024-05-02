@yield('content')
    @extends('layouts.app')
    @section('content')
        <h3 class="m-0 row justify-content-center align-content-center heading3 conferenceWord">@lang('texts.conferences')</h3>
        @if(session('status'))
            <div class="status">{{session('status')}}</div>
        @endif
        @auth
            @if(auth()->user()->isAdmin())
                <a href="{{ route('articles.create') }}">
                    <button type="button" class="col-2 mainButton mt-0 offset-5">@lang('texts.create_article')</button>
                </a>
            @endif
        @endauth
        @each('articles.partials.list', $articles, 'article')
    @endsection

