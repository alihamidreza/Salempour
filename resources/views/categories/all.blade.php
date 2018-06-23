@extends('master')

@section('content')
    <style>
        .backmenu {
            background: #d32f2f !important;
        }
        .loginmenu{
            float: right;
            width: 100%;
            margin-top: 15px;

        }
    </style>
<section class="my-5 allPageSection">
    <br><br>

    <div class="row">
        <div class="container">
            <h3 align="right">دسته بندی ها</h3>
            <hr>
            @foreach($categories as $category)

                <a href="{{ route('categories.show' , $category->name) }}" class="btn btn-outline-dark" style="float: right">{{ $category->name }}</a>

            @endforeach
        </div>
    </div>

</section>
@endsection