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
    <!-- Section: Blog v.4 -->

        <section class="my-5 container" style="padding: 0">
            <br><br>
            <div class="col-md-3" style="float: left !important;">
                <div class="container">
                    <a class="container a-gradient white-text flex-center" href="{{ route('articles.index') }}" style="padding: 30px;margin-bottom: 10px;">مشاهده همه مقالات</a>
                    <a class="container purple-gradient white-text flex-center" href="{{ route('products.index') }}" style="padding: 30px;margin-bottom: 10px;margin-top: 10px;">مشاهده همه محصولات</a>
                    <div class="categoryHead bg-gray direction container" data-target="#exampleModal-article"><i class="fa fa-ellipsis-v" style="float: right;margin-top: 4px;">  </i>  دسته بندی ها</div>

                    <div class="backSubCat">
                        @foreach($categories as $category)

                            <a href="{{ route('categories.show' , $category->name) }}">
                                <div class="bg-gray direction container subCat"
                                     data-target="#exampleModal-product"><i
                                            class="fa fa-chevron-left"> </i> {{ $category->name }}
                                </div>
                            </a>

                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Grid row -->
            <div class="direction col-md-9 col-xs-12 col-sm-12 singleContent">

                <!-- Grid column -->
                <div class="container singleContent">

                    <!-- Card -->
                    <div class="card card-cascade wider reverse" style="box-shadow: none">
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center bg-gray">

                            <!-- Title -->
                            <h2 class="font-weight-bold"><a>{{ $article->title }}</a></h2>
                            <!-- Data -->
                            <p>نوشته شده توسط <a><strong>{{ $article->writer }}</strong></a>
                                , {{ $article->created_at }}</p>
                            <!-- Social shares -->
                            <div class="social-counters">
                                <a class="btn btn-warning"> <i class="fa fa-share-alt"></i> اشتراک گذاری مقاله</a>
                            </div>
                            <!-- Social shares -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                    <!-- Excerpt -->
                    <div class="mt-5 description">
                        {!! $article->body !!}
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->


    </section>
    <!-- Section: Blog v.4 -->
@endsection