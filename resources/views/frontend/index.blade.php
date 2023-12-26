<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="title" content="Book Shop" />
    <meta name="author" content="Yong Vithei" />
    <meta name="keywords" content="bookshop, books, book store, literature, bestsellers, fiction, non-fiction, book recommendations, book lovers, online bookstore, bookshop near me, bookshop in Battambang, bookshop events, book signings, book club, new releases"/>
    <meta name="description" content="Welcome to Ponleu Vichea - your one-stop destination for all things books. Explore a vast collection of fiction, non-fiction, bestsellers, and more. Join our book club, attend book signings, and discover literary events in Battambang. Find your next literary adventure with us!"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('/frontend/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('/frontend/assets/plugins/OwlCarousel/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/frontend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet')}}" />
    <link href="{{asset('/frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('/frontend/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('/frontend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('/frontend/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('/frontend/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/assets/css/icons.css')}}" rel="stylesheet">

    @vite(['resources/css/app.css'])
    <!-- stylesheet -->

</head>

<body>

    <b class="screen-overlay"></b>
    <!--wrapper-->
    <div class="wrapper">

        @include('frontend.body.header')

        <main class="main">
            @yield('main')
        </main>

        @include('frontend.body.footer')
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{asset('/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/OwlCarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('/frontend/assets/js/app.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/index.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/quickmini.js')}}"></script>
</body>

</html>
