<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->add(url()->to('/') , '2018-08-26T12:30:00+02:00' , '1.0' , 'daily');
        $sitemap->add(url()->to('/login') , '2018-08-26T12:30:00+02:00' , '0.6' , 'daily');
        $sitemap->add(url()->to('/register') , '2018-08-26T12:30:00+02:00' , '0.6' , 'daily');
        $sitemap->add(url()->to('/sitemap-articles') , '2018-08-26T12:30:00+02:00' , '0.9' , 'daily');
        $sitemap->add(url()->to('/sitemap-products') , '2018-08-26T12:30:00+02:00' , '0.9' , 'daily');
        $sitemap->add(url()->to('/sitemap-categories') , '2018-08-26T12:30:00+02:00' , '0.9' , 'daily');

        return $sitemap->render();
    }

    public function articles()
    {
        $sitemap = app()->make('sitemap');
        $articles = Article::latest()->get();
        foreach ($articles as $article){
            $sitemap->add(url()->to("/articles/$article->slug") , $article->created_at , '0.9' , 'Weekly');
        }
        return $sitemap->render();
    }

    public function products()
    {
        $sitemap = app()->make('sitemap');
        $products = Product::latest()->get();
        foreach ($products as $product){
            $sitemap->add(url()->to("/products/$product->slug") , $product->created_at , '0.9' , 'Weekly');
        }
        return $sitemap->render();
    }

    public function categories()
    {
        $sitemap = app()->make('sitemap');
        $categories = Category::latest()->get();
        foreach ($categories as $category){
            $sitemap->add(url()->to("/categories/$category->name") , $category->created_at , '0.9' , 'Weekly');
        }
        return $sitemap->render();
    }
}
