<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(): View
    {
        $article = new Article();
        return view('articles.index', ['articles' => $article->all()]);
    }
    public function show(int $id): View
    {
        return view('articles.show', ['article'=>Article::findOrFail($id)]);
    }
    public function create(): View
    {
        return view('articles.create');
    }
    public function edit(int $id): View
    {
        return view('articles.edit', ['article' => Article::findOrFail($id)]);
    }
    public function store(StoreArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated();
        $articleItem = $article->create($validated);
        $request->session()->flash('status', 'Article created!');

        return redirect()->route('articles.show', ['article' => $articleItem->id]);
    }
    public function update(StoreArticleRequest $request, int $id): RedirectResponse
    {
        $article = (new Article()) -> findOrFail($id);
        $validated = $request->validated();
        $article->fill($validated);
        $article->save();

        $request->session()->flash('status', 'Article was updated!');

        return redirect()->route('articles.show', ['article' => $article->id]);
    }
    public function destroy( int $id): RedirectResponse
    {
        $article = (new Article()) -> findOrFail($id);
        $article->delete();

        session()->flash('status', 'Article was deleted!');

        return redirect()->route('articles.index');
    }
}