@extends('frontend.index')
@section('main')
@section('title')
    {{ __('main.my_cart') }}
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                   <h3 class="breadcrumb-title pe-3">{{ __('main.my_cart') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.shop') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.my_cart') }}</li>
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
                            <div id="cartPage" class="shop-cart-list mb-3 p-3">
                                <!--loop-->

                                <!--loop-->


                            </div>

                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="checkout-form p-3 bg-light">
                                @if(Session::has('coupon'))
                                @else
                                <div class="card rounded-0 border bg-transparent shadow-none" id="couponField">
                                    <div class="card-body">
                                        <p class="fs-5">{{ __('main.apply_discount_code') }}</p>
                                        <div class="input-group">
                                            <input id="coupon_name" type="text" class="form-control rounded-0" placeholder="{{ __('main.discount_code_placeholder') }}">
                                            <button type="submit" onclick="applyCoupon()" class="btn bg-dark btn-ecomm text-white" type="button">
                                                {{ __('main.apply_discount') }}
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                    <div class="card-body" id="couponCalField">

                                    </div>
                                </div>
                                    {{ __('main.order_processing_note') }}
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
<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<!--  // Start Load MY Cart // -->
<script type="text/javascript">
    $(document).ready(function () {
        couponCalculation();
        });
    function cart() {
        $.ajax({
            type: 'GET',
            url: '/get-cart-product',
            dataType: 'json',
            success: function (response) {
                var rows = "";
                $.each(response.carts, function (key, value) {
                    var imageUrl = value.options.image ? '/' + value.options.image : '/storage/images/pro_img.jpg';
                    rows += `<div class="row align-items-center g-3 pb-4">
                                <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-center gap-2">
                                        <div class="cart-img text-center text-lg-start">
                                            <img src="${imageUrl}" width="130" alt="">
                                        </div>
                                        <div class="cart-detail text-center text-lg-start">
                                            <h6 class="mb-2">${value.name}</h6>
                                            <h5 class="mb-2"><span>{{ __('main.price') }}: </span>${value.price} {{ __('main.khr') }}</h5>
                                            <p class="mb-0">{{ __('main.subtotal') }}: <span>${value.subtotal} {{ __('main.khr') }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                   <div class="cart-action text-center">
                                        <div class="input-group input-group-sm">
                                           <input type="number" class="form-control" min="1" max="${value.options.pro_qty}" value="${Math.min(value.qty, value.options.pro_qty)}" id="quantityInput_${value.rowId}" oninput="handleQuantityChange('input', '${value.rowId}')">

                                            <button type="button" id="${value.rowId}" class="btn btn-outline-secondary" onclick="handleQuantityChange('decrement', '${value.rowId}')">−</button>
                                            <button type="button" id="${value.rowId}" class="btn btn-outline-secondary" onclick="handleQuantityChange('increment', '${value.rowId}')">+</button>
                                        </div>
                                    </div>
                                <p class="mb-0">{{ __('main.available') }}: <span>${value.options.pro_qty}</span></p>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                        <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a
                                                href="javascript:;" class="bg-dark text-white rounded-2 btn-ecomm" type="submit" id="${value.rowId}" onclick="cartRemove(this.id)">{{ __('main.remove') }}</a>
                                            <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i
                                                    class='bx bx-heart me-0'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4 border-top"></div>`;
                });
                $('#cartPage').html(rows);
            }
        });
    }
    cart();

    // Cart Remove Start
  function cartRemove(id){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/cart-remove/"+id,
                success:function(data){
                    cart();
                    couponCalculation();
                    miniCart();
                     // Start Message
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                    icon: 'success',
                    title: data.success,
                    })
            }else{
           Toast.fire({
                    icon: 'error',
                    title: data.error,
                    })
                }
              // End Message
                }
            })
        }

    // Handle Quantity Change
    function handleQuantityChange(action, rowId) {
        // Assuming minQuantity is the minimum allowed quantity (e.g., 1)
        var minQuantity = 1;
        var inputField = $(`#quantityInput_${rowId}`);
        // Check if the input field is empty
        if (!inputField.val()) {
            return; // Stop further processing
        }
        var currentValue = parseInt(inputField.val(), 10);
        var maxPrice = parseInt(inputField.attr('max'));
        // Check if the new value is greater than the available quantity
        if (currentValue > maxPrice) {
            return; // Stop further processing
        }
        // Increment or decrement based on the action
        if (action === 'increment' && currentValue < maxPrice) {
            inputField.val(currentValue + 1);
        } else if (action === 'decrement' && currentValue > minQuantity) {
            inputField.val(currentValue - 1);
        }
        // Update the quantity with the new value
        var newValue = inputField.val();
        // Perform the AJAX call only if the value has changed
        if (newValue !== currentValue) {
            $.ajax({
                type: 'POST',
                url: "/update-quantity/" + rowId,
                data: {
                    _token: '{{ csrf_token() }}', // Add CSRF token for Laravel
                    quantity: newValue
                },
                dataType: 'json',
                success: function (data) {
                    cart();
                    couponCalculation();
                    miniCart();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            // Reset the input to the minimum value if outside the allowed range
            if (parseInt(newValue, 10) < minQuantity || parseInt(newValue, 10) > maxPrice) {
                inputField.val(minQuantity);
            }
        }
    }

    function applyCoupon(){
        var coupon_name = $('#coupon_name').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {coupon_name:coupon_name},
            url: "/coupon-apply",
            success:function(data){
                couponCalculation();
                if (data.validity === true) {
                    $('#couponField').hide();
                }
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        icon: 'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        icon: 'error',
                        title: data.error,
                    })
                }
                // End Message
            }
        })
    }
    // Start CouponCalculation Method
    function couponCalculation(){
        $.ajax({
            type: 'GET',
            url: "/coupon-calculation",
            dataType: 'json',
            success:function(data){
                 if (data.total) {
                     let disableCheckout = false;
                 const totalUSD = (data.total / data.rate).toFixed(2);
                     // Check if total_amount is less than 5000 KHR
                     if (data.total < 5000) {
                         disableCheckout = true;
                     }
                 $('#couponCalField').html(
                        `<p class="mb-2">{{ __('main.subtotal') }}: <span class="float-end">${data.total} {{ __('main.khr') }}</span></p>
                        <p class="mb-0">{{ __('main.discount') }}: <span class="float-end">--</span></p>
                        <div class="my-2 border-top"></div>
                        <h5 class="mb-2">{{ __('main.order_total') }}: <span class="float-end">${data.total} {{ __('main.khr') }}</span></h5>
                        <h5 class="mb-2">{{ __('main.total_in_usd') }}: <span class="float-end">$ ${totalUSD}</span></h5>
                        <div class="my-4"></div>
                        <div class="d-grid">
                            <button id="checkoutButton" class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}</button>
                        </div>
                ` )
                     $('#checkoutButton').on('click', function() {
                             window.location.href = "{{ route('checkout') }}";
                     });
                     $('#checkoutButton').prop('disabled', disableCheckout);
                 } else {
                     let disable = false;
                     if (data.total_amount < 5000) {
                         disable = true;
                     }
                    $('#couponCalField').html(`
                        <p class="mb-2">{{ __('main.subtotal') }}: <span class="float-end">${data.subtotal} {{ __('main.khr') }}</span></p>
                        <p class="mb-2">{{ __('main.coupon') }}: <span class="float-end">${data.coupon_name}</span></p>
                        <p class="mb-2">{{ __('main.discount') }}: <span class="float-end">${data.discount_amount} {{ __('main.khr') }}<a type="submit" onclick="couponRemove()"><i class='bx bx-trash'></i> </a></span></p>
                        <div class="my-3 border-top"></div>
                        <h5 class="mb-0">{{ __('main.order_total') }}: <span class="float-end">${data.total_amount} {{ __('main.khr') }}</span></h5>
                        <div class="my-2"></div>
                        <h5 class="mb-2">{{ __('main.total_in_usd') }}: <span class="float-end">$ ${data.dollar}</span></h5>
                        <div class="d-grid">
                                <button id="checkout" class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}</button>
                        </div>
                    ` )
                     $('#checkout').on('click', function() {
                             window.location.href = "{{ route('checkout') }}";
                     });

                     $('#checkout').prop('disabled', disable);
                    }

                }


        })
    }

    couponCalculation();

    // Coupon Remove Start
  function couponRemove(){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/coupon-remove",
                success:function(data){
                   couponCalculation();
                   $('#couponField').show();
                     // Start Message
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',

                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })
            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }
              // End Message
                }
            })
        }
</script>
@endsection
