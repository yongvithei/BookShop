@extends('frontend.index')
@section('main')

<link href="{{asset('/frontend/assets/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.all_products') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        {{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.shop') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.all_products') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop area-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="btn-mobile-filter d-xl-none"><i class='bx bx-slider-alt'></i>
                        </div>
                        <div class="filter-sidebar d-none d-xl-flex">
                            <div class="card rounded-0 w-100">
                                <div class="card-body">
                                    <div class="align-items-center d-flex d-xl-none">
                                        <h6 class="text-uppercase mb-0">Filter</h6>
                                        <div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
                                    </div>
                                    <hr class="d-flex d-xl-none" />
                                    <div class="price-range">
                                        <h6 class="text-uppercase mb-3">{{ __('price') }}</h6>
                                        <div class="my-4" id="slider"></div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="ms-auto">
                                                <p class="mb-0">Price: $200.00 - $900.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="size-range mb-4">
                                        <h6 class="text-uppercase mb-3">{{ __('main.select_category') }}</h6>
                                        <ul class="list-unstyled mb-0 categories-list">
                                            <!-- loop -->
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="book">
                                                    <label class="form-check-label" for="book">book</label>
                                                </div>
                                            </li>
                                            <!-- loop -->
                                        </ul>
                                        <a href="javascript:;"
                                            class="rounded-lg btn btn-dark hover:shadow-xl bg-slate-800">{{ __('main.filter_button') }}</a>
                                    </div>
                                    <hr>
                                    <div class="product-categories">
                                        <h6 class="text-uppercase mb-3">{{ __('main.categories') }}</h6>
                                        <ul class="list-unstyled mb-0 categories-list">
                                            <!-- loop -->
                                            <li><a href="javascript:;">Books <span
                                                        class="float-end badge rounded-pill bg-primary">42</span></a>
                                            </li>
                                            <!-- loop -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="product-wrapper">
                            <div class="toolbox d-flex align-items-center mb-3 gap-2">
                                <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <p class="mb-0 font-13 text-nowrap">{{ __('main.sort_by') }}</p>
                                        <select class="form-select ms-3 rounded-0">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center flex-nowrap">
                                        <p class="mb-0 font-13 text-nowrap">{{ __('main.show') }}</p>
                                        <select class="form-select ms-3 rounded-0">
                                            <option>9</option>
                                            <option>12</option>
                                            <option>16</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                </div>
                                <div> <a href="" class="btn btn-white rounded-0"><i class='bx bxs-grid me-0'></i></a>
                                </div>
                                <div> <a href="/shoplist" class="btn btn-light rounded-0"><i
                                            class='bx bx-list-ul me-0'></i></a>
                                </div>
                            </div>
                            <div class="product-grid">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                    <div class="col my-3">
                                        <div class="card rounded-lg product-card shadow-sm ">
                                            <div class="card-header bg-transparent border-bottom-0">
                                                <div class="d-flex align-items-center justify-content-end gap-3">
                                                    <a href="javascript:;">
                                                        <div class="product-wishlist product-action"> <i
                                                                class='bx bx-heart'></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <img src="{{asset('/frontend/assets/images/products/01.png')}}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="/product_detail">
                                                        <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        <h6 class="product-name mb-2">Product Short Name</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price"> <span
                                                                class="me-1 text-decoration-line-through">$99.00</span>
                                                            <span class="fs-5">$49.00</span>
                                                        </div>
                                                        <div class="cursor-pointer ms-auto">
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="grid grid-cols-2 gap-2">
                                                            <a href="javascript:;"
                                                                class="rounded-xl btn btn-dark btn-ecomm"> <i
                                                                    class='bx bxs-cart-add'></i>Add</a>
                                                            <a href="javascript:;"
                                                                class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#QuickViewProduct"><i
                                                                    class='bx bxs-show'></i>View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                            <hr>
                            <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                class='bx bx-chevron-left'></i> Prev</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                            class="page-link">1<span class="visually-hidden">(current)</span></span>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">2</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">3</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">4</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                            href="javascript:;">5</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:;"
                                            aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end shop area-->
    </div>
</div>
<!--end page wrapper -->

<!--start quick view product-->
@include('frontend.body.quickview')
<!--end quick view product-->

<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->



<!--plugins-->
<script src="{{asset('/frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('/frontend/assets/plugins/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('/frontend/assets/js/price-slider.js')}}"></script>



<!--app JS-->

@endsection
