@extends('frontend.index')
@section('main')
@section('title')
    Checkout
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
                                            <a class="step-item active" href="">
                                                <div class="step-progress"><span class="step-count">1</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cart'></i>{{ __('main.cart') }}
                                                </div>

                                            </a>
                                            <a class="step-item current " href="">
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
                                            <h2 class="h5 mb-0">{{ __('main.shipping_address') }}</h2>
                                            <div class="my-3 border-bottom"></div>
                                            <div class="form-body">
                                                <form method="post" action="{{ route('checkout.store') }}" class="row g-3">
                                                    @csrf
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.name') }}</label>
                                                        <input type="text" name="ship_name" value="{{ Auth::user()->name }}" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.email') }}</label>
                                                        <input type="text" name="ship_email" value="{{ Auth::user()->email }}" class="form-control rounded-0">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.phone_number') }}</label>
                                                        <input type="number" name="ship_phone" class="form-control rounded-0" placeholder="Required" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">{{ __('main.zip_postal_code') }}</label>
                                                        <input type="text" name="post_code" class="form-control rounded-0" placeholder="Optional">
                                                    </div>
                                                    <div class="col-md-6">
                                                         <label
                                                            class="form-label">{{ __('main.province') }}</label>
                                                        <select name="city_id" class="form-select rounded-0">
                                                            <option value="1">{{ __('main.select_option') }}</option>
                                                        @foreach($cities as $item)
                                                                <option value="{{ $item->id }}"> @if(session()->get('locale') == 'en') {{ $item->name ?? $item->ci_kh ?? '' }} @else {{ $item->ci_kh ?? $item->name ?? '' }} @endif</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                       <label class="form-label">{{ __('main.district') }}</label>
                                                        <select name="district_id" class="form-select rounded-0">
                                                            <option value="1">{{ __('main.select_city_first') }}</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label class="form-label">{{ __('main.notes') }}</label>
                                                        <textarea class="form-control rounded-0" name="notes" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <div class="my-3 border-bottom"></div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="gridCheck" checked>
                                                            <label class="form-check-label"
                                                                for="gridCheck">{{ __('main.agree') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-grid"> <a href="{{ route('mycart') }}"
                                                                class="btn btn-light btn-ecomm"><i
                                                                    class='bx bx-chevron-left'></i>{{ __('main.back_to_cart') }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-grid"> <button type="submit"
                                                                class="btn btn-dark btn-ecomm bg-dark">{{ __('main.proceed_to_checkout') }}<i
                                                                    class='bx bx-chevron-right'></i></button>
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
                                                @foreach($carts as $item)
                                                <!--loop-->
                                                <div class="my-3 border-top"></div>
                                                <div class="d-flex align-items-center">
                                                    <a class="d-block flex-shrink-0" href="javascript:;">
                                                        <img src="{{ $item->options->image ? asset($item->options->image) : asset('/storage/images/pro_img.jpg') }}"
                                                             width="75" alt="Product">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="mb-1"><a href="javascript:;" class="text-dark">{{ $item->name }}</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="me-2">{{ $item->price }} {{ __('main.khr') }}</span><span
                                                                class="">x {{ $item->qty }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--loop-->
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                             @if(Session::has('coupon'))
                                            <div class="card-body">
                                                <p class="mb-2">{{ __('main.subtotal') }}: <span
                                                        class="float-end">{{ $cartTotal }} {{ __('main.khr') }}</span></p>
                                                <p class="mb-2">{{ __('main.shipping') }}: <span
                                                        class="float-end">Free</span></p>
                                                <p class="mb-2">{{ __('main.coupon_name') }}: <span
                                                        class="float-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</span></p>
                                                <p class="mb-0">{{ __('main.discount') }}: <span
                                                        class="float-end">{{ session()->get('coupon')['discount_amount'] }} {{ __('main.khr') }}</span></p>
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-2">{{ __('main.order_total') }}: <span
                                                        class="float-end">{{ session()->get('coupon')['total_amount'] }} {{ __('main.khr') }}</span></h5>
                                                <h5 class="mb-0">{{ __('main.total_in_usd') }}: <span
                                                        class="float-end">$ {{$dollar}}</span></h5>
                                            </div>
                                            @else
                                            <div class="card-body">
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-2">{{ __('main.order_total') }}: <span
                                                        class="float-end">{{ $cartTotal }} {{ __('main.khr') }}</span></h5>
                                                <h5 class="mb-0">{{ __('main.total_in_usd') }}: <span
                                                        class="float-end">$ {{$dollar}}</span></h5>
                                            </div>
                                            @endif
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
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="city_id"]').on('change', function () {
            var city_id = $(this).val();
            if (city_id) {
                $.ajax({
                    url: "{{ url('/district-get/ajax') }}/" + city_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var d = $('select[name="district_id"]').empty();
                        $.each(data, function (key, value) {
                            var optionText = ' ';
                            if (value.name !== null) {
                                optionText += ({{ session()->get('locale') == 'en' ? 'value.name' : 'value.dis_kh' }});
                            } else if (value.dis_kh !== null) {
                                optionText += value.dis_kh;
                            }
                            $('select[name="district_id"]').append('<option value="' + value.id + '">' + optionText + '</option>');
                        });
                    },
                });
            } else {
                alert('Please Select');
            }
        });
    });

</script>

@endsection
