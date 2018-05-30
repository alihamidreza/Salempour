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

Route::get('/', function () {
    return view('welcome');
});

//Admin panel Routes
Route::group(['namespace' => 'Admin' , 'prefix' => 'panel'] , function (){
   $this->get('/' , 'HomeController@index');
   $this->resource('/articles' , 'ArticleController');
   $this->resource('/products' , 'ProductController');
   $this->resource('/categories' , 'CategoryController');
});