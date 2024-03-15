@extends('frontend.index')
@section('main')
@section('title')
   Subcategory
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">@if(session()->get('locale') == 'en') {{ $breadsub->sub_name ?? $breadsub->sub_kh ?? '' }} @else {{ $breadsub->sub_kh ?? $breadsub->sub_name ?? '' }} @endif</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        {{ __('main.home') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ $breadsub->category->name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">@if(session()->get('locale') == 'en') {{ $breadsub->sub_name ?? $breadsub->sub_kh ?? '' }} @else {{ $breadsub->sub_kh ?? $breadsub->sub_name ?? '' }} @endif
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop area-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="card rounded-lg w-100">
                            <div class="card-body">
                                <div class="product-categories">
                                    <h6 class="text-uppercase mb-1">{{ __('main.categories') }} </h6>
                                    <hr>
                                    <ul class="list-unstyled mt-2 categories-list">
                                        @php
                                            $categories = App\Models\Category::where('status', 'Active')
                                            ->orderBy('name', 'ASC')
                                            ->select('id', 'name', 'cat_kh','slug')
                                            ->get();
                                        @endphp
                                        @foreach($categories as $category)
                                        @php
                                            $productche = App\Models\Product::where('category_id', $category->id)
                                             ->where('status', 1)
                                             ->select('id')
                                             ->get();

                                        @endphp
                                        <!-- loop -->
                                        <li><a href="{{ url('product/category/'.$category->id.'/'.$category->slug) }}">@if(session()->get('locale') == 'en') {{ $category->name ?? $category->cat_kh ?? '' }} @else {{ $category->cat_kh ?? $category->name ?? '' }} @endif<span
                                                    class="float-end badge rounded-pill bg-primary">{{ count($productche) }}</span></a>
                                        </li>
                                        <!-- loop -->
                                        @endforeach
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="product-wrapper">
                            <div class="toolbox d-lg-flex align-items-center mb-3 gap-2 p-3 bg-white border rounded-lg">
                                <div class="d-flex flex-wrap">
                                    <p class="mb-0 font-13 text-nowrap text-dark text-2xl">{{ __('main.found') }}
                                        {{ count($products ?? []) }}

                                    </p>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                                    @foreach($products as $product)
                                    <!-- loop	 -->
                                    <div class="col">
                                        <div class="card rounded-lg product-card shadow-sm">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                                <div class="relative">
                                                    <img src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="card-img-top" alt="Product Image">
                                                    <div class="absolute top-2 right-2">
                                                        <a href="javascript:;" id="{{ $product->id }}" onclick="addToWishList(this.id)" class="product-wishlist product-action">
                                                            <i class="bx bx-heart text-red-500 text-2xl"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a
                                                        href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                                        <h6 class="product-name mb-2">
                                                            @if(session()->get('locale') == 'en')
                                                                {{ $product->name ? $product->name : $product->pro_kh }}
                                                            @else
                                                                {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                                            @endif</h6>
                                                    </a>
                                                    @if($product->discount_price != NULL)
                                                    <span class="me-1 text-decoration-line-through">
                                                        {{$product->discount_price}} {{ __('main.khr') }}</span>
                                                    <span class="fs-5">{{$product->price}} {{ __('main.khr') }}</span>
                                                    @else
                                                    <span class="fs-5">{{$product->price}} {{ __('main.khr') }}</span>
                                                    @endif
                                                    <div class="product-action mt-2">
                                                        <div class="grid grid-cols-2 gap-2">
                                                            <a href="javascript:;" id="{{ $product->id }}" onclick="addToMiniCart('{{ $product->id }}','{{ $product->name }}', {{ $product->price }},1)"
                                                                class="rounded-xl btn btn-dark btn-ecomm"> <i
                                                                    class='bx bxs-cart-add'></i>{{ __('main.add') }}</a>
                                                            <a href="javascript:;"
                                                                class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#QuickViewProduct" id="{{ $product->id }}" onclick="productView(this.id)"><i
                                                                        class='bx bxs-show'></i>{{ __('main.view') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- loop	 -->
                                    @endforeach
                                </div>

                                <!--end row-->
                            </div>
                            <hr class="mt-3">
                            <nav class="d-flex justify-end" aria-label="Page navigation">
                                {{ $products->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end shop area-->
    </div>
</div>
<!--end page wrapper -->

<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->


@endsection
