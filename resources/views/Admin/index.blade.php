@extends('Admin.master')

@section('content')

    <h2 align="center">میانبر ها</h2>
    <hr>
    <br>
    <div class="row">
        <div class="container col-md-6" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="container">
            <a class="row bt btn-danger" href="/panel/products" style="padding: 40px;font-size: 25px;text-align: center !important;border-radius: 5px;box-shadow: 0 0 20px #ccc ;">
                <span class="" style="margin-left: 32% !important;">محصولات</span>
            </a>
            </div>
        </div>
        <div class="container col-md-6" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="container">
                <a class="row bt btn-primary" href="/panel/articles" style="padding: 40px;font-size: 25px;text-align: center !important;border-radius: 5px;box-shadow: 0 0 20px #ccc ;">
                    <span class="" style="margin-left: 32% !important;">مقالات</span>
                </a>
            </div>
        </div>
        <div class="container col-md-6" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="container">
                <a class="row bt btn-warning" href="panel/categories" style="padding: 40px;font-size: 25px;text-align: center !important;border-radius: 5px;box-shadow: 0 0 20px #ccc ;">
                    <span class="" style="margin-left: 32% !important;">دسته بندی ها</span>
                </a>
            </div>
        </div>
        <div class="container col-md-6" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="container">
                <a class="row bt btn-success" href="/panel/comments" style="padding: 40px;font-size: 25px;text-align: center !important;border-radius: 5px;box-shadow: 0 0 20px #ccc ;">
                    <span class="" style="margin-left: 32% !important;">نظرات</span>
                </a>
            </div>
        </div>
        <div class="container col-md-6" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="container">
                <a class="row bt btn-dark" href="/panel/users" style="padding: 40px;font-size: 25px;text-align: center !important;border-radius: 5px;box-shadow: 0 0 20px #ccc ;">
                    <span class="" style="margin-left: 32% !important;">کاربران</span>
                </a>
            </div>
        </div>
    </div>

@endsection