@extends('master')

@section('content')
    <style>
        .backmenu {
            background: #d32f2f !important;
        }

        .loginmenu {
            float: right;
            width: 100%;
            margin-top: 15px;
        }
    </style>

    <section class="my-5 allPageSection">
        <br>
        <br>
        <div class="col-md-12 col-sm-12">
            <div class="container">
                <h3 align="right">مقالات برای دسته بنده <span class="red-text">{{ $category->name }}</span></h3>
                <hr>
                @if(count($articles) < 1)
                    <h1 align="center"><span class="fa fa-eye-slash"></span></h1>
                    <br>
                    <h1 align="center">مقاله ای یافت نشد</h1>
                @endif

                <div class="row flex-center">
                    {{ $articles->render() }}
                </div>
                @foreach($articles as $article)
                    <div class="container" style="z-index: 1">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-4" style="margin-top:15px;">
                            <div class="card mb-2">
                                <div class="backImage">
                                    <div class="loading">
                                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                        <span class="sr-only">در حال بارگزاری...</span>
                                    </div>
                                </div>
                                <a href="{{ route('articles.single' , ['article' => $article->slug]) }}"
                                   class="imageStyle"> <img class="card-img-top "
                                                            src="/{{ $article->images['images']['321'] }}"
                                                            alt="{{ $article->title }}" height="241"></a>
                                <div class="card-body">
                                    <span class="writer" style="z-index: 4">نویسنده: {{ $article->writer }}</span>
                                    <h4 class="card-title direction">{{ $article->title }}</h4>
                                    <p class="card-text direction">{{ str_limit($article->body) }}</p>
                                    <a class="btn btn-primary"
                                       href="{{ route('articles.single' , ['article' => $article->slug]) }}">مطالعه
                                        کردن</a>
                                    <span class="view-comment">{{ $article->viewCount }} <i
                                                class="fa fa-eye"></i> </span>
                                    <span class="view-comment2">0 <i class="fa fa-commenting"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br><br>
        <div class="col-md-12 col-sm-12" style="margin-top: 30px;margin-bottom: 30px;">
            <div class="container">
                <h3 align="right">محصولات برای دسته بنده <span class="red-text">{{ $category->name }}</span></h3>
                <hr>
                @if(count($products) < 1)
                    <h1 align="center"><span class="fa fa-eye-slash"></span></h1>
                    <br>
                    <h1 align="center">محصولی ای یافت نشد</h1>
                @endif
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
                                <a href="{{ route('products.single' , ['product' => $product->slug]) }}"
                                   class="imageStyle">
                                    <img class="card-img-top " src="/{{ $product->images['images']['321'] }}"
                                         alt="{{ $product->title }}" height="241"></a>
                                <div class="card-body">
                                    <h4 class="card-title direction">{{ $product->title }}</h4>
                                    <p class="card-text direction">{{ str_limit($product->body) }}</p>
                                    <a class="btn btn-primary"
                                       href="{{ route('products.single' , ['product' => $product->slug]) }}">مطالعه
                                        کردن</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <br>
    </section>
@endsection