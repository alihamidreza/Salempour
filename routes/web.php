<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');
Route::get('emailSend' , function (){
    alert()->success('ایمیل فعال سازی برای ایمیل شما ارسال شد' , 'ایمیل فعال سازی');
    return redirect('/');
});
Route::get('/user/active/email/{token}' , 'UserController@Activation')->name('activation.account');

//Admin panel Routes
Route::group(['namespace' => 'Admin' , 'prefix' => 'panel' , 'middleware' => 'admin'] , function (){
   $this->get('/' , 'AdminController@index');
   $this->resource('/articles' , 'ArticleController');
   $this->resource('/products' , 'ProductController');
   $this->resource('/categories' , 'CategoryController');
   $this->resource('/users' , 'UserController');
});

Route::group(['namespace' => 'Auth'] , function (){
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'articles'] , function (){
    $this->get('/' , 'ArticleController@index')->name('articles.index');
    $this->get('/{article}' , 'ArticleController@single')->name('articles.single');
    $this->get('/searchArticle' , 'ArticleController@searchArticle')->name('articles.search');

});

Route::group(['prefix' => 'products'] , function (){
    $this->get('/' , 'ProductController@index')->name('products.index');
    $this->get('/{product}' , 'ProductController@single')->name('products.single');
//    $this->get('/search/{product}' , 'ArticleController@search')->name('articles.search');
});