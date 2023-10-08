@extends('frontend.index')
@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Checkout</h3>
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
                            <div class="checkout-payment">
                                <div class="card bg-transparent rounded-0 shadow-none">
                                    <div class="card-body">
                                        <div class="steps steps-light">
                                            <a class="step-item active" href="{{ route('mycart') }}">
                                                <div class="step-progress"><span class="step-count">1</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cart'></i>Cart</div>
                                            </a>
                                            <a class="step-item active" href="{{ route('checkout') }}">
                                                <div class="step-progress"><span class="step-count">2</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
                                            </a>
                                            <a class="step-item current" href="javascript:">
                                                <div class="step-progress"><span class="step-count">3</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-credit-card'></i>Payment</div>
                                            </a>
                                            <a class="step-item" href="javascript:">
                                                <div class="step-progress"><span class="step-count">4</span>
                                                </div>
                                                <div class="step-label"><i class='bx bx-check-circle'></i>Tracking</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0 shadow-none">
                                    <div class="card-header border-bottom">
                                        <h2 class="h5 my-2">{{ __('main.choose_payment_method') }}</h2>

                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-pills mb-3 border p-3" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active rounded-0" data-bs-toggle="pill"
                                                    href="#credit-card" role="tab" aria-selected="true">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i
                                                                class='bx bx-credit-card font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Credit Card</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link rounded-0" data-bs-toggle="pill"
                                                    href="#delivery-payment" role="tab" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-money font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">{{ __('main.cash_on_delivery') }}</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link rounded-0" data-bs-toggle="pill" href="#net-banking"
                                                    role="tab" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-mobile font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Net Banking</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="credit-card" role="tabpanel">
                                                <div class="p-3 border">
                                                     <form action="{{ route('stripe.order') }}" method="post" id="payment-form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <div class="mb-3">
                                                                    <div class="form-row">
                                                                        <label for="card-element">
                                                                        Credit or debit card
                                                                        </label>
                                                                        <div id="card-element">
                                                                        <!-- A Stripe Element will be inserted here. -->
                                                                        </div>
                                                                            <input type="hidden" name="name" value="{{ $data['ship_name'] }}">
                                                                            <input type="hidden" name="email" value="{{ $data['ship_email'] }}">
                                                                            <input type="hidden" name="phone" value="{{ $data['ship_phone'] }}">
                                                                            <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                                                                            <input type="hidden" name="city_id" value="{{ $data['city_id'] }}">
                                                                            <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                                                                            <input type="hidden" name="notes" value="{{ $data['notes'] }}">
                                                                        <!-- Used to display Element errors. -->
                                                                        <div id="card-errors" role="alert"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-grid">
                                                                    <button class="btn btn-dark btn-ecomm rounded-0">{{ __('main.confirm_payment') }}</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="delivery-payment" role="tabpanel">
                                                <div class="p-3 border">

                                                    <div class="mb-3">
                                                        <p class="mb-0">What Is the Meaning of Cash on Delivery? Cash on
                                                            delivery is when a buyer pays for goods or services once
                                                            they are received.</p>
                                                    </div>
                                                    <form action="{{ route('cash.order') }}" method="post">
                                                        @csrf
                                                        <div class="form-row">
                                                            <label for="card-element">
                                                                <input type="hidden" name="name"
                                                                    value="{{ $data['ship_name'] }}">
                                                                <input type="hidden" name="email"
                                                                    value="{{ $data['ship_email'] }}">
                                                                <input type="hidden" name="phone"
                                                                    value="{{ $data['ship_phone'] }}">
                                                                <input type="hidden" name="post_code"
                                                                    value="{{ $data['post_code'] }}">
                                                                <input type="hidden" name="city_id"
                                                                    value="{{ $data['city_id'] }}">
                                                                <input type="hidden" name="district_id"
                                                                    value="{{ $data['district_id'] }}">
                                                                <input type="hidden" name="notes"
                                                                    value="{{ $data['notes'] }}">
                                                            </label>
                                                            <!-- Used to display form errors. -->
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-grid">
                                                                    <button class="btn btn-dark btn-ecomm rounded-0">{{ __('main.confirm') }}</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="net-banking" role="tabpanel">
                                                <div class="p-3 border">
                                                    <div class="mb-3">
                                                        <p>{{ __('main.select_your_bank') }}</p>
                                                        <select class="form-select rounded-0"
                                                            aria-label="Default select example">
                                                            <option selected>{{ __('main.please_select_bank') }}
                                                            </option>
                                                            <option value="1">Bank Name 1</option>
                                                            <option value="2">Bank Name 2</option>
                                                            <option value="3">Bank Name 3</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <p class="mb-0">Note: After clicking on the button, you will be
                                                            directed to a secure gateway for payment. After completing
                                                            the payment process, you will be redirected back to the
                                                            website to view details of your order.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0 shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-grid"> <a href="javascript:;"
                                                        class="btn btn-light btn-ecomm"><i
                                                            class="bx bx-chevron-left"></i>{{ __('main.back_to_shipping') }}</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-grid"> <a href="javascript:;"
                                                        class="btn btn-white btn-ecomm">{{ __('main.review_your_order') }}<i
                                                            class="bx bx-chevron-right"></i></a></div>
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
                                                        <img src="{{ asset($item->options->image) }}"
                                                            width="75" alt="Product">
                                                    </a>
                                                    <div class="ps-2">
                                                        <h6 class="mb-1"><a href="javascript:;" class="text-dark">{{ $item->name }}</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="me-2">${{ $item->price }}</span><span
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
                                                        class="float-end">${{ $cartTotal }}</span></p>
                                                <p class="mb-2">{{ __('main.shipping') }}: <span
                                                        class="float-end">Free</span></p>
                                                <p class="mb-2">{{ __('main.coupon_name') }}: <span
                                                        class="float-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</span></p>
                                                <p class="mb-0">{{ __('main.discount') }}: <span
                                                        class="float-end">${{ session()->get('coupon')['discount_amount'] }}</span></p>
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-0">{{ __('main.order_total') }}: <span
                                                        class="float-end">${{ session()->get('coupon')['total_amount'] }}</span></h5>
                                            </div>
                                            @else
                                            <div class="card-body">
                                                <div class="my-3 border-top"></div>
                                                <h5 class="mb-0">{{ __('main.order_total') }}: <span
                                                        class="float-end">${{ $cartTotal }}</span></h5>
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
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51NbeE9KyITtLb50no3yOg3RLdZwOsqtdD1KLqaiV0g1hEXCH1TFOGDfrWAwgChMYEoacjbZyYavxq62pL3T2Ol2f00NvGExGLs');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {
    style: style
});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function (event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function (event) {
    event.preventDefault();
    stripe.createToken(card).then(function (result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
    // Submit the form
    form.submit();
}
</script>
@endsection
