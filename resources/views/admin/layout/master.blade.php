<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{ asset('assetsAdmin/img/fav.png') }}" />

    <!-- Title -->
    <title>@yield('title')</title>


    <!-- *************
        ************ Common Css Files *************
        ************ -->
   @include('admin.layout.head')
    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

</head>
<body>

<!-- Loading starts -->
<div id="loading-wrapper">
    <div class='spinner-wrapper'>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
        <div class='spinner'>
            <div class='inner'></div>
        </div>
    </div>
</div>
<!-- Loading ends -->


<!-- *************
    ************ Header section start *************
************* -->


<!-- Header start -->
@include('admin.layout.header')
<!-- Header end -->

<!-- *************
    ************ Header section end *************
************* -->


<div class="container-fluid">


    <!-- Navigation start -->
    @include('admin.layout.navbar')
    <!-- Navigation end -->


    <!-- *************
        ************ Main container start *************
    ************* -->
    @yield('content')
    <!-- *************
        ************ Main container end *************
    ************* -->

    <footer class="main-footer">© Royal Hospitals 2019</footer>

</div>

<!-- *************
    ************ Required JavaScript Files *************
************* -->
@include('admin.layout.footer-js')

</body>
</html>
