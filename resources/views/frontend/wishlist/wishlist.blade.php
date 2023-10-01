@extends('frontend.index')
@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Wishlist</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Wishlist</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
                        <!-- loop	 -->
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <a href="product-details.html">
                                    <img src="{{asset('/frontend/assets/images/products/01.png')}}" class="card-img-top"
                                        alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price"> <span
                                                    class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-white btn-ecomm"> <i
                                                        class='bx bxs-cart-add'></i>Add to Cart</a>
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"><i
                                                        class='bx bx-zoom-in'></i>Remove From List</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- loop	 -->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end Featured product-->
    </div>
</div>
<!--end page wrapper -->

@endsection
