@extends('frontend.index')
@section('main')
@section('title')
    Complete
@endsection
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
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.shop') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.checkout') }}</li>
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
                                            <a class="step-item active" href="/">
                                                <div class="step-progress"><span class="step-count">1</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cart'></i>{{ __('main.cart') }}</div>
                                            </a>
                                            <a class="step-item active" href="/">
                                                <div class="step-progress"><span class="step-count">2</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cube'></i>{{ __('main.shipping') }}</div>
                                            </a>
                                            <a class="step-item active" href="/">
                                                <div class="step-progress"><span class="step-count">3</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-credit-card'></i>{{ __('main.payment') }}</div>
                                            </a>
                                            <a class="step-item active current" href="/">
                                                <div class="step-progress"><span class="step-count">4</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-check-circle'></i>{{ __('main.tracking') }}</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-body">

                                        <div class="border p-3">
                                            <section class="py-4">
                                                <div class="container">
                                                    <div class="card py-3 mt-sm-3">
                                                        <div class="card-body text-center">
                                                            <h2 class="h4 pb-3">{{ __('main.thank_you_message') }}</h2>
                                                            <p class="fs-sm mb-2">{{ __('main.order_processed') }}</p>
                                                            <a class="btn btn-light rounded-0 mt-3 me-3" href="/">{{ __('main.go_back_shopping') }}</a>
                                                            <a class="btn btn-white rounded-0 mt-3" href="/user/track-order"><i class='bx bx-map'></i>{{ __('main.track_order') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!--end shop cart-->
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
                                                <!-- Loop content here -->

                                                <!-- Loop content here -->
                                            </div>
                                        </div>
                                        <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                            <div class="card-body">
                                                <p class="mb-2">{{ __('main.subtotal') }}: <span class="float-end">--</span></p>
                                                <p class="mb-0">{{ __('main.discount') }}: <span class="float-end">--</span></p>
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-2">{{ __('main.order_total') }}: <span class="float-end">--</span></h5>
                                                <h5 class="mb-0">{{ __('main.total_in_usd') }}: <span class="float-end">--</span></h5>
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
