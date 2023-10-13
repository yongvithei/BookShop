@extends('frontend.index')
@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{$product->name}}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i
                                            class="bx bx-home-alt"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:;">{{$product->category->name ?? 'N/A'}}</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="javascript:;">{{$product->subcategory->sub_name ?? 'N/A'}}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$product->name ?? 'N/A'}}</li>
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
                                <div class="image-zoom-section">

                                    <div class="product-gallery owl-carousel owl-theme border mb-3 p-3"
                                        data-slider-id="1">
                                        @foreach($multiImage as $img)
                                        <div class="item">
                                            <img src="{{ asset('uploads/products/small/'.$img->name) }}"
                                                class="w-auto h-auto sm:w-24 sm:h-96 md:w-64 md:h-64 lg:w-96 lg:h-96"
                                                alt="">
                                        </div>
                                        @endforeach
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
                                    <h3 class="mt-3 mt-lg-0 mb-0">{{$product->name}}</h3>

                                    <div class="d-flex align-items-center mt-3 gap-2">
                                        @if($product->discount_price == NULL)
                                        <h4 class="mb-0">${{$product->price}}</h4>
                                        @else
                                        <h5 class="mb-0 text-decoration-line-through text-light-3">
                                            ${{$product->discount_price}}</h5>
                                        <h4 class="mb-0">${{$product->price}}</h4>
                                        @endif
                                    </div>
                                    <div class="row row-cols-auto align-items-center mt-3">
                                        <div class="col">
                                            <label class="form-label">Quantity</label>
                                            <div class="input-group input-group-sm">
                                                <input type="number" class="form-control" min="0" max="999" value="1"
                                                    id="dquantityInput">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="incrementQuantity">+</button>
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="decrementQuantity">-</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label {{ $product->pro_qty > 0 ? '' : 'text-red-600' }}">
                                            {{ $product->pro_qty > 0 ? $product->pro_qty . ' Available' : 'Stock Out' }}
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
                                                <p class="mb-0">({{ count($reviewcount)}} Ratings)</p>
                                            </div>
                                        </div>
                                        <dl class="row mt-1">
                                            <dt class="col-sm-2">Product id</dt>
                                            <dd class="col-sm-9">{{$product->id}}</dd>
                                        </dl>
                                        <div class="row mt-1">
                                            <dt class="col-sm-2">Category</dt>
                                            <dd class="col-sm-9">{{$product->category->name ?? 'N/A'}}</dd>
                                        </div>
                                        <div class="row mt-1 mb-2">
                                            <dt class="col-sm-2">SubCategory</dt>
                                            <dd class="col-sm-9">{{$product->subcategory->sub_name ?? 'N/A'}}</dd>
                                        </div>

                                    </div>

                                    <!--end row-->
                                    <div class="d-flex gap-2 mt-3">
                                         <input type="hidden" id="dproduct_id" value="{{ $product->id }}">
                                        <button type="submit" onclick="addToCartDetails()" class="btn btn-white btn-ecomm"> <i
                                                class="bx bxs-cart-add"></i>Add to Cart</button>
                                        <a href="javascript:;"
                                            class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to
                                            Wishlist</a>
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
                            <a class="nav-link active" data-bs-toggle="tab" href="#more-info" role="tab"
                                aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-uppercase fw-500">More Info</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-title text-uppercase fw-500">({{ count($reviewcount) }}) Reviews</div>
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
                                        <h5 class="mt-9">This product review</h5>
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
                                    <p> <b>You Need To Login First To Review This Product <a href="{{ route('login')}}">Login Here </a> </b></p>
                                    @else
                                    <div class="add-review bg-gray-200">
                                        <div class="form-body p-3">
                                            <h4 class="mb-4">Write a Review</h4>
                                             <form action="{{ route('store.review') }}" method="post" id="commentForm">
                                             @csrf
                                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="mb-3">
                                                <label class="form-label">Rating</label>
                                                <select name="quality" class="form-select rounded-0">
                                                    <option selected>Choose Rating</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="3">4</option>
                                                    <option value="3">5</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Comment</label>
                                                <textarea name="comment" id="comment" class="form-control rounded-0" rows="3"></textarea>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-light btn-ecomm">Submit a
                                                    Review</button>
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
                    <h5 class="text-uppercase mb-0">Similar Products</h5>
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
                                        <img src="{{ asset($product->thumbnail) }}" class="card-img-top" alt="...">
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
                                                {{ $product->category->name ?? 'N/A' }}</p>
                                        </a>
                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                            <h6 class="product-name mb-2" id="dname">{{$product->name}}</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">
                                                @if($product->discount_price == NULL)
                                                <span class="text-dark fs-5">$ {{ $product->price }}</span>
                                                @else
                                                <span
                                                    class="me-1 text-decoration-line-through">${{$product->discount_price}}</span>
                                                <span class="text-dark fs-5">$ {{ $product->price }}</span>
                                                @endif
                                            </div>

                                            <div class="cursor-pointer ms-auto"> <span>5.0</span> <i
                                                    class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="grid grid-cols-2 gap-2">
                                                <a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm"> <i
                                                        class='bx bxs-cart-add'></i>Add</a>
                                                <a href="javascript:;"
                                                    class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                                    data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i
                                                        class='bx bxs-show'></i>View</a>
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
</script>

@endsection
