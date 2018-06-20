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
            <form action="{{ route('articles.search') }}" method="get">
            <div class="container">
                <input type="search" class="search col-md-10 col-xs-9" placeholder="مقاله مورد نظر خود را جستوجو کنید..." name="search">
            </div>
                <button type="submit" class="btnSearch col-md-2 col-xs-3">جستوجو</button>
            </form>
        </div>
    </div>
    <br>
    <br>
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
                    <a href="{{ route('articles.single' , ['article' => $article->slug]) }}" class="imageStyle"> <img class="card-img-top " src="/{{ $article->images['images']['321'] }}"
                                     alt="{{ $article->title }}" height="241"></a>
                    <div class="card-body">
                        <span class="writer" style="z-index: 4">نویسنده: {{ $article->writer }}</span>
                        <h4 class="card-title direction">{{ $article->title }}</h4>
                        <p class="card-text direction">{{ strip_tags(str_limit($article->body , 150)) }}</p>
                        <a class="btn btn-primary" href="{{ route('articles.single' , ['article' => $article->slug]) }}">مطالعه کردن</a>
                        <span class="view-comment">{{ $article->viewCount }} <i class="fa fa-eye"></i> </span>
                        <span class="view-comment2">0 <i class="fa fa-commenting"></i> </span>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
    <br>
    <div class="container flex-center" style="position: relative; top: 46px;">
        {{ $articles->render() }}
    </div>
</section>
@endsection