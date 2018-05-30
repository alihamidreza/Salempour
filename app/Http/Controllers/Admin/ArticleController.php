<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
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
        auth()->loginUsingId(1);
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
            'writer' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg',
            'category_id' => 'required',
        ]);
        $category_id = $request->category_id;
        $user = auth()->user()->id;


        $article = Article::create(array_merge($request->all(), ["user_id" => $user]));
        $article->categories()->sync($category_id);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $file_name = $request->file('images')->hashName();
            $destinationPath = public_path('/images');
            $images->move($destinationPath, $file_name);
            $article->update(['images' => $file_name]);
            return redirect(route('articles.index'));
        }

        return dd(1);

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
        //
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
        return redirect(route('articles.index'));
    }

}
