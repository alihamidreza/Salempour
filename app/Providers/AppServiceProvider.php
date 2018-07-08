<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Comment;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
//        App::bind('path.public', function() {
//            return base_path().'/public_html';
//        });

        View::composer('Admin.index' , function($view){
            $comments = Comment::where('approved' , 1)->count();
            $unApproved = Comment::where('approved' , 0)->count();
            $view->with(compact('comments' , 'unApproved'));
        });
        View::composer('Admin.section.header' , function($view){
            $comments = Comment::where('approved' , 1)->count();
            $unApproved = Comment::where('approved' , 0)->count();
            $view->with(compact('comments' , 'unApproved'));
        });
        View::composer('Admin.section.navbar' , function($view){
            $comments = Comment::where('approved' , 1)->count();
            $unApproved = Comment::where('approved' , 0)->count();
            $view->with(compact('comments' , 'unApproved'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
