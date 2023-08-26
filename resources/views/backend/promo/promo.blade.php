@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    {{--    @vite(['resources/css/app.css'])--}}
    <!-- UntitleUI framework -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/flatpickr/flatpickr.min.css')}}">
    <!-- Main Container -->
    <main id="main-container">


        <!-- END Block Tabs With Options -->
        <!-- Hero -->
        <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">PROMOTION MANAGEMENT</a>
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
                                <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">Slider</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Coupon</button>
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
                                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
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
                                        <div class="py-4 mb-0 justify-content-end">
                                            <div class="col-md-1 col-xl-2">
                                                <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-block-normal">ADD</button>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END Dynamic Table Full -->
                            </div>
                            <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
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
                                                <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
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
                                <div class="py-4 mb-0 justify-content-end">
                                    <div class="col-md-1 col-xl-2">
                                        <button type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-coupon">ADD</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Block Tabs With Options Default Style -->

                </div>

            </div>

            <!-- Slider Modal -->
            <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Add Slider</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">

                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="example-text-input">Slider Name</label>
                                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Slider Name">
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label">Preview Image</label>
                                            <div class="mb-4">
                                                <img class="img-avatar" src="{{ asset('admin/assets/media/avatars/avatar13.jpg')}}" alt="">
                                            </div>
                                            <div class="mb-4">
                                                <label for="one-profile-edit-avatar" class="form-label">Choose For Slider</label>
                                                <input class="form-control" type="file" id="one-profile-edit-avatar">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-inline1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                                    <label class="form-check-label" for="example-radios-inline2">Inactive</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </form>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Normal Block Modal -->
            <!-- modal-coupon -->
            <div class="modal" id="modal-coupon" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Create Coupon</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">

                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="example-text-input">Coupon Name</label>
                                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Coupon Code">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="example-text-input">Percent</label>
                                            <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="%">
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg -12 col-xl-12">
                                                <label class="form-label" for="example-flatpickr-default">Expired Date</label>
                                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                                                    <label class="form-check-label" for="example-radios-inline1">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                                    <label class="form-check-label" for="example-radios-inline2">Inactive</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </form>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Normal Block Modal -->
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

    <script src="{{ asset('admin/assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>One.helpersOnLoad(['js-flatpickr', 'jq-datepicker',  'jq-select2', 'jq-rangeslider']);</script>


@endsection
