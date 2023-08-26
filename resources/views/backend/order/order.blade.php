@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">

   <!-- Main Container -->
    <main id="main-container">


        <!-- END Block Tabs With Options -->
        <!-- Hero -->
        <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Order Management</a>
                        </li>

                    </ol>
                </nav>
            </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Block Tabs With Options -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Block Tabs With Options Default Style -->
                    <div class="block block-rounded">
                        <ul class="nav nav-tabs nav-tabs-block align-items-center" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">All Order</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Pending</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Confirmed</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Out for delivery</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Delivered</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Cancelled</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <div class="block-options ps-3 pe-2">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="btabswo-static-home" role="tabpanel" aria-labelledby="btabswo-static-home-tab" tabindex="0">
                                <!-- Dynamic Table Full -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">
                                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 80px;">ID</th>
                                                <th>Name</th>
                                                <th class="d-none d-sm-table-cell" style="width: 30%;">Description</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                                <th style="width: 15%;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center fs-sm">39</td>
                                                <td class="fw-semibold fs-sm">Henry Harrison</td>
                                                <td class="d-none d-sm-table-cell fs-sm">
                                                    client39<span class="text-muted">@example.com</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="modal" data-bs-target="#modal-block-extra-large">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">40</td>
                                                <td class="fw-semibold fs-sm">Alice Moore</td>
                                                <td class="d-none d-sm-table-cell fs-sm">
                                                    client40<span class="text-muted">@example.com</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Dynamic Table Full -->
                            </div>
                            <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 80px;">ID</th>
                                                <th>Name</th>
                                                <th class="d-none d-sm-table-cell" style="width: 30%;">Description</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                                <th style="width: 15%;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td class="text-center fs-sm">39</td>
                                                <td class="fw-semibold fs-sm">Henry Harrison</td>
                                                <td class="d-none d-sm-table-cell fs-sm">
                                                    client39<span class="text-muted">@example.com</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="modal" data-bs-target="#modal-block-extra-large">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">40</td>
                                                <td class="fw-semibold fs-sm">Alice Moore</td>
                                                <td class="d-none d-sm-table-cell fs-sm">
                                                    client40<span class="text-muted">@example.com</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Block Tabs With Options Default Style -->

                </div>

            </div>
            <!-- Extra Large Block Modal -->
            <div class="modal" id="modal-block-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-block-extra-large" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Order Details</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content fs-sm">



                                    <!-- Interactive Options -->
                                    <div class="row">
                                        <!-- Addresses -->
                                        <div class="block block-rounded">

                                            <div class="block-content">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- Billing Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">Shipping Details</h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">John Parker</div>
                                                                <address class="fs-sm">
                                                                    Sunrise Str 620<br>
                                                                    Melbourne<br>
                                                                    Australia, 11-587<br><br>
                                                                    <i class="fa fa-phone"></i> (999) 888-55555<br>
                                                                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <!-- END Billing Address -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- Shipping Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">ORDER DETAILS INVOICE : EOS57109333</h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">John Parker</div>
                                                                <address class="fs-sm">
                                                                    Sunrise Str 620<br>
                                                                    Melbourne<br>
                                                                    Australia, 11-587<br><br>
                                                                    <i class="fa fa-phone"></i> (999) 888-55555<br>
                                                                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <!-- END Shipping Address -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Addresses -->
                                        <!-- Page Content -->

                                        <!-- Shopping Cart -->
                                        <div class="block block-rounded">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Shopping Cart (4)</h3>
                                            </div>
                                            <div class="block-content">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-striped table-vcenter">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center" style="width: 100px;">ID</th>
                                                            <th class="d-none d-md-table-cell">Product</th>
                                                            <th class="d-none d-sm-table-cell text-center">Added</th>
                                                            <th>Status</th>
                                                            <th class="d-none d-sm-table-cell text-end">Value</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <a class="fw-semibold" href="edit.html">
                                                                    <strong>PID.0154</strong>
                                                                </a>
                                                            </td>
                                                            <td class="d-none d-md-table-cell fs-sm">
                                                                <a href="edit.html">Product #4</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-center fs-sm">27/04/2019</td>
                                                            <td>
                                                                <span class="badge bg-danger">Out of Stock</span>
                                                            </td>
                                                            <td class="text-end d-none d-sm-table-cell fs-sm">
                                                                <strong>$80,00</strong>
                                                            </td>
                                                            <td class="text-center fs-sm">
                                                                <a class="btn btn-sm btn-alt-secondary" href="edit.html" data-bs-toggle="tooltip" title="View">
                                                                    <i class="fa fa-fw fa-eye"></i>
                                                                </a>
                                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <a class="fw-semibold" href="edit.html">
                                                                    <strong>PID.0153</strong>
                                                                </a>
                                                            </td>
                                                            <td class="d-none d-md-table-cell fs-sm">
                                                                <a href="edit.html">Product #3</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-center fs-sm">21/01/2019</td>
                                                            <td>
                                                                <span class="badge bg-danger">Out of Stock</span>
                                                            </td>
                                                            <td class="text-end d-none d-sm-table-cell fs-sm">
                                                                <strong>$21,00</strong>
                                                            </td>
                                                            <td class="text-center fs-sm">
                                                                <a class="btn btn-sm btn-alt-secondary" href="edit.html" data-bs-toggle="tooltip" title="View">
                                                                    <i class="fa fa-fw fa-eye"></i>
                                                                </a>
                                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <a class="fw-semibold" href="edit.html">
                                                                    <strong>PID.0152</strong>
                                                                </a>
                                                            </td>
                                                            <td class="d-none d-md-table-cell fs-sm">
                                                                <a href="edit.html">Product #2</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-center fs-sm">18/05/2019</td>
                                                            <td>
                                                                <span class="badge bg-success">Available</span>
                                                            </td>
                                                            <td class="text-end d-none d-sm-table-cell fs-sm">
                                                                <strong>$37,00</strong>
                                                            </td>
                                                            <td class="text-center fs-sm">
                                                                <a class="btn btn-sm btn-alt-secondary" href="edit.html" data-bs-toggle="tooltip" title="View">
                                                                    <i class="fa fa-fw fa-eye"></i>
                                                                </a>
                                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <a class="fw-semibold" href="edit.html">
                                                                    <strong>PID.0151</strong>
                                                                </a>
                                                            </td>
                                                            <td class="d-none d-md-table-cell fs-sm">
                                                                <a href="edit.html">Product #1</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-center fs-sm">06/08/2019</td>
                                                            <td>
                                                                <span class="badge bg-success">Available</span>
                                                            </td>
                                                            <td class="text-end d-none d-sm-table-cell fs-sm">
                                                                <strong>$94,00</strong>
                                                            </td>
                                                            <td class="text-center fs-sm">
                                                                <a class="btn btn-sm btn-alt-secondary" href="edit.html" data-bs-toggle="tooltip" title="View">
                                                                    <i class="fa fa-fw fa-eye"></i>
                                                                </a>
                                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete">
                                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Shopping Cart -->
                                    </div>
                                    <!-- END Interactive Options -->

                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Extra Large Block Modal -->


        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>
    <!-- Page JS Plugins -->


    <script src="{{asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
    <!-- Page JS Code -->

    <script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js')}}"></script>




@endsection
