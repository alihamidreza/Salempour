<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use SEO;
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
        SEO::setTitle('صفحه اصلی');
        SEO::setDescription('تولید انواع قایق و اتاقک وانت و پراید');
        SEO::opengraph()->setUrl('https://pishgamcomposite.ir');
        SEO::setCanonical('https://pishgamcomposite.ir');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@pishgamcomposte');

        $articles = Article::latest()->take(3)->get();
        $categories = Category::all();
        $products = Product::latest()->take(3)->get();

        return view('index' , compact('products' , 'articles' , 'categories'));
    }
}
