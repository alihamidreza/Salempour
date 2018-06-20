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
    <style>
        body {
            background-color: #f5f4f4;
        }
    </style>
    <section class="my-5 container" style="padding: 0">
        <br><br>
        <div class="col-md-3" style="float: left;">
            <div class="container">
                <div class="categoryHead bg-gray direction container" data-target="#exampleModal-product"><i
                            class="fa fa-ellipsis-v" style="float: right;margin-top: 4px;"> </i> دسته بندی ها
                </div>

                <div class="backSubCat">
                    @foreach($categories as $category)

                        <a href="{{ route('categories.show' , $category->name) }}">
                            <div class="bg-gray direction container subCat"
                                 data-target="#exampleModal-product"><i
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
                    <h2 class="sm-center">{{ $product->title }}</h2>
                </div>
                <div class="sm-center"><a href="#" class="btn btn-sm btn-info"> اشتراک گذاری<i
                                class="fa fa-share-alt mr-2" style="vertical-align: middle"></i> </a></div>
                <div class="mt-5">

                </div>
            </div>
        </div>
        <!-- Grid row -->


    </section>
    <!-- Section: Blog v.4 -->
@endsection