@extends('master')

@section('content')
<div class="backheader">
    <header>
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('images/photo_2016-05-29_21-08-50 (1).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment: fixed">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="" style="width: 100%;">
                    <!--Grid column-->
                    <div class="col-md-12 white-text text-center">
                        <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-normal wow animated bounceInRight logo-text" data-wow-delay="0.3s">
                            <a class="indigo-text font-weight-normal peach-gradient" style="color: #d32f2f !important" href="/">
                                پیشگام کامپوزیت</a>
                            اروند
                        </h1>
                        <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow animated bounceInLeft" data-wow-delay="0.3s" style="letter-spacing: 0 !important;">پیشگام در تولید کامپوزیت وانت و قایق در خوزستان</h5>
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <a class="btn btn-light-blue btn-lg animated bounceInUp" style="background-color: #1c2331 !important;">سفارش محصول</a>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
    <div class="arrow-down animated bounce infinite" style="position: absolute;bottom: 0;left: 48.5%;cursor: pointer; ">
        <span class="fa fa-angle-down " style="font-size:70px;color:white;"></span>
    </div>
    </header>
</div>
    <!-- Main navigation -->
    <!-- Section: Blog v.1 -->



    <!-- Section: Blog v.1 -->
    <section class="my" style="widows: 100%;;">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item container" data-ride="carousel">
            <div data-aos="fade-up"
                 data-aos-easing="ease-out-cubic">
                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">آخرین مقالات</h2>
                <center><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;height: 1px;"></center>
                <!-- Section description -->
            </div>
            <a class="btn btn-red" style="background: #d32f2f!important;margin-left:10px; " href="{{ route('articles.index') }}">مشاهده همه</a>
            <br>
            <br>

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="{{ count($articles) > 3 ? 'carousel-item' : '' }} active">

                    @foreach($articlesFirst as $article)

                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="backImage">
                                    <div class="loading">
                                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                        <span class="sr-only">در حال بارگزاری...</span>
                                    </div>
                                </div>
                                <a href="{{ route('articles.single' , ['article' => $article->slug]) }}" class="imageStyle"> <img class="card-img-top " src="{{ $article->images['images']['321'] }}"
                                                                    alt="{{ $article->title }}" height="241"></a>
                                <div class="card-body">
                                    <span class="writer">نویسنده: {{ $article->writer }}</span>
                                    <h4 class="card-title direction">{{ $article->title }}</h4>
                                    <p class="card-text direction">{{ str_limit($article->body) }}</p>
                                    <a class="btn btn-primary" href="{{ route('articles.single' , ['article' => $article->slug]) }}">مطالعه کردن</a>
                                    <span class="view-comment">{{ $article->viewCount }} <i class="fa fa-eye"></i> </span>
                                    <span class="view-comment2">0 <i class="fa fa-commenting"></i> </span>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    @foreach($articlesLast as $article)
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="backImage">
                                    <div class="loading">
                                        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                        <span class="sr-only">در حال بارگزاری...</span>
                                    </div>
                                </div>
                                <a href="{{ route('articles.single' , ['article' => $article->slug]) }}" class="imageStyle"> <img class="card-img-top " src="{{ $article->images['images']['321'] }}"
                                                                    alt="{{ $article->title }}" height="241"></a>
                                <div class="card-body">
                                    <span class="writer">نویسنده: {{ $article->writer }}</span>
                                    <h4 class="card-title direction">{{ $article->title }}</h4>
                                    <p class="card-text direction">{{ str_limit($article->body) }}</p>
                                    <a class="btn btn-primary" href="{{ route('articles.single' , ['article' => $article->slug]) }}">مطالعه کردن</a>
                                    <span class="view-comment">{{ $article->viewCount }} <i class="fa fa-eye"></i> </span>
                                    <span class="view-comment2">0 <i class="fa fa-commenting"></i> </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

            </div>
            <!--/.Slides-->

        </div>
        <!--Controls-->
        <br>
        @if(count($articles) > 3)

                <div class="controls-top" style="text-align: center">
                    <a class="btn-floating aprev" href="#multi-item-example" data-slide="prev" data-aos="fade-left"
                       data-aos-easing="ease-out-cubic"
                       data-aos-duration=""><i class="fa fa-chevron-right prev"></i></a>
                    <a class="btn-floating aprev" href="#multi-item-example" data-slide="next"
                       data-aos="fade-right"
                       data-aos-easing="ease-out-cubic"
                       data-aos-duration=""><i class="fa fa-chevron-left prev"></i></a>
                </div>

        @endif
        <!--/.Controls-->
        <!--/.Carousel Wrapper-->

    </section>
    <!-- Section: Blog v.3 -->
    <section class="my-5 container">
        <div data-aos="fade-up"
             data-aos-easing="ease-out-cubic">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">معرفی محصولات</h2>
            <center><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;height: 1px;"></center>
            <!-- Section description -->
            <br>
        </div>
        <a class="btn btn-red" style="background: #d32f2f!important;" href="{{ route('products.index') }}">مشاهده همه</a>
        <br>
        <br><br>
        @foreach($products as $product)

            <!-- Grid row -->
                <div class="row" data-aos="fade-left"
                     data-aos-easing="ease-out-cubic"
                     data-aos-duration="">
                    <!-- Grid column -->
                    <div class="col-lg-5 col-xl-4">
                        <!-- Featured image -->
                        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4" style="width: 321px !important;">
                            <a href="{{ route('products.single' , $product->slug) }}"> <img class="card-img-top " src="{{ $product->images['images']['321'] }}"
                                                                alt="{{ $product->title }}" height="241"></a>

                        </div>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-7 col-xl-8">

                        <!-- Post title -->
                        <h3 class="font-weight-bold mb-3 direction"><strong>{{ $product->title }}</strong></h3>
                        <!-- Excerpt -->
                        <p class="dark-grey-text direction">{{ str_limit($product->body , 350) }}</p>
                        <!-- Post data -->

                        <!-- بیشتر button -->
                        <a class="btn btn-primary btn-md more" href="{{ route('products.single' , $product->slug) }}">بیشتر</a>
                        <div class="alert alert-success col-md-8 float-md-right col-sm-8 col-xs-8" style="text-align: center !important;">برای دریافت قیمت و اطلاعات بیشتر با ما تماس بگیرید</div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <hr class="my-5">

        @endforeach
        <!--Pagination -->
        <br><br>

    </section>
    <!-- Section: Blog v.3 -->



    <!-- Section: Contact v.1 -->

    <!-- Section: Testimonials v.1 -->
    <section class="text-center my-5 container">
        <!-- Grid row -->
        <div class="row" data-aos="flip-left"
             data-aos-easing="ease-out-cubic">
            <!--Grid column-->
            <div class="col-lg-12 col-md-12">
                <!--Card-->
                <div class="card testimonial-card backAdmin">
                    <div class="imageDef">

                    </div>
                    <!--Background color-->
                    <div class="card-up indigo"></div>

                    <!--Avatar-->
                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold text-center my-5" style="color: white;">درباره مدیرعامل</h2>
                    <center><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;height: 1px;" style="background-color: white !important"></center>
                    <!-- Section description -->
                    <div class="avatar mx-auto white" style="border-radius: 50% !important">
                        <img src="images/download.png" class="rounded-circle img-fluid" style="border-radius: 50% !important;position: relative;z-index: none;">
                    </div>
                    <div class="card-body">
                        <!--Name-->
                        <h4 class="font-weight-bold mb-4">رضا سالم پور</h4>
                        <hr>
                        <!--Quotation-->
                        <p class="dark-grey-text mt-4"><i class="fa fa-quote-left pr-2"></i>ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>

                </div>
                <!--Card-->
            </div>
            <!--Grid column-->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Testimonials v.1 -->
    <!-- Section: Contact v.2 -->
    <section class="my-5 container" >

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5" >تماس با ما</h2>
        <center><hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;height: 1px;background: #d32f2f !important;"></center>
        <!-- Section description -->
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 mb-md-0 mb-5">

                <form>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-name" class="form-control">
                                <label for="contact-name" class="">نام شما</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-email" class="form-control">
                                <label for="contact-email" class="">ایمیل شما</label>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="contact-Subject" class="form-control">
                                <label for="contact-Subject" class="">موضوع</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                                <label for="contact-message">پیام شما</label>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </form>

                <div class="text-center text-md-right">
                    <a class="btn btn-primary btn-md flex-center">ثبت</a>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>

    <!-- Section: Contact v.2 -->
@section('script')
    @if (Session::has('sweet_alert.alert'))
        <script>
            swal({
                text: "{!! Session::get('sweet_alert.text') !!}",
                title: "{!! Session::get('sweet_alert.title') !!}",
                type: "{!! Session::get('sweet_alert.type') !!}",
                showConfirmButton: "{!! Session::get('sweet_alert.showConfirmButton') !!}",
                confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}",
                confirmButtonColor: "#1c2331",
                icon: "success",
                button: "خیلی خوب!",
                // more options
            });
        </script>
    @endif
@endsection
@endsection