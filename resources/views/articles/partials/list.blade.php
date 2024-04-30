<article class="col-4 articleContainer">
    <div class="article col-9">
        <h4><a href="{{ route('articles.show', ['article' => $article['id']]) }}">{{ $article['title'] }}</a></h4>
        <p>{{ $article['date'] }}</p>
    </div>
    <div class="articleButtons">
        <form action="{{ route('articles.register', $article) }}" method="POST" class="registerBtn">
            @csrf
            <button type="submit">Register</button>
        </form>
        @auth
            @if(auth()->user()->isAdmin())
                    <a href="{{route ('articles.edit', ['article' => $article['id']])}}" class="editBtn"><button type="button">Edit</button></a>
                    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="POST" class="deleteBtn">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
            @endif
        @endauth
    </div>
</article>
