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
            <div class="container">
                <input type="search" class="search col-md-10 col-xs-9" placeholder="مقاله خود را جستوجو کنید...">
            </div>

            <div class="container">
                <button type="submit" class="btnSearch col-md-2 col-xs-3">جستوجو</button>
            </div>
        </div>
    </div>
    <br>
    <div class="row flex-center">
        {{ $products->render() }}
    </div>
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
                    <a href="" class="imageStyle"> <img class="card-img-top " src="{{ $product->images['images']['321'] }}"
                                     alt="{{ $product->title }}" height="241"></a>
                    <div class="card-body">
                        <span class="writer">نویسنده: {{ $product->writer }}</span>
                        <h4 class="card-title direction">{{ $product->title }}</h4>
                        <p class="card-text direction">{{ str_limit($product->body) }}</p>
                        <a class="btn btn-primary">مطالعه کردن</a>
                        <span class="view-comment">0 <i class="fa fa-eye"></i> </span>
                        <span class="view-comment2">0 <i class="fa fa-commenting"></i> </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container flex-center" style="position: relative; top: 46px;">
        {{ $products->render() }}
    </div>
</section>
@endsection