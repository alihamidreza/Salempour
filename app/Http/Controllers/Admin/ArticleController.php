<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ArticleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('Admin.articles.all', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'writer' => 'required',
            'images' => 'required|mimes:jpeg,png,jpg',
            'category_id' => 'required',
        ]);
        $category_id = $request->category_id;
        $images = $this->UploadImage($request->file('images'));
        $article = auth()->user()->articles()->create(array_merge($request->all(), ['images' => $images]));
        $article->categories()->sync($category_id);

        return redirect('/panel/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('Admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'writer' => 'required',
        ]);
        $category_id = $request->category_id;

        if ($request->images == null){
            $article->update(array_merge($request->all() , ['images' => $article->images]));
            return redirect('/panel/articles');
        }
        @unlink($article->images['images']['321']);
        @unlink($article->images['images']['898']);
        $images = $this->UploadImage($request->file('images'));
        $article->update(array_merge($request->all() , ['images' => $images]));

        return redirect('/panel/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/panel/articles');
    }

}
