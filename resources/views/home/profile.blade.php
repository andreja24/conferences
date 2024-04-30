@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="profile row justify-content-center">
        <h2 class="col-9 row justify-content-center align-content-end">{{ $user->name }}'s account</h2>
        <div class="userInfo col-9 row align-content-center justify-content-center">
            <p>NAME: {{ $user->name }}</p>
            <p>EMAIL: {{ $user->email }}</p>
        </div>
        <div class="userConferences col-9 flex-column">
            <h3 class="col-12">Your Registered Conferences:</h3>
            @if($articles->isEmpty())
                <p>You have not registered for any conferences yet.</p>
            @else
                <ul class="col-12 row justify-content-center">
                    @foreach($articles as $article)
                        <li class="conferenceList col-10">{{ $article->title }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
@endsection
