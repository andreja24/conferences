@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="profile row justify-content-center">
            <h2 class="heading3 row justify-content-center align-content-end">{{ $user->name }}@lang('texts.account')</h2>
        <div class="userInfo row justify-content-center align-content-center col-9">
            <p>@lang('texts.username'): {{ $user->username }}</p>
            <p>@lang('texts.email'): {{ $user->email }}</p>
        </div>
        <div class="userConferences col-9 flex-column">
            <h3 class="col-12 heading3">@lang('texts.registered_conferences')</h3>
            @if($articles->isEmpty())
                <p>@lang('texts.no_registered_conference')</p>
            @else
                <article class="col-12 row justify-content-center">
                    @foreach($articles as $article)
                        <div class="conferenceList"><p>{{ $article->title }}</p></div>
                    @endforeach
                </article>
            @endif
        </div>
    </section>
@endsection
