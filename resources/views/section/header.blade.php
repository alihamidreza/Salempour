{{--<div class="d-none">{{ $categories = \App\Category::all() }}</div>--}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <strong>پیشگام کامپوزیت</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><div class="animated-icon1"><span></span><span></span><span></span></div></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto menu">
                <li class="nav-item active">
                    <a class="nav-link" href="/">صفحه اصلی
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products" data-toggle="modal" data-target="#exampleModal">محصولات <i class="fa fa-angle-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles" data-toggle="modal" data-target="#exampleModal-article">مقالات <i class="fa fa-angle-down"></i></a>

                </li>
                @if(! auth()->check())

                    <li class="nav-item log-re animated bounceInDown">
                        <a class="nav-link" href="/register">ثبت نام</a>
                    </li>
                    <li class="nav-item animated bounceInDown">
                        <a class="nav-link" href="/login">ورود</a>
                    </li>
                @else
                    <li class="nav-item log-re">
                        <a class="nav-link" href="/logout">خروج</a>
                    </li>
                    @if(auth()->user()->level == 'admin')
                        <li class="nav-item log-re animated bounceInDown">
                            <a class="nav-link" href="/panel">ورود به پنل مدیریت</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
    <div style="width: 100%;height: 64px;position: absolute;z-index: -10000;right: 0" class="backmenu">
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">دسته بندی مورد ننظر را انتخاب کنید</h5>
                    <div class="float-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
                <div class="modal-body">
                    <a href="{{ route('products.index') }}" class="container btn btn-red">همه محصولات</a>
                    @foreach($categories as $category)
                            <a href="{{ route('categories.show' , $category->name) }}" class="container btn btn-white btn-group">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal-article" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">دسته بندی مورد ننظر را انتخاب کنید</h5>
                    <div class="float-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                </div>
                <div class="modal-body">
                    <a href="{{ route('articles.index') }}" class="container btn btn-red">همه مقالات</a>
                    @foreach($categories as $category)
                        <a href="{{ route('categories.show' , $category->name) }}" class="container btn btn-white btn-group">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</nav>
