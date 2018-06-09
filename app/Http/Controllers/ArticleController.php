<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::latest()->paginate(6);
        return view('articles.all' , compact('articles' ,'categories'));
    }
}
