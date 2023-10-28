@extends('backend.pos.index')
@section('pos')
<!-- Stylesheets -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
<link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/select2/css/select2.min.css' )}}">

<!-- UntitleUI framework -->
<style>
    .pl-loading {
        min-height: 30px;
        background-color: #eee;
        border-radius: 10px;
    }

</style>
<!-- Main Container -->
<main id="main-container">
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
    <!-- Page Content -->
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Order</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table id="item-table" class="table table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">ID</th>
                            <th style="width: 20%;">Customer Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 20%;">Order Date</th>
                            <th class="d-none d-sm-table-cell" style="width: 20%;">Payment type</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Total</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Paid</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
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
                            <td class="fs-sm">
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
                            <td class="fs-sm">
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
                            <td class="fs-sm">
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
    <!-- END Page Content -->
</main>
<!-- jQuery (required for DataTables plugin) -->
<script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
<!-- Page JS Code -->
<script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js')}}"></script>

@endsection
