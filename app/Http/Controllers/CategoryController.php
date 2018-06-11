<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SEO;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        SEO::setTitle('دسته بندی ها');
        SEO::setDescription('دسته بندی مقالات و محصولات');
        SEO::opengraph()->setUrl('https://pishgamcomposite.ir/categories');
        SEO::setCanonical('https://pishgamcomposite.ir/categories');
        SEO::opengraph()->addProperty('type', 'category');
        SEO::twitter()->setSite('@pishgamcomposte');

        return view('categories.all' , compact('categories'));
    }

    public function show(Category $category)
    {
        $categories = Category::all();
        $products = $category->products()->paginate(6);
        $articles = $category->articles()->paginate(6);
        return view('categories.show' , compact('category' , 'categories' , 'articles' , 'products'));
    }
}
