@extends('frontend.index')
@section('main')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.checkout') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                            <div class="checkout-details">
                                <div class="card bg-transparent rounded-0 shadow-none">
                                    <div class="card-body">
                                        <div class="steps steps-light">
                                            <a class="step-item active" href="">
                                                <div class="step-progress"><span class="step-count">1</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cart'></i>{{ __('main.cart') }}
                                                </div>

                                            </a>
                                            <a class="step-item active current" href="">
                                                <div class="step-progress"><span class="step-count">2</span>
                                                </div>
                                                <div class="step-label"><i
                                                        class='bx bx-cube'></i>{{ __('main.shipping') }}</div>

                                            </a>
                                            <a class="step-item" href="">
                                                <div class="step-progress"><span class="step-count">3</span></div>
                                                <div class="step-label"><i
                                                        class='bx bx-credit-card'></i>{{ __('main.payment') }}</div>
                                            </a>

                                            <a class="step-item" href="">
                                                <div class="step-progress"><span class="step-count">4</span></div>
                                                <div class="step-label"><i
                                                        class='bx bx-check-circle'></i>{{ __('main.tracking') }}</div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-body">

                                        <div class="border p-3">
                                            <h2 class="h5 mb-0">Shipping Address</h2>
                                            <div class="my-3 border-bottom"></div>
                                            <div class="form-body">
                                                <form class="row g-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.first_name') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.last_name') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.email') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.phone_number') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.company') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label
                                                            class="form-label">{{ __('main.state_province') }}</label>
                                                        <select class="form-select rounded-0">
                                                            <option>United Kingdom</option>
                                                            <option>California</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label
                                                            class="form-label">{{ __('main.zip_postal_code') }}</label>
                                                        <input type="text" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.country') }}</label>
                                                        <select class="form-select rounded-0">
                                                            <option>United States</option>
                                                            <option>India</option>
                                                            <option>China</option>
                                                            <option>Turkey</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.address1') }}</label>
                                                        <textarea class="form-control rounded-0"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.address2') }}</label>
                                                        <textarea class="form-control rounded-0"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h6 class="mb-0 h5">{{ __('main.billing_address') }}</h6>
                                                        <div class="my-3 border-bottom"></div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="gridCheck" checked>
                                                            <label class="form-check-label"
                                                                for="gridCheck">{{ __('main.same_as_shipping') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-grid"> <a href="javascript:;"
                                                                class="btn btn-light btn-ecomm"><i
                                                                    class='bx bx-chevron-left'></i>{{ __('main.back_to_cart') }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-grid"> <a href="/checkOut"
                                                                class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}<i
                                                                    class='bx bx-chevron-right'></i></a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="order-summary">
                                <div class="card rounded-0">
                                    <div class="card-body">

                                        <div class="card rounded-0 border bg-transparent shadow-none">
                                            <div class="card-body">
                                                <p class="fs-5">{{ __('main.order_summary') }}</p>
                                                <!--loop-->
                                                <div class="my-3 border-top"></div>
                                                <div class="d-flex align-items-center">
                                                    <a class="d-block flex-shrink-0" href="javascript:;">
                                                        <img src="{{asset('/frontend/assets/images/products/01.png')}}"
                                                            width="75" alt="Product">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="mb-1"><a href="javascript:;" class="text-dark">White
                                                                Polo T-Shirt</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="me-2">$19.<small>00</small></span><span
                                                                class="">x 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--loop-->
                                                <!--loop-->
                                                <div class="my-3 border-top"></div>
                                                <div class="d-flex align-items-center">
                                                    <a class="d-block flex-shrink-0" href="javascript:;">
                                                        <img src="{{asset('/frontend/assets/images/products/01.png')}}"
                                                            width="75" alt="Product">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="mb-1"><a href="javascript:;" class="text-dark">White
                                                                Polo T-Shirt</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="me-2">$19.<small>00</small></span><span
                                                                class="">x 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--loop-->
                                                <!--loop-->
                                                <div class="my-3 border-top"></div>
                                                <div class="d-flex align-items-center">
                                                    <a class="d-block flex-shrink-0" href="javascript:;">
                                                        <img src="{{asset('/frontend/assets/images/products/01.png')}}"
                                                            width="75" alt="Product">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="mb-1"><a href="javascript:;" class="text-dark">White
                                                                Polo T-Shirt</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="me-2">$19.<small>00</small></span><span
                                                                class="">x 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--loop-->
                                            </div>
                                        </div>
                                        <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                            <div class="card-body">
                                                <p class="mb-2">{{ __('main.subtotal') }}: <span
                                                        class="float-end">$198.00</span></p>
                                                <p class="mb-2">{{ __('main.shipping') }}: <span
                                                        class="float-end">--</span></p>
                                                <p class="mb-2">{{ __('main.taxes') }}: <span
                                                        class="float-end">$14.00</span></p>
                                                <p class="mb-0">{{ __('main.discount') }}: <span
                                                        class="float-end">--</span></p>
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-0">{{ __('main.order_total') }}: <span
                                                        class="float-end">212.00</span></h5>
                                            </div>
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
