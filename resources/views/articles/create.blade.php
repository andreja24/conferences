
@extends('layouts.app')

@section('title', 'Article Creation Form')

@section('content')
    <h4>Article creation form</h4>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        @include('articles.partials.form')
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
