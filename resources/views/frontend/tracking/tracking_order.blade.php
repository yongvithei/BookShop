@extends('frontend.index')
@section('main')
@section('title')
    Tracking Order
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.tracking') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        {{ __('main.home') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.tracking') }}</li>
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
                <h6 class="mb-0">Order ID: {{ $track->invoice_no }}</h6>
                <hr>
                <div class="row row-cols-1 row-cols-lg-4 rounded-4 gx-3 m-0 border">
                    <div class="col p-4 text-center border-end">
                        <h6 class="mb-1">{{ __('main.order_date') }}</h6>
                        <p class="mb-0">{{ $track->order_date }}</p>
                    </div>
                    <div class="col p-4 text-center border-end">
                        <h6 class="mb-1">{{ __('main.shipping_to') }}</h6>
                        <p class="mb-0">{{ $track->name }}<br>Phone: {{ $track->phone }}<br> {{ $track->city->name }}/{{ $track->district->name }}</p>
                    </div>
                    <div class="col p-4 text-center border-end">
                        <h6 class="mb-1">{{ __('main.status') }}</h6>
                        <p class="mb-0">{{ $track->status }}</p>
                    </div>
                    <div class="col p-4 text-center">
                        <h6 class="mb-1">{{ __('main.tracking_number') }}</h6>
                        <p class="mb-0">{{ $track->invoice_no }}</p>
                    </div>
                </div>

                <!--end row-->
                <div class="mt-3"></div>
                <div class="checkout-payment">
                    <div class="card bg-transparent rounded-0 shadow-none">
                        <div class="card-body">
                            <div class="steps steps-light">
                                @if($track->status == 'pending')
                                    <a class="step-item" href="javascript:;">
                                        <div class="step-progress"><span class="step-count"><i class='bx bx-check'></i></span></div>
                                        <div class="step-label">{{ __('main.order_confirmed') }}</div>
                                    </a>
                                    <a class="step-item" href="javascript:;">
                                        <div class="step-progress"><span class="step-count"><i class='bx bx-user-circle'></i></span></div>
                                        <div class="step-label">{{ __('main.processing') }}</div>
                                    </a>
                                    <a class="step-item" href="javascript:;">
                                        <div class="step-progress"><span class="step-count"><i class='bx bx-car'></i></span></div>
                                        <div class="step-label">{{ __('main.on_the_way') }}</div>
                                    </a>
                                    <a class="step-item" href="javascript:;">
                                        <div class="step-progress"><span class="step-count"><i class='bx bx-planet'></i></span></div>
                                        <div class="step-label">{{ __('main.ready_for_pickup') }}</div>
                                    </a>
                                @elseif($track->status == 'confirm')
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-check'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.order_confirmed') }}</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-user-circle'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.processing') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i class='bx bx-car'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.on_the_way') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-planet'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.ready_for_pickup') }}</div>
                                </a>
                                @elseif($track->status == 'delivering')
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-check'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.order_confirmed') }}</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-user-circle'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.processing') }} And Package</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i class='bx bx-car'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.on_the_way') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-planet'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.ready_for_pickup') }}</div>
                                </a>
                                @elseif($track->status == 'delivered')
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-check'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.order_confirmed') }}</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-user-circle'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.processing') }}</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i class='bx bx-car'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.on_the_way') }}</div>
                                </a>
                                <a class="step-item active" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-planet'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.ready_for_pickup') }}</div>
                                </a>
                                @else
                                 <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-check'></i></span>
                                    </div>
                                    <div class="step-label">{{  __('main.order_confirmed') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-user-circle'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.processing') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i class='bx bx-car'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.on_the_way') }}</div>
                                </a>
                                <a class="step-item" href="javascript:;">
                                    <div class="step-progress"><span class="step-count"><i
                                                class='bx bx-planet'></i></span>
                                    </div>
                                    <div class="step-label">{{ __('main.ready_for_pickup') }}</div>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end shop cart-->
    </div>
</div>
<!--end page wrapper -->

@endsection
