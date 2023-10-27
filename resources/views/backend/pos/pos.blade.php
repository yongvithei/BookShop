@extends('backend.pos.index')
@section('pos')

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('admin/assets/js/plugins/select2/css/select2.min.css')}}">

<!-- Main Container -->
<main id="main-container">
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
    <!-- Page Content -->
    <div class="content">
        <!-- Toggle Side Content -->
        <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
        <div class="d-xl-none push">
            <div class="row g-sm">
                <div class="col-6">
                    <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                        data-target=".js-ecom-div-nav" data-class="d-none">
                        <i class="fa fa-fw fa-bars text-muted me-1"></i> Selling info
                    </button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-alt-secondary w-100" data-toggle="class-toggle"
                        data-target=".js-ecom-div-cart" data-class="d-none">
                        <i class="fa fa-fw fa-shopping-cart text-muted me-1"></i> Cart
                    </button>
                </div>
            </div>
        </div>
        <!-- END Toggle Side Content -->

        <div class="row push">
            <div class="col-xl-5 order-xl-1">
                <!-- Shopping Cart -->
                <div class="block block-rounded js-ecom-div-cart d-none d-xl-block">
                    <div class="block-header block-header-default d-flex justify-content-center">
                        <!-- Search Form -->
                        <form action="" method="POST" onsubmit="return false;">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" id="search" name="search"
                                    placeholder="Barcode">
                                <span class="input-group-text bg-body border-0">
                                    <i class="fa fa-barcode"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- END Search Form -->

                    <!-- Striped Table -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left" style="width: 35%;">QTY</th>
                                        <th class="text-center" style="width: 35%;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold fs-sm">
                                            <a href="">Carol White</a>
                                        </td>
                                        <td class="d-sm-table-cell">
                                            <div class="d-flex align-items-center">
                                                <input type="number" class="form-control" id="count" name="count"
                                                    value="1" min="0" max="999" step="1">
                                                <button type="button" class="btn btn-sm btn btn-danger ms-1">
                                                    <i class="far fa-trash-can"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="d-sm-table-cell text-center">
                                            <a href="">1000$</a>
                                        </td>

                                    </tr>

                                    <tr class="table-active">
                                        <td class="text-end" colspan="2">
                                            <span class="h4 fw-medium">Total</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="h4 fw-semibold">$100</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <!-- END Striped Table -->
                    <div class="block-content block-content-full bg-body-light text-end">
                        <a class="btn btn-light" href="">
                            Cancel
                        </a>
                        <a class="btn btn-primary" href="">
                            Submit
                            <i class="fa fa-arrow-right opacity-50 ms-1"></i>
                        </a>
                    </div>
                </div>
                <!-- END Shopping Cart -->
                <!-- Categories -->
                <div class="block block-rounded js-ecom-div-nav d-none d-xl-block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <i class="fa fa-fw fa-boxes text-muted me-1"></i>Selling information
                        </h3>
                    </div>
                    <div class="block-content">
                        <!-- start custommer -->
                        <div class="mb-4">
                         <label class="form-label" for="val-select2">Customer<span class="text-danger"> *</span></label>
                                <select class="js-select2 form-select" id="val-select1" name="val-select1"
                                    style="width: 100%;">
                                    <option value="walking_customer" selected>Walking customer</option>
                                </select>
                            </div>
                        <!-- end custommer -->
                         <!-- start custommer -->
                         <div class="mb-4">
                         <label class="form-label" for="val-select2">Payment Type<span class="text-danger"> *</span></label>
                                <select class="js-select2 form-select" id="val-select2" name="val-select2"
                                    style="width: 100%;">
                                    <option value="cash" selected>Cash</option>
                                    <option value="bank">Online Bank</option>
                                </select>
                            </div>
                        <!-- end custommer -->


                    </div>
                </div>
                <!-- END Categories -->
            </div>



            <div class="col-xl-7 order-xl-0">
                <!-- Icon search functionality is initialized in js/pages/be_ui_icons.min.js which was auto compiled from _js/pages/be_ui_icons.js -->
                <form class="js-form-icon-search mb-2" action="" method="POST">
                    <div class="input-group input-group-lg">
                        <input type="text" class="js-icon-search form-control fs-base" placeholder="Search Product">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </form>
                <!-- END Search Section -->
                <!-- Sort and Show Filters -->
                <div class="d-flex justify-content-between">
                    <div class="mb-3">
                        <select id="ecom-results-show" name="ecom-results-show" class="form-select form-select-sm"
                            size="1">
                            <option value="0" disabled selected>SHOW</option>
                            <option value="9">9</option>
                            <option value="18">18</option>
                            <option value="36">36</option>
                            <option value="72">72</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select id="ecom-results-sort" name="ecom-results-sort" class="form-select form-select-sm"
                            size="1">
                            <option value="0" disabled selected>SORT BY</option>
                            <option value="1">Popularity</option>
                            <option value="2">Name (A to Z)</option>
                            <option value="3">Name (Z to A)</option>
                            <option value="4">Price (Lowest to Highest)</option>
                            <option value="5">Price (Highest to Lowest)</option>
                            <option value="6">Sales (Lowest to Highest)</option>
                            <option value="7">Sales (Highest to Lowest)</option>
                        </select>
                    </div>
                </div>
                <!-- END Sort and Show Filters -->

                <!-- Products -->
                <div class="row items-push">
                  <!-- loop -->
                    <div class="col-md-6 col-xl-3">
                        <div class="block block-rounded h-100 mb-0">
                            <div class="block-content p-1">
                                <div class="options-container">
                                    <img class="img-fluid options-item"
                                        src="{{asset('admin/assets/media/various/ecom_product6.png')}}" alt="">
                                    <div class="options-overlay bg-black-75">
                                        <div class="options-overlay-content">
                                            <a class="btn btn-sm btn-alt-secondary"
                                                href="">
                                                View
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                                <i class="fa fa-plus text-success me-1"></i> Add to cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="mb-2">
                                    <div class="fw-semibold float-end ms-1">$500</div>
                                    <a class="h6" href="">Super Badges Pack</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!-- loop -->
                </div>
                <div class="text-end">
                    <a class="btn btn-alt-secondary" href="be_pages_ecom_store_products.html">
                        Next Page <i class="fa fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <!-- END Products -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>


<script src="{{asset('admin/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Page JS Helpers (Select2 plugin) -->
<script>
    One.helpersOnLoad(['jq-select2']);

</script>
@endsection
