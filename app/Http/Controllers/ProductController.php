<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(6);
        return view('products.all' , compact('products' ,'categories'));
    }
}
