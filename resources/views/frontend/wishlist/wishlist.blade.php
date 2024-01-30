@extends('frontend.index')
@section('main')
@section('title')
    Wishlist
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3"><span id="wishQty"></span> {{ __('main.items_in_wishlist') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> {{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.wishlist') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start Featured product-->
        <section class="py-4">
            <div class="container">
                <div class="product-grid">
                    <div id="wishlist" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
                        <!-- loop	 -->

                        <!-- loop	 -->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end Featured product-->
    </div>
</div>
{{--<div class="cursor-pointer ms-auto">--}}
{{--    <i class="bx bxs-star text-dark"></i>--}}
{{--    <i class="bx bxs-star text-dark"></i>--}}
{{--    <i class="bx bxs-star text-dark"></i>--}}
{{--    <i class="bx bxs-star text-dark"></i>--}}
{{--    <i class="bx bxs-star text-dark"></i>--}}
{{--</div>--}}
<!--end page wrapper -->

<!-- Include your CSS styles for the product cards -->
<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<!-- Include your JavaScript code -->
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>

<!--  /// Start Load Wishlist Data -->
<script type="text/javascript">
    $(document).ready(function () {
    wishlist();
});

function wishlist() {
    $.ajax({
        type: "GET",
        dataType: 'json',
        url: "/get-wishlist-product/",
        success: function (response) {
        $('#wishQty').text(response.wishQty);
        $('#wishlist').html('');
        if (response.wishQty > 0) {
        // Loop through the wishlist items and create product cards
        $.each(response.wishlist, function (key, value) {
            let imageUrl = value.product.thumbnail ? '/' + value.product.thumbnail : '{{ asset("/storage/images/pro_img.jpg") }}';
        let url = "{{ url('product/details/') }}" + '/' + value.product.id + '/' + value.product.name;
        let productCard = `
        <div class="col">
            <div class="card rounded-0 product-card">
                <a href="${url}">
                    <img src="${imageUrl}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <div class="product-info">
                        <a href="${url}">
                            <h6 class="product-name mb-2">${value.product.name}</h6>
                            <h6 class="product-name mb-2">${value.product.pro_kh}</h6>
                        </a>
                        ${value.product.discount_price !== null ?
                        `<div class="mb-1 product-price">
                            <span class="me-1 text-decoration-line-through">${value.product.discount_price} {{ __('main.khr') }}</span>
                            <span class="text-dark fs-5">${value.product.price} {{ __('main.khr') }}</span>
                        </div>` :
                        `<div class="d-flex align-items-center">
                            <span class="text-dark fs-5">${value.product.price} {{ __('main.khr') }}</span>
                        </div>`
                        }

                    </div>
                    <div class="product-action mt-2">
                        <div class="d-grid gap-2">
                            <a href="javascript:;" class="btn btn-white btn-ecomm">
                                <i class="bx bxs-cart-add"></i>{{ __('main.add') }}
                            </a>
                            <a type="submit" id="${value.id}" onclick="wishlistRemove(this.id)" class="btn btn-light btn-ecomm">
                              <i class='bx bx-trash'></i>{{ __('main.remove') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;



        // Append the product card to the wishlist container
        $('#wishlist').append(productCard);
        });
        } else {
            // Update the UI to handle an empty wishlist
            $('#wishlist').html('<p>Your wishlist is empty.</p>');
        }
        }
    });
}

    // Wishlist Remove Start
    function wishlistRemove(id){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/wishlist-remove/"+id,
                success:function(data){
                wishlist();
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
