@extends('layouts.app')

@section('title', 'Article Edit Form')

@section('content')
    <section class="creationForm row justify-content-center align-content-center m-0 p-0">
    <h2 class="heading3 row justify-content-center">@lang('texts.article_updating')</h2>
    <form class="form col-9" action="{{route('articles.update',['article' => $article->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('articles.partials.form')
        <div class="col-2"><input class="mainButton col-12" type="submit" value="Update"></div>
    </form>
    </section>
@endsection
