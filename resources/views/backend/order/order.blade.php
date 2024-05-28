@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
    </style>
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
                            <a class="link-fx" href="javascript:void(0)">{{ __('part_s.order_management') }}</a>
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
                                <button class="nav-link active" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" role="tab" aria-controls="order" aria-selected="true">{{ __('part_s.all_order') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" role="tab" aria-controls="pending" aria-selected="false">{{ __('part_s.pending') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="conform-order-tab" data-bs-toggle="tab" data-bs-target="#conform-order" role="tab" aria-controls="conform-order" aria-selected="false">{{ __('part_s.confirmed') }}</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" id="out-for-delivery-tab" data-bs-toggle="tab" data-bs-target="#out-for-delivery" role="tab" aria-controls="out-for-delivery" aria-selected="false">{{ __('part_s.out_for_delivery') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivered" role="tab" aria-controls="delivered" aria-selected="false">{{ __('part_s.delivered') }}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="cancelled-tab" data-bs-toggle="tab" data-bs-target="#cancelled" role="tab" aria-controls="cancelled" aria-selected="false">{{ __('part_s.cancelled') }}</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <div class="block-options ps-3 pe-2">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="order" role="tabpanel" aria-labelledby="order-tab" tabindex="0">
                                <!-- Dynamic Table Full -->
                                <div id="one-dashboard-search-orders" class="d-none">
                                    <!-- Search Form -->
                                        <div class="row mb-2">
                                            <div class="col-xl-12">
{{--                                                <label class="form-label" for="date">{{ __('part_s.search_by_date_label') }}</label>--}}
                                                <input type="text" class="js-flatpickr form-control" id="date" name="date" placeholder="MM, DD, YYYY" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                            </div>
                                            <div class="mt-2">
                                                <select id="searchD" name="searchD" class="form-select" aria-label="Default select example">
                                                    <option>{{ __('part_s.all') }}</option>
                                                    <option value="failed">{{ __('part_s.status_failed') }}</option>
                                                    <option value="cancelled">{{ __('part_s.status_cancelled') }}</option>
                                                    <option value="delivered">{{ __('part_s.status_delivered') }}</option>
                                                    <option value="pending">{{ __('part_s.status_pending') }}</option>
                                                    <option value="delivering">{{ __('part_s.status_delivering') }}</option>
                                                    <option value="confirm">{{ __('part_s.status_confirm') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    <button id="reset" type="submit" class="btn btn-sm btn-primary mb-2" data-bs-dismiss="modal">{{ __('part_s.reset') }}</button>
                                    <!-- END Search Form -->
                                </div>

                                <div class="block block-rounded">

                                    <div class="tab-pane">
                                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                        <table id="order-table" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- END Dynamic Table Full -->
                            </div>
                             <div class="tab-pane" id="pending" role="tabpanel" aria-labelledby="pending-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table id="pending-order" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="conform-order" role="tabpanel" aria-labelledby="conform-order-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table id="confirm-order" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <div class="tab-pane" id="out-for-delivery" role="tabpanel" aria-labelledby="out-for-deliveryout-for-delivery-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table id="order-delivery" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="delivered" role="tabpanel" aria-labelledby="delivered-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table id="order-delivered" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="cancelled" role="tabpanel" aria-labelledby="cancelled-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="block block-rounded">
                                    <div class="tab-pane">

                                        <table id="order-cancelled" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 15px;">{{ __('part_s.number') }}</th>
                                                <th>{{ __('part_s.invoice') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.date') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.amount') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">{{ __('part_s.payment') }}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 10%;">{{ __('part_s.state') }}</th>
                                                <th style="width: 10%;">{{ __('part_s.action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="fw-semibold fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell fs-sm">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="d-sm-table-cell">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="pl-loading"></div>
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
            <div class="modal" id="modal_order" tabindex="-1" role="dialog" aria-labelledby="modal_order" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ __('part_s.order_details') }}</h3>
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
                                                        <!-- Shipping Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">{{ __('part_s.shipping_details') }}</h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">{{ __('part_s.name') }}: <span id="ship_name"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.email') }}: <span id="ship_email"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.city') }}: <span id="ship_city"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.district') }}: <span id="ship_district"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.postcode') }}: <span id="ship_post"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.order_date') }}: <span id="order_date"></span></div>
                                                                <address class="fs-sm">
                                                                    <i class="fa fa-phone"></i> {{ __('part_s.phone') }}: <span id="ship_phone"></span><br>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <!-- END Shipping Address -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- User Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">{{ __('part_s.invoice') }} : <span id="invoice_no"></span></h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">{{ __('part_s.name') }}: <span id="name"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.email') }}: <span id="email"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.payment_method') }}: <span id="payment_method"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.transaction_id') }}: <span id="transaction_id"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.invoice_id') }}: <span id="invoice_no"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.amount') }}: <span id="amount"></span></div>
                                                                <div class="fs-sm mb-3">{{ __('part_s.status') }}: <span class="badge bg-success" id="status"></span></div>
                                                            </div>
                                                        </div>
                                                        <!-- END User Address -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Addresses -->
                                        <!-- Page Content -->

                                        <!-- Shopping Cart -->
                                        <div class="block block-rounded">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">{{ __('part_s.product_order') }}</h3>
                                            </div>

                                                <div class="table-responsive">
                                                    <table id="item-table" class="table table-borderless table-striped table-vcenter">
                                                        <thead>
                                                        <tr>
                                                            <th>{{ __('part_s.product_name') }}</th>
                                                            <th>{{ __('part_s.pro_code') }}</th>
                                                            <th>{{ __('part_s.order_qty') }}</th>
                                                            <th>{{ __('part_s.qty_instock') }}</th>
                                                            <th>{{ __('part_s.price') }}</th>
                                                            <th>{{ __('part_s.total_price') }}</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="fw-semibold fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="fw-semibold fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="fw-semibold fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="fw-semibold fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell fs-sm">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="d-sm-table-cell">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                        </tr>



                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        <!-- END Shopping Cart -->
                                    </div>
                                    <!-- END Interactive Options -->
                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="oid" id="oid">
                                    <button type="submit" id="buttonCancelled" class="btn btn-sm btn-warning mx-3">{{ __('part_s.cancel_order') }}</button>

                                    <label class="text-center" for="status">{{ __('part_s.choose') }}</label>
                                    <select name="status" id="order-select">
                                        <!-- Add options dynamically using JavaScript or Blade if needed -->
                                    </select>
                                    <button id="buttonConfirm" type="submit" class="btn btn-sm btn-primary mx-3" data-bs-dismiss="modal">{{ __('part_s.confirm') }}</button>
                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">{{ __('part_s.close') }}</button>

                                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('admin/assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>One.helpersOnLoad(['js-flatpickr']);</script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })

        $(document).ready(function() {
            const $flatpickr = $("#date").flatpickr();
            var orderTable = $('#order-table').DataTable({
                pageLength: 10,
                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                autoWidth: false,
                serverSide: true,
                processing: false,
                ajax: {
                    url: '{{ route('all.order') }}',
                    data: function (d) {
                        // Retrieve selected date
                        var date = $('#date').val();
                        if (date) {
                            d.date = date;
                        }
                        // Retrieve selected status only when it's not the default option
                        var status = $('#searchD').val();
                        if (status && status !== '{{ __('part_s.all') }}') {
                            d.searchD = status;
                        }
                    }
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        render: function (data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'invoice_no', name: 'invoice_no' },
                    { data: 'order_date', name: 'order_date' }, // Corrected from 'email' to 'order_date'
                    { data: 'amount', name: 'amount' },
                    { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "pending") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Pending</span>';
                    } else if (data === "confirm") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Confirmed</span>';
                    } else if (data === "delivering") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Delivering</span>';
                    } else if (data === "delivered") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Delivered</span>';
                    }else if (data === "cancelled") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">Cancelled</span>';
                    }else {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">Failed</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
                order: [[0, 'desc']],
                columnDefs: [{
                    targets: [0, 2, 3, 4, 6],
                    className: 'text-center',
                }],
            });

        // Add event listener to date input and status select
            $('#date, #searchD').on('change', function() {
                orderTable.ajax.reload();
            });

            // Event listener for the reset button
            $('#reset').on('click', function() {
                // Clear the selected date and reset the placeholder
                $('#date').val('').attr('placeholder', 'MM, DD, YYYY');
                $flatpickr.clear();
                // Reset the status select to its default option value
                $('#searchD').val('part_s.all');
                // Trigger change event to reload the DataTable
                $('#date, #searchD').trigger('change');
            });





            $('#pending-order').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('pending.order') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'email' },
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "pending") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Pending</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [{
            targets: [0, 2, 3, 4, 6],
            className: 'text-center',
        }],
    });
    $('#confirm-order').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('confirm.order') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'email' },
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "confirm") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Confirmed</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [{
            targets: [0, 2, 3, 4, 6],
            className: 'text-center',
        }],
    });
    $('#order-delivery').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('delivery.order') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'email' },
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "delivering") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Deliverying</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [{
            targets: [0, 2, 3, 4, 6],
            className: 'text-center',
        }],
    });
    $('#order-delivered').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('delivered.order') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'email' },
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "delivered") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Delivered</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [{
            targets: [0, 2, 3, 4, 6],
            className: 'text-center',
        }],
    });
    $('#order-cancelled').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('cancelled.order') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'email' },
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === "cancelled") {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">Cancelled</span>';
                    }else{
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">Failed</span>';
                    }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [{
            targets: [0, 2, 3, 4, 6],
            className: 'text-center',
        }],
    });
//table
});

    function viewFunc(id) {
        editFunc(id)
        $.ajax({
            type: "POST",
            url: "{{ route('order.items') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (resOrderItems) {
                    $.ajax({
                                type: "POST",
                                url: "{{ url('order/detail') }}",
                                data: {
                                    id: id
                                },
                                dataType: 'json',
                                success: function (res) {
                                        $('#modal_order').modal('show');
                                        $('#id').val(res.order_id);
                                        // Clear any existing rows in the table body
                                        $('#item-table tbody').html('');
                                        // Initialize a variable to track the condition
                                       var shouldDisableConfirmButton = false; // Initialize to false

                                        // Iterate through the order items and add rows to the table
                                        $.each(resOrderItems, function (index, item) {
                                            var row = '<tr><td>' + item.name + '</td><td>' + item.pro_code + '</td><td>' + item.orderqty + '</td><td>' + item.qtyinstock + '</td><td>' + item.price + '</td><td>' + item.total_price + ' {{ __('pos_p.khr') }}' + '</td></tr>';
                                            // Check the condition for each row

                                            if (parseInt(item.qtyinstock) < parseInt(item.orderqty)) { // Use parseInt to ensure numeric comparison
                                                shouldDisableConfirmButton = true;
                                            }
                                            row += '</td></tr>';
                                            $('#item-table tbody').append(row);
                                        });

                                        // Update the "Confirm" button's disabled attribute and text based on the condition
                                        if (shouldDisableConfirmButton) {
                                            $('#buttonConfirm').prop('disabled', true);
                                            $('#buttonConfirm').text('Low Qty'); // Change the button text to "Low Qty"
                                        } else {
                                            $('#buttonConfirm').prop('disabled', false);
                                            $('#buttonConfirm').text('{{ __('part_s.save') }}'); // Change the button text back to "Confirm"
                                        }
                        // Populate the user data into the modal table
                        $('#ship_name').text(res.ship_name);
                        $('#ship_email').text(res.ship_email);
                        $('#ship_city').text(res.ship_city);
                        $('#ship_district').text(res.ship_district);
                        $('#ship_post').text(res.ship_post);
                        $('#order_date').text(res.order_date);
                        $('#ship_phone').text(res.ship_phone);

                        $('#name').text(res.name);
                        $('#email').text(res.email);
                        $('#payment_method').text(res.payment_method);
                        $('#transaction_id').text(res.transaction_id);
                        $('#invoice_no').text(res.invoice_no);
                        $('#amount').text(res.amount);
                        $('#status').text(res.status);

                    }

                });
                $('#buttonCancelled').on('click', function () {
                        cancelledFunc(id);
                    });
            }
        });
    }

    function cancelledFunc(id) {
        Swal.fire({
            title: '{{ __('part_s.cancelled_record_title') }}',
            text: '{{ __('part_s.cancelled_record_text') }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __('part_s.confirm_cancel') }}',
            cancelButtonText: '{{ __('crud.cancel') }}'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('order/cancelled') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (res) {
                        var oTable = $('#order-table').dataTable();
                        oTable.fnDraw(false);
                        var cTable = $('#confirm-order').dataTable();
                        cTable.fnDraw(false);
                        var pTable = $('#pending-order').dataTable();
                        pTable.fnDraw(false);
                        var dTable = $('#order-delivery').dataTable();
                        dTable.fnDraw(false);
                        var odTable = $('#order-delivered').dataTable();
                        odTable.fnDraw(false);
                        var ocaTable = $('#order-cancelled').dataTable();
                        ocaTable.fnDraw(false);
                        $("#modal_order").modal('hide');
                    }
                });
            }
        });
    }
    $('#ItemForm').submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);

    // Assuming you are using the correct URL for the update route
    var url = "{{ route('order.update') }}";

    $.ajax({
        type: 'POST', // Consider changing this to PUT or PATCH
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            // Update the DataTable here, if necessary
            $("#modal_order").modal('hide');
            var oTable = $('#order-table').dataTable();
                        oTable.fnDraw(false);
                        var cTable = $('#confirm-order').dataTable();
                        cTable.fnDraw(false);
                        var pTable = $('#pending-order').dataTable();
                        pTable.fnDraw(false);
                        var dTable = $('#order-delivery').dataTable();
                        dTable.fnDraw(false);
                        var odTable = $('#order-delivered').dataTable();
                        odTable.fnDraw(false);
                        var ocaTable = $('#order-cancelled').dataTable();
                        ocaTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save").attr("disabled", false);
        },
        error: function (data) {
            console.log(data);
        }
    });
});

        function editFunc(id){
            $.ajax({
                type:"POST",
                url: "{{ url('order/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    $('#oid').val(res.id);
                    $('#order-select').val(res.status);
                    $('#order-select').trigger('change');

                    // Check if the order status is already 'delivered'
                    if (res.status === 'delivered') {
                        // Show a toast message using Swal
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 6000
                        });
                        Toast.fire({
                            icon: 'warning',
                            title: "{{ __('part_s.alertStock') }}"
                        });
                    }
                }
            });
        }

    </script>
   <script>
    // Function to create and add options to the select element
    function addOptionsToSelect() {
        var selectElement = document.getElementById('order-select');
        var optionsArray = [
            { value: 'cancelled', text: '{{ __('part_s.status_cancelled') }}' },
            { value: 'failed', text: '{{ __('part_s.status_failed') }}' },
            { value: 'delivering', text: '{{ __('part_s.status_delivering') }}' },
            { value: 'delivered', text: '{{ __('part_s.status_delivered') }}' },
            { value: 'confirm', text: '{{ __('part_s.status_confirm') }}' },
            { value: 'pending', text: '{{ __('part_s.status_pending') }}' },
        ];

        for (var i = 0; i < optionsArray.length; i++) {
            var option = document.createElement('option');
            option.value = optionsArray[i].value;
            option.text = optionsArray[i].text;
            selectElement.appendChild(option);
        }
    }

    // Call the function to add options to the select element
    addOptionsToSelect();


    function downloadInvoice(orderId) {
        // Use JavaScript to navigate to the desired URL
        window.location.href = `/admin/invoice_download/${orderId}`;
    }
</script>
@endsection
