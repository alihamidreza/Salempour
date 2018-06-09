<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        $articlesFirst = Article::latest()->offset(0)
            ->limit(3)
            ->get();
        $articlesLast = Article::latest()->offset(3)
            ->limit(3)
            ->get();
        $products = Product::latest()->paginate(3);
        return view('index' , compact('articlesFirst' , 'articlesLast' , 'products' , 'articles' , 'categories'));
    }
}
