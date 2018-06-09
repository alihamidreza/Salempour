<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پیشگام کامپوزیت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="document-type" content="Public">
    <meta name="document-rating" content="General">
    <meta name="classification" content="Consumer">
    <meta name="rating" content="Safe For Kids">
    <meta name="resource-type" content="document">
    <meta content="index" name="googlebot" >
    <meta name="author" content="Pishgam Composite" >
    <meta name="copyright" content="Pishgam Composite" >
    <meta name="doc-class" content="Living Document" >
    <link rel="SHORTCUT ICON" href="images/logo.png">
    <META NAME="geo.position" CONTENT="latitude; longitude">
    <META NAME="geo.placename" CONTENT="آبادان">
    <META NAME="geo.region" CONTENT="iran Subdivision Code">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <style>
        .deep-purple.accent-2{
            background-color: #d32f2f !important;
        }
    </style>
</head>
<body>
<!-- Main navigation -->
    <!--Navbar-->
    @include('section.header')
    <!-- Navbar -->


    @yield('content')

<!--Footer-->
@include('section.footer')
<!--/.Footer-->


</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/mdb.min.js"></script>
<script src="/js/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
<script>
    $(document).ready(function(){
        $('.animated-icon1,.animated-icon3,.animated-icon4').click(function(){
            $(this).toggleClass('open');
        });
    });
</script>
</html>
