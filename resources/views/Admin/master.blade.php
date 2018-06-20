
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>پنل مدیریت پیشگام کامپوزیت</title>
    <link rel="stylesheet" href="/Admin/css/panel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

@include('Admin.section.header')

<div class="container-fluid">
    <div class="row">

        @include('Admin.section.navbar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<br>
            @yield('content')
        </main>
    </div>
</div>
<script src="/Admin/js/jquery.min.js"></script>
<script src="/Admin/js/panel.js"></script>
<script>
    $(document).ready(function () {
        $('#dropdownMenuLink').click(function () {
            $('.menudrop').toggleClass('d-block');
        });
    });
</script>
@yield('scripts')
</body>
</html>
