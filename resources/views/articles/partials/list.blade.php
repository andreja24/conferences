<article class="col-4 articleContainers ">
    <div class="article col-9 row align-content-center justify-content-center">
        <h4 class="heading4 row justify-content-center"><a class="row justify-content-center" href="{{ route('articles.show', ['article' => $article['id']]) }}">{{ $article['title'] }}</a></h4>
    </div>
    <div class="articleButtons col-11 justify-content-around">
        <form action="{{ route('articles.register', $article) }}" method="POST" class="registerBtn col-3">
            @csrf
            <button type="submit" class="mainButton col-12">@lang('texts.register')</button>
        </form>
        @auth
            @if(auth()->user()->isAdmin())
                    <a href="{{route ('articles.edit', ['article' => $article['id']])}}" class="registerBtn col-3"><button type="button" class="mainButton col-12">@lang('texts.edit')</button></a>
                    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="POST" class="deleteBtn row col-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger col-12">@lang('texts.delete')</button>
                    </form>
            @endif
        @endauth
    </div>
</article>
