@extends('frontend.index')
@section('main')
@section('title')
    My cart
@endsection
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">My Cart</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Cart</li>
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
                                            <input id="coupon_name" type="text" class="form-control rounded-0"
                                                placeholder="Enter discount code">
                                            <button type="submit" onclick="applyCoupon()" class="btn bg-dark btn-ecomm text-white" type="button">Apply
                                                Discount</button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                    <div class="card-body" id="couponCalField">

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
                console.log(response)
                var rows = ""
                $.each(response.carts, function (key, value) {
                    rows += `<div class="row align-items-center g-3 pb-4">
                                    <div class="col-12 col-lg-6">
                                        <div class="d-lg-flex align-items-center gap-2">
                                            <div class="cart-img text-center text-lg-start">
                                                <img src="/${value.options.image} "
                                                    width="130" alt="">
                                            </div>
                                            <div class="cart-detail text-center text-lg-start">
                                                <h6 class="mb-2">${value.name}</h6>
                                                <h5 class="mb-2"><span>Price: </span>$${value.price}</h5>
                                                <p class="mb-0">SubTotal: <span>$${value.subtotal}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="cart-action text-center">
                                            <div class="input-group input-group-sm">
                                        <input class="form-control" min="0" max="999" value="${value.qty}"
                                            id="quantityInput">
                                        <button type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)" class="btn btn-outline-secondary" type="button"
                                            id="decrementQuantity">−</button>
                                        <button type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)" class="btn btn-outline-secondary" type="button"
                                            id="incrementQuantity">+</button>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="text-center">
                                            <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a
                                                    href="javascript:;" class="bg-dark text-white rounded-2 btn-ecomm" type="submit" id="${value.rowId}" onclick="cartRemove(this.id)"> Remove</a>
                                                <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i
                                                        class='bx bx-heart me-0'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 border-top"></div>`
                });
                $('#cartPage').html(rows);
            }
        })
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

    // Cart Decrement Start
    function cartDecrement(rowId){
        $.ajax({
            type: 'GET',
            url: "/cart-decrement/"+rowId,
            dataType: 'json',
            success:function(data){
                cart();
                couponCalculation();
                miniCart();
            }
        });
    }
    // Cart INCREMENT
    function cartIncrement(rowId){
        $.ajax({
            type: 'GET',
            url: "/cart-increment/"+rowId,
            dataType: 'json',
            success:function(data){
                cart();
                couponCalculation();
                miniCart();
            }
        });
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
                 $('#couponCalField').html(
                        `<p class="mb-2">{{ __('main.subtotal') }}: <span class="float-end">$${data.total}</span></p>
                        <p class="mb-0">{{ __('main.discount') }}: <span class="float-end">--</span></p>
                        <div class="my-3 border-top"></div>
                        <h5 class="mb-0">{{ __('main.order_total') }}: <span class="float-end">$${data.total}</span></h5>
                        <div class="my-4"></div>
                        <div class="d-grid">
                            <a href="{{ route('checkout') }}" class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}</a>
                        </div>
                ` ) } else {
                    $('#couponCalField').html(`
                        <p class="mb-2">{{ __('main.subtotal') }}: <span class="float-end">$${data.subtotal}</span></p>
                        <p class="mb-1">{{ __('main.coupon') }}: <span class="float-end">${data.coupon_name}</span></p>
                        <p class="mb-1">{{ __('main.discount') }}: <span class="float-end">$${data.discount_amount} <a type="submit" onclick="couponRemove()"><i class='bx bx-trash'></i> </a></span></p>
                        <div class="my-3 border-top"></div>
                        <h5 class="mb-0">{{ __('main.order_total') }}: <span class="float-end">$${data.total_amount}</span></h5>
                        <div class="my-4"></div>
                        <div class="d-grid">
                            <a href="{{ route('checkout') }}" class="btn btn-dark btn-ecomm">{{ __('main.proceed_to_checkout') }}</a>
                        </div>
                    ` )
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
