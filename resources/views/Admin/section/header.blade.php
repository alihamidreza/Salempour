
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    {{--<a class="navbar-brand col-sm-3 col-md-2 mr-0 d-none" href="#">PCA</a>--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-navicon"></span>
            </a>
            <div class="dropdown-menu menudrop" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/panel">صفحه اصلی</a>
                <a class="dropdown-item" href="/panel/users">کاربران</a>
                <a class="dropdown-item" href="/panel/comments/unApproved"><span class="badge badge-dark badge-pill">{{ $unApproved }}</span> نظرات تایید شده</a>
                <a class="dropdown-item" href="/panel/comments"><span class="badge badge-dark badge-pill">{{ $comments }}</span> نظرات</a>
                <a class="dropdown-item" href="/panel/categories">دسته بندی ها</a>
                <a class="dropdown-item" href="/panel/products">محصولات</a>
                <a class="dropdown-item" href="/panel/articles">مقالات</a>
            </div>
        </div>
    </nav>
</nav>