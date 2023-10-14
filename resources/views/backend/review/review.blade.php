@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page JS Plugins CSS -->
     <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    {{--    @vite(['resources/css/app.css'])--}}
    <!-- UntitleUI framework -->
    <!-- Main Container -->
    <main id="main-container">


        <!-- END Block Tabs With Options -->
        <!-- Hero -->
        <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Review</a>
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
                                <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">Under Preview</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Approve</button>
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
                            <div class="tab-pane active" id="btabswo-static-home" role="tabpanel"
                                aria-labelledby="btabswo-static-home-tab" tabindex="0">
                                <!-- Dynamic Table Full -->
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <table id="item-table" class="table table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 80px;">ID</th>
                                            <th style="width: 30%;">Comment</th>
                                            <th class="d-none d-sm-table-cell" style="width: 15%;">User</th>
                                            <th class="d-none d-sm-table-cell" style="width: 15%;">Product</th>
                                            <th class="d-none d-sm-table-cell" style="width: 20%;">Rating</th>
                                            <th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
                                            <th style="width: 15%;">Action</th>
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
                                <!-- END Dynamic Table Full -->
                            </div>
                            <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                  <table id="item-approve" class="table table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 80px;">ID</th>
                                            <th style="width: 30%;">Comment</th>
                                            <th class="d-none d-sm-table-cell" style="width: 15%;">User</th>
                                            <th class="d-none d-sm-table-cell" style="width: 15%;">Product</th>
                                            <th class="d-none d-sm-table-cell" style="width: 20%;">Rating</th>
                                            <th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
                                            <th style="width: 15%;">Action</th>
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
                    <!-- END Block Tabs With Options Default Style -->

                </div>

            </div>

         
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

<script>

 $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#item-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.review') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'comment', name: 'comment' },
                { data: 'user_name', name: 'user_name' },
                { data: 'pro_name', name: 'pro_name' },
                { 
                data: 'rating',
                name: 'rating',
                render: function (data) {
                    if (data == 1) {
                        return '<i class="fa fa-star"></i>';
                    } else if (data == 2) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 3) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 4) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 5) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else {
                        return ''; // Default case, return an empty string or handle it as needed.
                    }
                }
            },
                { 
                data: 'status', 
                name: 'status',
                render: function (data) {
                    if (data == 0) {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Pending</span>';
                    } else {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Approve</span>';
                    }
                }
            },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']],
             columnDefs: [{
            targets: [0, 2, 3, 4],
            className: 'text-center',
        }],
        });
        $('#item-approve').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.approve') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'comment', name: 'comment' },
                { data: 'user_name', name: 'user_name' },
                { data: 'pro_name', name: 'pro_name' },
                { 
                data: 'rating',
                name: 'rating',
                render: function (data) {
                    if (data == 1) {
                        return '<i class="fa fa-star"></i>';
                    } else if (data == 2) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 3) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 4) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else if (data == 5) {
                        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
                    } else {
                        return ''; // Default case, return an empty string or handle it as needed.
                    }
                }
            },
                { 
                data: 'status', 
                name: 'status',
                render: function (data) {
                    if (data == 0) {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Pending</span>';
                    } else {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Approve</span>';
                    }
                }
            },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']],
             columnDefs: [{
            targets: [0, 2, 3, 4],
            className: 'text-center',
        }],
        });
    });
    function approveFunc(id) {
        Swal.fire({
            title: 'Approve this Record?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('review/approve') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (res) {
                        var oTable = $('#item-approve').dataTable();
                        oTable.fnDraw(false);
                        var aoTable = $('#item-table').dataTable();
                        aoTable.fnDraw(false);
                    }
                });
            }
        });
    }
    function revokeFunc(id) {
        Swal.fire({
            title: 'Revoke this Record?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Revoke it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('review/revoke') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (res) {
                        var oTable = $('#item-approve').dataTable();
                        oTable.fnDraw(false);
                        var aoTable = $('#item-table').dataTable();
                        aoTable.fnDraw(false);
                    }
                });
            }
        });
    }
function deleteFunc(id) {
    Swal.fire({
        title: 'Delete Record?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: "{{ url('review/delete') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    var oTable = $('#item-approve').dataTable();
                    oTable.fnDraw(false);
                    var aoTable = $('#item-table').dataTable();
                    aoTable.fnDraw(false);
                }
            });
        }
    });
}
    </script>
@endsection
