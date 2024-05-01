
@extends('layouts.app')

@section('title', 'Article Creation Form')

@section('content')
    <section class="creationForm row justify-content-center align-content-center m-0 p-0">
        <h2 class="heading3 row justify-content-center">ARTICLE CREATION FORM</h2>
        <form class="form col-9" action="{{ route('articles.store') }}" method="POST">
            @csrf
            @include('articles.partials.form')
            <div class="col-2"><input class="mainButton col-12" type="submit" value="CREATE"></div>
        </form>
    </section>
@endsection
