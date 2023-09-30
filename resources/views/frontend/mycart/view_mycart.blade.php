@extends('frontend.index')
@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Shop Cart</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.shop_cart') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop cart-->
        <section class="py-4">
            <div class="container">
                <div class="shop-cart">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <div class="shop-cart-list mb-3 p-3">
                                <!--loop-->
                                <div class="row align-items-center g-3 pb-4">
                                    <div class="col-12 col-lg-6">
                                        <div class="d-lg-flex align-items-center gap-2">
                                            <div class="cart-img text-center text-lg-start">
                                                <img src="{{asset('/frontend/assets/images/products/01.png')}}"
                                                    width="130" alt="">
                                            </div>
                                            <div class="cart-detail text-center text-lg-start">
                                                <h6 class="mb-2">White Regular Fit Polo T-Shirt</h6>
                                                <p class="mb-0">Size: <span>Regular</span>
                                                </p>
                                                <p class="mb-2">Color: <span>White & Blue</span>
                                                </p>
                                                <h5 class="mb-0">$19.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="cart-action text-center">
                                            <input type="number" class="form-control rounded-0" value="2" min="1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="text-center">
                                            <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a
                                                    href="javascript:;" class="btn btn-dark rounded-0 btn-ecomm"><i
                                                        class='bx bx-x-circle'></i> Remove</a>
                                                <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i
                                                        class='bx bx-heart me-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 border-top"></div>
                                <!--loop-->

                                <div class="d-lg-flex align-items-center gap-2"> <a href="javascript:;"
                                        class="btn btn-dark btn-ecomm">
                                        <i class='bx bx-shopping-bag'></i> {{ __('main.continue_shopping') }}
                                    </a>
                                    <a href="javascript:;" class="btn btn-light btn-ecomm ms-auto"><i
                                            class='bx bx-x-circle'></i> Clear Cart</a>
                                    <a href="javascript:;" class="btn btn-white btn-ecomm">
                                        <i class='bx bx-refresh'></i> {{ __('main.update_cart') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="checkout-form p-3 bg-light">
                                <div class="card rounded-0 border bg-transparent shadow-none">
                                    <div class="card-body">
                                        <p class="fs-5">{{ __('main.apply_discount_code') }}</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded-0"
                                                placeholder="Enter discount code">
                                            <button class="btn bg-dark btn-ecomm text-white" type="button">Apply
                                                Discount</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                    <div class="card-body">
                                        <p class="mb-2">{{ __('main.subtotal') }}: <span
                                                class="float-end">$198.00</span></p>
                                        <p class="mb-2">{{ __('main.shipping') }}: <span class="float-end">--</span></p>
                                        <p class="mb-2">{{ __('main.taxes') }}: <span class="float-end">$14.00</span>
                                        </p>
                                        <p class="mb-0">{{ __('main.discount') }}: <span class="float-end">--</span></p>
                                        <div class="my-3 border-top"></div>
                                        <h5 class="mb-0">{{ __('main.order_total') }}: <span
                                                class="float-end">$212.00</span></h5>
                                        <div class="my-4"></div>
                                        <div class="d-grid">
                                            <a href="/checkOut"
                                                class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end shop cart-->
    </div>
</div>
<!--end page wrapper -->
@endsection
