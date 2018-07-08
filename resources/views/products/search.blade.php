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

        <div class="container">
            <div class="container">
                <form action="{{ route('products.search') }}">
                    <div class="container">
                        <input type="search" class="search col-md-10 col-xs-9"
                               placeholder="محصول مورد نظر خود را جستوجو کنید..." name="search">
                    </div>
                    <button type="submit" class="btnSearch col-md-2 col-xs-3"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <br>
        @foreach($products as $product)
            <div class="container" style="z-index: 1">
                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-4" style="margin-top:15px;">
                    <div class="card mb-2">
                        <div class="backImage">
                            <div class="loading">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">در حال بارگزاری...</span>
                            </div>
                        </div>
                        <a href="{{ route('products.single' , $product->slug) }}" class="imageStyle"> <img class="card-img-top " src="{{ $product->images['images']['321'] }}"
                                                                                                           alt="{{ $product->title }}" height="241"></a>
                        <div class="card-body">
                            <span class="writer">نویسنده: {{ $product->writer }}</span>
                            <h4 class="card-title direction">{{ $product->title }}</h4>
                            <p class="card-text direction">{{ strip_tags(str_limit($product->body , 300)) }}</p>
                            <a class="btn btn-primary" href="{{ route('products.single' , $product->slug) }}">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection