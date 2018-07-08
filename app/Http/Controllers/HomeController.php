<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
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

        return view('index', compact('products', 'articles', 'categories'));
    }

    public function comment(Request $request)
    {
        if ($request->ajax()) {

            $validatedData = $request->validate([
                'name' => 'required|max:30',
                'comment' => 'required|min:5',
                'email' => 'required',
                'point' => 'required',
            ]);

            $insertData = Comment::create($request->all());
            if ($insertData) {
                return response()->json([
                    'error' => false,
                    'title' => 'عملیات موفقیت آمیز',
                    'text' => 'با تشکر از نظر شما . نظر شما پس از تایید در سایت قرار داده میشود.',
                    'icon' => 'success',
                    'button' => 'خیلی خوب!'
                ]);
            }
            else {
                return response()->json([
                    'error' => true,
                    'title' => 'عملیات ناموفق!',
                    'text' => 'نظر شما ثبت نشد . لطفا دوباره تلاس کنید',
                    'icon' => 'error',
                    'button' => 'خیلی خوب!'
                ]);
            }
        }
    }

    public function answercomment(Request $request)
    {
        if ($request->ajax()) {

            $validatedData = $request->validate([
                'name' => 'required|max:30',
                'comment' => 'required|min:5',
                'email' => 'required',
            ]);
             $insertData = Comment::create($request->all());
            if ($insertData) {
                return response()->json([
                    'error' => false,
                    'title' => 'عملیات موفقیت آمیز',
                    'text' => 'با تشکر از پاسخ شما . پاسخ شما پس از تایید در سایت قرار داده میشود.',
                    'icon' => 'success',
                    'button' => 'خیلی خوب!'
                ]);
            }
            else {
                return response()->json([
                    'error' => true,
                    'title' => 'عملیات ناموفق!',
                    'text' => 'پاسخ شما ثبت نشد . لطفا دوباره تلاش کنید',
                    'icon' => 'error',
                    'button' => 'خیلی خوب!'
                ]);
            }
        }
    }

    public function search(Request $request)
    {
        if (isset($request) && !empty($request)) {
            $articles = Article::where('title' , 'LIKE' , '%' . $request['search'] . '%')->latest()->get();
            $products = Product::where('title' , 'LIKE' , '%' . $request['search'] . '%')->latest()->get();
        }
        $categories = Category::all();
        return view('search' , compact('articles' , 'categories' , 'products'));
    }
}
