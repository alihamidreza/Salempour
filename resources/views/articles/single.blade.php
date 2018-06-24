@extends('master')

@section('content')
    <style>
        .backmenu {
            background: #d32f2f !important;
        }

        body {
            background-color: #f5f4f4;
        }

        .loginmenu {
            float: right;
            width: 100%;
            margin-top: 15px;
        }
    </style>
    <!-- Section: Blog v.4 -->

    <section class="my-5 container" style="padding: 0">
        <br><br>
        <div class="col-md-3" style="float: left;">
            <div class="container">
                <div class="categoryHead bg-gray direction container" data-target="#exampleModal-article"><i
                            class="fa fa-ellipsis-v" style="float: right;margin-top: 4px;"> </i> دسته بندی ها
                </div>

                <div class="backSubCat">
                    @foreach($categories as $category)

                        <a href="{{ route('categories.show' , $category->name) }}">
                            <div class="bg-gray direction container subCat"
                                 data-target="#exampleModal-article"><i
                                        class="fa fa-chevron-left ml-2"> </i> {{ $category->name }}
                            </div>
                        </a>

                    @endforeach
                </div>

            </div>
        </div>
        <!-- Grid row -->
        <div class="float-right col-md-9 col-sm-12">
            <div class="titlebar">
                <div class="title col-md-9" align="right">
                    <h2 class="sm-center">{{ $article->title }}</h2>
                </div>
                <div class="sm-center"><a href="#" class="btn btn-sm btn-info"> اشتراک گذاری<i
                                class="fa fa-share-alt mr-2" style="vertical-align: middle"></i> </a></div>
                <div class="mt-5 row">
                    <div class="mr-3">
                        <div class="sm-center d-md-inline d-sm-block">
                            <span class="mr-2"><i class="ml-1 fa fa-user"></i> نویسنده :<span
                                        class="mr-2">{{ $article->writer }}</span></span>
                        </div>

                        <div class="sm-center d-md-inline d-sm-block mr-4">
                            <span class="mr-2"><i class="ml-1 fa fa-clock-o"></i> تاریخ انتشار :<span
                                        class="mr-2">{{ $article->created_at }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 white border bordertn">
                <div class="img">
                    <div class="view">
                        <img src="/{{ $article->images['images']['898'] }}" class="img-fluid"
                             alt="{{ $article->title }}">
                        <div class="mask pattern-2 flex-center waves-effect waves-light"></div>
                    </div>
                </div>
            </div>
            <div class="body direction p-3 line-heght-4 white border bordertn article-body" style="line-height: 34px;">
                {!! $article->body !!}
            </div>
        </div>
        <!-- Grid row -->
        {{--COMMENT SECTION--}}
            @include('layouts.comment')
        {{--END COMMENT SECTION--}}
    </section>
    <!-- Section: Blog v.4 -->
@endsection