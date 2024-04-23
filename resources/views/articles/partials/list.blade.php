<div>
    <h4>{{ $article['title'] }}</h4>
    <p>{{ $article['content'] }}</p>
    @auth
        @if(auth()->user()->isAdmin())
            <a href="{{route ('articles.edit', ['article' => $article['id']])}}"><button type="button">Edit</button></a>
            <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endif
    @endauth
    <br>
</div>
