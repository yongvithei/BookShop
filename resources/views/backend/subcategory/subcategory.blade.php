@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/select2/css/select2.min.css' )}}">
    <!--need for drop down <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/untitleui.min.css' )}}"> -->
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
        <!-- Hero -->
        <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Category Setup</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Subcategories
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">SubCategories</h3>
                    <div class="block-options">
                        <a type="button" class="btn btn-sm btn-alt-primary">Refresh</a>
                        <a onClick="add()" type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal3">ADD</a>

                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table id="item-table" class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>SubCategory Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Category Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
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
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
            <!-- Select2 in a modal -->
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="item-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Create Subcategory</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Select2 is initialized at the bottom of the page -->
                                <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                    <div class="mb-3">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="SubCategory Name">
                                        <span id="name_error" class="text-danger" style="display: none;">Field is required.</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="one-ecom-product-category">Category</label>
                                        <label for="example-select2-modal"></label><select class="js-select2 form-select" id="cat_id" name="cat_id" style="width: 100%;" data-container="#item-modal" data-placeholder="Choose one..">
                                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                        <span id="cat_error" class="text-danger" style="display: none;">Please select.</span>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusPublic" name="status" value="Public" checked="">
                                                    <label class="form-check-label" for="statusPublic">Public</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusPrivate" name="status" value="Private">
                                                    <label class="form-check-label" for="statusPrivate">Private</label>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-save" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Select2 in a modal -->
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


{{--    another--}}
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>

    <!-- Page JS Helpers (Select2 + Bootstrap Maxlength + CKEditor plugins) -->
    <script>One.helpersOnLoad(['jq-select2']);</script>
    <!-- switch -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

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
                ajax: '{{ route('all.sub') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'sub_name', name: 'sub_name' },
                    { data: 'cat_name', name: 'cat_name' },
                    {
                        data: 'status',
                        name: 'status',
                        render: function (data) {
                            if (data === 'Public') {
                                return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Public</span>';
                            } else {
                                return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Private</span>';
                            }
                        }
                    },
                    { data: 'action', name: 'action', orderable: false },
                ],
                order: [[0, 'desc']],
                columnDefs: [
                    {
                        targets: 0,
                        className: 'text-center fs-sm'
                    },
                    {
                        targets: 3,
                        className: 'text-center'
                    },
                    {
                        targets: 4,
                        className: 'text-center'
                    }

                ]

            });
        });
        function add(){
            $('#ItemForm').trigger("reset");
            $('#btn-save').html("Create");
            $('#item-modal').modal('show');
            $('#id').val('');
            $('#cat_id').trigger('change');
            $('#name_error').hide();
        }
        $('#ItemForm').submit(function (e) {
            e.preventDefault();
            var nameVal = $('#sub_name').val();
            var catVal = $('#cat_id').val();
            if (nameVal.trim() === '') {
                $('#name_error').show();
                return;
            } else if(catVal.trim() === '') {
                $('#cat_error').show();
                $('#name_error').hide();
                return;
            }
            $('#name_error').hide();
            $('#cat_error').hide();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('sub/store')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#item-modal").modal('hide');
                    var oTable = $('#item-table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
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
                        url: "{{ url('sub/delete') }}",
                        data: { id: id },
                        dataType: 'json',
                        success: function (res) {
                            var oTable = $('#item-table').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        }


        function editFunc(id) {
            $('#name_error').hide();
            $.ajax({
                type: "POST",
                url: "{{ url('sub/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-save').html("Save changes");
                    $('#item-modal').modal('show');
                    $('#id').val(res.id);
                    $('#sub_name').val(res.sub_name);
                    $('#cat_id').val(res.cat_id);
                    $('#cat_id').trigger('change');
                    if (res.status === 'Public') {
                        $('#statusPublic').prop('checked', true);
                    } else if (res.status === 'Private') {
                        $('#statusPrivate').prop('checked', true);
                    }
                }
            });
        }
    </script>

@endsection
