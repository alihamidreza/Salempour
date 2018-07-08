@extends('Admin.master')

@section('content')

    <h2 align="center">میانبر ها</h2>
    <hr>
    <br>
    <div class="row">
        
            
            <a class="row btn btn-lg m-2 btn-info" href="/panel/products" >
                محصولات
            </a>
            
        
        
            
                <a class="row btn btn-lg m-2 btn-primary" href="/panel/articles" >
                    مقالات
                </a>
            
        
        
            
                <a class="row btn btn-lg m-2 btn-warning" href="panel/categories" >
                    دسته بندی ها
                </a>
            
        
        
            
                <a class="row btn btn-lg m-2 btn-success" href="/panel/comments" >
                    نظرات
                <span class="badge badge-light badge-pill">{{ $comments }}</span>
                </a>
            
            
                <a class="row btn btn-lg m-2 btn-danger" href="/panel/comments/unApproved" >
                    نظرات تایید نشده
                    <span class="badge badge-light badge-pill">{{ $unApproved }}</span>
                </a>
            
        
        
            
                <a class="row btn btn-lg m-2 btn-dark" href="/panel/users" >
                    کاربران
                </a>
            
    
    </div>

@endsection