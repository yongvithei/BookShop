@extends('admin.index')
@section('admin')

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">

                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="javascript:void(0)">Tables</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                DataTables
                            </li>
                        </ol>
                    </nav>
                </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            <!-- Dynamic Table with Export Buttons -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Product</h3>
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-alt-primary">Refresh</button>
                        <button type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-block-normal">ADD</button>


                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                            <th style="width: 15%;">Registered</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center fs-sm">1</td>
                            <td class="fw-semibold fs-sm">David Fuller</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                client1<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
                            </td>
                            <td>
                                <span class="text-muted fs-sm">4 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fs-sm">2</td>
                            <td class="fw-semibold fs-sm">Justin Hunt</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                client2<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
                            </td>
                            <td>
                                <span class="text-muted fs-sm">7 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center fs-sm">40</td>
                            <td class="fw-semibold fs-sm">Megan Fuller</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                client40<span class="text-muted">@example.com</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
                            </td>
                            <td>
                                <span class="text-muted fs-sm">4 days ago</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table with Export Buttons -->


        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


      <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>


    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>

    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>

@endsection
