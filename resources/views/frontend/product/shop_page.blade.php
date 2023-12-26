@extends('frontend.index')
@section('main')
@section('title')
Shop Pages
@endsection
<link href="{{asset('/frontend/assets/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.all_products') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        {{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.shop') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.all_products') }}
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
                        <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                        </div>
                        <div class="filter-sidebar d-none d-xl-flex">
                            <div class="card rounded-0 w-100">
                                <div class="card-body">
                                    <form method="post" action="{{ route('shop.filter') }}">
                                        @csrf
                                        <div class="align-items-center d-flex d-xl-none">
                                            <h6 class="text-uppercase mb-0">Filter</h6>
                                            <div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
                                        </div>
                                        <hr class="d-flex d-xl-none" />
                                       <div class="price-range">
                                            <h6 class="text-uppercase mb-3">{{ __('price') }}</h6>
                                            <div class="my-4" id="slider"></div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="ms-auto">
                                                   <p class="mb-0">Price:  <span id="price-min">0</span> - <span id="price-max">1000000</span></p>
                                                    <input type="text" name="price_range" id="price-range-input" style="display: none;">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        @if(!empty($_GET['category']))
                                        @php
                                        $filterCat = explode(',',$_GET['category']);
                                        @endphp

                                        @endif

                                        <div class="size-range mb-4">
                                            <h6 class="text-uppercase mb-3">{{ __('main.select_category') }}</h6>
                                            <ul class="list-unstyled mb-0 categories-list">
                                                <!-- loop -->
                                                @foreach($categories as $category)
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="category[]" type="checkbox" value="{{ $category->slug }}" @if(!empty($filterCat) && in_array($category->slug,$filterCat)) checked @endif onchange="this.form.submit()" />
                                                        <label class="form-check-label" for="book" id="box{{ $category->id }}">{{ $category->name }} </label>
                                                    </div>
                                                </li>
                                                @endforeach
                                                <!-- loop -->
                                            </ul>
                                            <button href="javascript:;" class="rounded-lg btn btn-dark hover:shadow-xl bg-slate-800">{{ __('main.filter_button') }}</button>
                                        </div>
                                        <hr>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="product-wrapper">
                            <div class="toolbox d-flex align-items-center mb-3 gap-2">
                                <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <p class="mb-0 font-13 text-nowrap">{{ __('main.sort_by') }}</p>
                                        <select class="form-select ms-3 rounded-0">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <p class="mb-0 font-13 text-nowrap">{{ __('main.show') }}</p>
                                        <select class="form-select ms-3 rounded-0">
                                            <option>9</option>
                                            <option>12</option>
                                            <option>16</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>
                                <div> <a href="" class="btn btn-white rounded-0"><i class='bx bxs-grid me-0'></i></a>
                                </div>
                                <div> <a href="/shoplist" class="btn btn-light rounded-0"><i class='bx bx-list-ul me-0'></i></a>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                    @if(count($products) > 0)
                                    @foreach($products as $product)
                                    <!-- loop	 -->
                                    <div class="col mt-4">
                                        <div class="card rounded-lg product-card shadow-sm">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                                <div class="relative">
                                                    <img src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="card-img-top" alt="Product Image">
                                                    <div class="absolute top-2 right-2">
                                                        <a href="javascript:;" class="product-wishlist product-action">
                                                            <i class="bx bx-heart text-red-500 text-2xl"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                                        <h6 class="product-name mb-2">{{$product->name}}</h6>
                                                    </a>
                                                    @if($product->discount_price != NULL)
                                                    <span class="me-1 text-decoration-line-through">
                                                        {{$product->discount_price}} KHR</span>
                                                    <span class="fs-5">{{$product->price}} KHR</span>
                                                    @else
                                                    <span class="fs-5">{{$product->price}} KHR</span>
                                                    @endif
                                                    <div class="product-action mt-2">
                                                        <div class="grid grid-cols-2 gap-2">
                                                            <a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm"> <i class='bx bxs-cart-add'></i>Add</a>
                                                            <a href="javascript:;" class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200" data-bs-toggle="modal" data-bs-target="#QuickViewProduct" id="{{ $product->id }}" onclick="productView(this.id)"><i class='bx bxs-show'></i>View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- loop	 -->
                                    @endforeach
                                    @else
                                    <div class="card-body">
                                        <h1 class="text-center text-xl">No products available</h1>
                                        @endif
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



<!--plugins-->
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/frontend/assets/plugins/nouislider/nouislider.min.js')}}"></script>



<!--app JS-->
<script>
    // Initialize Nouislider
    var slider = document.getElementById('slider');
    var priceRangeInput = document.getElementById('price-range-input');
    noUiSlider.create(slider, {
        start: [0, 990000], // Initial values
        connect: true, // Create a range slider
        range: {
            'min': 0,
            'max': 1000000 // Set your desired price range
        }
    });

    // Get the price elements
    var priceMin = document.getElementById('price-min');
    var priceMax = document.getElementById('price-max');

    // Update price when slider values change
    slider.noUiSlider.on('update', function (values, handle) {
        if (handle === 0) {
            priceMin.innerText = values[0];
        }
        if (handle === 1) {
            priceMax.innerText = values[1];
        }
        priceRangeInput.value = values.join('-');
    });
</script>

@endsection
