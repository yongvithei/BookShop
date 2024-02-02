@extends('frontend.index')
@section('main')
@section('title')
   Product Detail
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">
                        @if(session()->get('locale') == 'en')
                            {{ $product->name ? $product->name : $product->pro_kh }}
                        @else
                            {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                        @endif</h6></h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i
                                            class="bx bx-home-alt"></i>{{ __('main.home') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:;">
                                        @if ($product->category)
                                            @if(session()->get('locale') == 'en')
                                                {{ $product->category->name ? $product->category->name : ($product->category->cat_kh ?? 'N/A') }}
                                            @else
                                                {{ $product->category->cat_kh ? $product->category->cat_kh : ($product->category->name ?? 'N/A') }}
                                            @endif
                                        @else
                                            N/A
                                    @endif

                                </li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:;">
                                        {{ optional($product->subcategory)->{session()->get('locale') == 'en' ? 'sub_name' : 'sub_kh'} ?: 'N/A' }}
                                    </a></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @if(session()->get('locale') == 'en')
                                        {{ $product->name ? $product->name : $product->pro_kh }}
                                    @else
                                        {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                    @endif</h6></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start product detail-->
        <section class="py-4">
            <div class="container">
                <div class="product-detail-card">
                    <div class="product-detail-body">
                        <div class="row g-0">
                            <div class="col-12 col-lg-5">
                                <div class="image-zoom-section mb-3">
                                    <div class="product-gallery owl-carousel owl-theme mb-3 p-3"
                                        data-slider-id="1">
                                        @forelse($multiImage as $img)
                                            <div class="item">
                                                <img src="{{ asset('uploads/products/small/'. ($img->name ?? '/storage/images/pro_img.jpg')) }}"
                                                     class="mx-auto w-auto h-auto sm:w-24 sm:h-96 md:w-64 md:h-64 lg:w-96 lg:h-96"
                                                     alt="{{ $img->name ?? 'Default Image' }}">
                                            </div>
                                        @empty
                                            <!-- Display default image when $multiImage is empty -->
                                            <div class="item">
                                                <img src="{{ asset('/storage/images/pro_img.jpg') }}"
                                                     class="mx-auto w-auto h-auto sm:w-24 sm:h-96 md:w-64 md:h-64 lg:w-96 lg:h-96"
                                                     alt="Default Image">
                                            </div>
                                        @endforelse
                                    </div>
                                    <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">

                                        @foreach($multiImage as $img)
                                        <button class="owl-thumb-item">
                                            <img src="{{ asset('uploads/products/small/'.$img->name) }}" class=""
                                                alt="Image">
                                        </button>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="product-info-section p-3">
                                    <h3 class="mt-3 mt-lg-0 mb-0">
                                        @if(session()->get('locale') == 'en')
                                            {{ $product->name ? $product->name : $product->pro_kh }}
                                        @else
                                            {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                        @endif</h3>
@php
                                    $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                    $avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                                    @endphp
                                    <div class="d-flex align-items-center mt-3 gap-2">
                                        @if($product->discount_price == NULL)
                                        <h4 class="mb-0">{{$product->price}} {{ __('main.khr') }}</h4>
                                        @else
                                        <h5 class="mb-0 text-decoration-line-through text-light-3">
                                            {{$product->discount_price}} {{ __('main.khr') }}</h5>
                                        <h4 class="mb-0">{{$product->price}} {{ __('main.khr') }}</h4>
                                        @endif
                                    </div>
                                    <div class="row row-cols-auto align-items-center mt-3">
                                        <div class="col">
                                            <label class="form-label">{{ __('main.quantity') }}</label>
                                            <div class="input-group input-group-sm">
                                                <input type="number" class="form-control" min="0" max="{{ $product->pro_qty ?? 0 }}" value="{{ $product->pro_qty ?? 0 ? 1 : 0 }}" id="dquantityInput" oninput="handleQuantityChange()">
                                                <button class="btn btn-outline-secondary" type="button" id="incrementQuantity">+</button>
                                                <button class="btn btn-outline-secondary" type="button" id="decrementQuantity" onclick="handleDecrement()">-</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label {{ $product->pro_qty > 0 ? '' : 'text-red-600' }}">
                                            {{ $product->pro_qty > 0 ? $product->pro_qty . __('main.available') : __('main.stock_out') }}
                                        </label>
                                        <div class="product-rating d-flex align-items-center mt-1">
                                            @if($avarage == 0)

                                            @elseif($avarage == 1 || $avarage < 2)
                                            <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                            </div>
                                             @elseif($avarage == 2 || $avarage < 3)
                                            <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                            </div>
                                            @elseif($avarage == 3 || $avarage < 4)
                                           <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                            </div>
                                             @elseif($avarage == 4 || $avarage < 5)
                                            <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-light-4"></i>
                                            </div>
                                            @elseif($avarage == 5 || $avarage < 5)
                                             <div class="rates cursor-pointer font-13">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </div>
                                            @endif
                                            <div class="ms-1">
                                                <p class="mb-0">({{ count($reviewcount)}} {{ __('main.ratings') }})</p>
                                            </div>
                                        </div>
                                        <dl class="row mt-1">
                                            <dt class="col-sm-2">{{ __('main.product_id') }}</dt>
                                            <dd class="col-sm-9">{{$product->id}}</dd>
                                        </dl>
                                        <div class="row mt-1">
                                            <dt class="col-sm-2">{{ __('main.category') }}</dt>
                                            <dd class="col-sm-9">
                                                {{ optional($product->category)->{session()->get('locale') == 'en' ? 'name' : 'cat_kh'} ?? 'N/A' }}

                                            </dd>
                                        </div>
                                        <div class="row mt-1 mb-2">
                                            <dt class="col-sm-2">{{ __('main.subcategory') }}</dt>
                                            <dd class="col-sm-9">@if ($product->category)
                                                    @if(session()->get('locale') == 'en')
                                                        {{ $product->category->name ? $product->category->name : ($product->category->cat_kh ?? 'N/A') }}
                                                    @else
                                                        {{ $product->category->cat_kh ? $product->category->cat_kh : ($product->category->name ?? 'N/A') }}
                                                    @endif
                                                @else
                                                    N/A
                                                @endif
                                            </dd>
                                        </div>

                                    </div>

                                    <!--end row-->
                                    <div class="d-flex gap-2 mt-3">
                                        <input type="hidden" id="dproduct_id" value="{{ $product->id }}">
                                        <button type="submit" onclick="addToCartDetails()" class="btn btn-white btn-ecomm" id="addToCartButton"> <i class="bx bxs-cart-add"></i>{{ __('main.add') }}</button>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>{{ __('main.add_to_wishlist') }}</a>
                                        <p id="warningMessage" class="text-danger mt-2"></p>
                                    </div>
                                    <hr />

                                    <div class="mt-3">
                                        <p class="mb-0">{{$product->short_desc}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </section>
        <!--end product detail-->
        <!--start product more info-->
        <section class="py-4">
            <div class="container">
                <div class="product-more-info">
                    <ul class="nav nav-tabs mb-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-uppercase fw-500">{{ __('main.more_info') }}</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-uppercase fw-500">({{ count($reviewcount) }}) {{ __('main.reviews') }}</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="more-info" role="tabpanel">
                            <div class="">
                                <p>{!! $product->long_desc !!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            @php
                            $reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
                            @endphp
                            <div class="row">
                                <div class="col col-lg-8">
                                    <div class="product-review">
                                        <div class="review-list">
                                            @foreach($reviews as $item)
                                            @if($item->status == 0)
                                            @else
                                            <!-- loop -->
                                            <div class="d-flex align-items-start">
                                                <div class="review-user">
                                                    <img src="{{ (!empty($item->user->photo)) ? url('upload/user_images/'.$item->user->photo):url('uploads/no_image.jpg') }}"
                                                        width="65" height="65" class="rounded-circle" alt="" />
                                                </div>
                                                <div class="review-content ms-3">
                                                    @if($item->rating == NULL)
                                                    @elseif($item->rating == 1)
                                                    <div class="rates cursor-pointer fs-6">
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                    </div>
                                                    @elseif($item->rating == 2)
                                                    <div class="rates cursor-pointer fs-6">
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                    </div>
                                                    @elseif($item->rating == 3)
                                                    <div class="rates cursor-pointer fs-6">
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                    </div>
                                                    @elseif($item->rating == 4)
                                                    <div class="rates cursor-pointer fs-6">
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-white"></i>
                                                    </div>
                                                    @elseif($item->rating == 5)
                                                    <div class="rates cursor-pointer fs-6">
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                        <i class="bx bxs-star text-light-4"></i>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="mx-1">{{ $item->user->name }}</h6>
                                                        <p class="mb-0 ms-auto">
                                                            ({{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }})
                                                        </p>
                                                    </div>
                                                    <p>{{ $item->comment }}</p>
                                                </div>
                                            </div>
                                            <hr />
                                            <!-- loop -->
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    @guest
                                        <p> <b>{{ __('main.login_to_review') }} <a href="{{ route('login')}}">{{ __('main.login_here') }}</a> </b></p>
                                    @else
                                        <div class="add-review bg-gray-200">
                                            <div class="form-body p-3">
                                                <h4 class="mb-4">{{ __('main.write_review') }}</h4>
                                                <form action="{{ route('store.review') }}" method="post" id="commentForm">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <div class="mb-3">
                                                        <label class="form-label">{{ __('main.choose_rating') }}</label>
                                                        <select name="quality" class="form-select rounded-0">
                                                            <option selected>{{ __('main.choose_rating') }}</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">{{ __('main.comment') }}</label>
                                                        <textarea name="comment" id="comment" class="form-control rounded-0" rows="3"></textarea>
                                                    </div>
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-light btn-ecomm">{{ __('main.submit_review') }}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endguest
                            </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product more info-->
        <!--start similar products-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">{{ __('main.similar_products') }}</h5>
                    <div class="d-flex align-items-center gap-0 ms-auto"> <a href="javascript:;"
                            class="owl_prev_item fs-2"><i class='bx bx-chevron-left'></i></a>
                        <a href="javascript:;" class="owl_next_item fs-2"><i class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
                <hr />
                <div class="product-grid">
                    <div class="similar-products owl-carousel owl-theme">
                        <!-- loop -->
                        @foreach($related as $product)
                        <div class="item">
                            <div class="card rounded-0 product-card shadow-sm">
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
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">
                                            @if(session()->get('locale') == 'en')
                                                {{ $product->category->name ? $product->category->name : ($product->category->cat_kh ?? 'N/A') }}
                                            @else
                                                {{ $product->category->cat_kh ? $product->category->cat_kh : ($product->category->name ?? 'N/A') }}
                                            @endif</a>
                                        </a>
                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                            <h6 class="product-name mb-2" id="dname">
                                                @if(session()->get('locale') == 'en')
                                                    {{ $product->name ? $product->name : $product->pro_kh }}
                                                @else
                                                    {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                                @endif</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">
                                                @if($product->discount_price == NULL)
                                                <span class="text-dark fs-5">{{ $product->price }} {{ __('main.khr') }}</span>
                                                @else
                                                <span
                                                    class="me-1 text-decoration-line-through">{{$product->discount_price}} {{ __('main.khr') }}</span>
                                                <span class="text-dark fs-5">{{ $product->price }} {{ __('main.khr') }}</span>
                                                @endif
                                            </div>

{{--                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i--}}
{{--                                                    class="bx bxs-star text-white"></i>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="grid grid-cols-2 gap-2">
                                                <a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm"> <i
                                                        class='bx bxs-cart-add'></i>{{ __('main.add') }}</a>
                                                <a href="javascript:;"
                                                    class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                                    data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i
                                                        class='bx bxs-show'></i>{{ __('main.view') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- loop -->

                    </div>
                </div>
            </div>
        </section>
        <!--end similar products-->
    </div>
</div>
<!--end page wrapper -->

<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

<!-- Bootstrap JS -->
<!--plugins-->
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<!--app JS-->
<script src="{{asset('/frontend/assets/js/product-details.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dquantityInput = document.getElementById('dquantityInput');
        const incrementButton = document.getElementById('incrementQuantity');
        const decrementButton = document.getElementById('decrementQuantity');
        handleQuantityChange();
        incrementButton.addEventListener('click', function () {
            const currentValue = parseInt(dquantityInput.value);
            if (currentValue < 999) {
                dquantityInput.value = currentValue + 1;
            }
        });

        decrementButton.addEventListener('click', function () {
            const currentValue = parseInt(dquantityInput.value);
            if (currentValue > 0) {
                dquantityInput.value = currentValue - 1;
            }
        });
    });

    function addToCartDetails(){
        let product_name = $('#dname').text();
        let id = $('#dproduct_id').val();
        let quantity = $('#dquantityInput').val();
        let price = parseFloat($('#dprice').text().replace('KHR', ''));
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {
                quantity: quantity,
                product_name: product_name,
                price: price // Include the product price
            },
            url: "/dcart/data/store/"+id,
            success: function (data) {
                // console.log(data);
                miniCart();
                $('#closeModal').click();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                });

                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        icon: 'success',
                        title: data.success
                    });
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: data.error
                    });
                }
            }
        });
    }

    function handleQuantityChange() {
        var quantityInput = document.getElementById('dquantityInput');
        var addToCartButton = document.getElementById('addToCartButton');
        var incrementQuantity = document.getElementById('incrementQuantity');
        var warningMessage = document.getElementById('warningMessage');
        var maxQuantity = parseInt(quantityInput.getAttribute('max'));
        var currentQuantity = parseInt(quantityInput.value);

        if (currentQuantity === 0) {
            addToCartButton.disabled = true;
            incrementQuantity.disabled = true;
            warningMessage.innerText = 'This item is out of stock.';
        } else {
            addToCartButton.disabled = false;
            incrementQuantity.disabled = false;
            warningMessage.innerText = '';
        }
    }

    function handleDecrement() {
        var quantityInput = document.getElementById('incrementQuantity');
        var currentQuantity = parseInt(quantityInput.value);

        // Disable decrement button if the quantity is already 0
        if (currentQuantity === 0) {
            return;
        }

        // Handle decrement logic here

        // Call handleQuantityChange after decrement
        handleQuantityChange();
    }
</script>

@endsection
