@extends('frontend.index')
@section('main')
@section('title')
    Book Shop
@endsection
<!--start top header wrapper-->
<!--start slider section-->
@include('frontend.home.slider')
<!--end slider section-->

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start Featured product-->
        @include('frontend.home.featured')
        <!--end Featured product-->
        <!--start New Arrivals-->
        @include('frontend.home.new_arrival')
        <!--end New Arrivals-->
        <!--start categories-->
        @include('frontend.home.categories')
        <!--end categories-->
        <!--start brands-->
        @include('frontend.home.brands')
        <!--end brands-->
        <!--start bottom products section-->
        <!--end bottom products section-->
    </div>
</div>
<!--end page wrapper -->
<hr>
<!--start support info-->
@include('frontend.home.support')
<!--end support info-->

<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->


@endsection
