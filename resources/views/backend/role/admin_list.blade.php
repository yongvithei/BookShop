@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    {{--    @vite(['resources/css/app.css'])--}}
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
                            <a class="link-fx" href="javascript:void(0)">Admin Control</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            List Admin
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
                    <h3 class="block-title">Admin List</h3>
                    <div class="block-options">
                    <a type="button" class="btn btn-sm btn-alt-primary">Refresh</a>
                        <a onClick="add()" type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">ADD</a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table id="item-table" class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 30%;">Email</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Role</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
                                <div class="pl-loading"></div>
                            </td>
                            <td class="fs-sm">
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
            <!-- Normal Block Modal -->
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="item-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Add admin</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">
                                <input type="hidden" name="id" id="id">

                                    <div class="mb-2">
                                        <label class="form-label" for="example-text-input">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <span id="name_error" class="text-danger" style="display: none;">Field is required.</span>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="username">Username</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-user"></i>
                                                </span>
                                            <input type="text" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                <div id="validation-errors" class="alert alert-danger" style="display: none;"></div>

                                    <div class="mb-2">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-envelope"></i>
                                                </span>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-2" id="passINPUT">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="one-ecom-product-category">Role</label>
                                            <label for="example-select2-modal"></label><select name="roles" class="form-select" id="roles" style="width: 100%;" data-container="#item-modal" data-placeholder="Choose one..">
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
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
            ajax: '{{ route('all.admin') }}',
            columns: [
    { data: 'id', name: 'id' },
    { data: 'name', name: 'name' },
    { data: 'email', name: 'email' },
    { data: 'role_name', name: 'role_name' },
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
                }
                
            ]
        
        });
    });
    function add(){
        $('#ItemForm').trigger("reset");
        $('#btn-save').html("Create");
        $('#item-modal').modal('show');
        $('#id').val('');
        $('#name_error').hide();
        $('#passINPUT').removeAttr('hidden');
    }   
    $('#ItemForm').submit(function (e) {
        e.preventDefault();
        var nameValue = $('#name').val();
        if (nameValue.trim() === '') {
            $('#name_error').show();
            return;
        }
        $('#name_error').hide();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: "{{ url('admin/store')}}",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.errors) {
        // Validation errors are present in the response
        // You can display them to the user
        console.log("AJAX request succeeded", data);
        var errorHtml = '<ul>';
        $.each(data.errors, function (key, value) {
            errorHtml += '<li>' + value + '</li>';
        });
        errorHtml += '</ul>';
        $('#validation-errors').html(errorHtml).show(); // Display errors in a specific element
    } else {
        
        // Validation passed, you can proceed with your success logic
        $("#item-modal").modal('hide');
        var oTable = $('#item-table').dataTable();
        oTable.fnDraw(false);
        $("#btn-save").html('Submit');
        $("#btn-save").attr("disabled", false);
    }
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
                url: "{{ url('admin/delete') }}",
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
        url: "{{ url('admin/edit') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res) {
            $('#btn-save').html("Save changes");
            $('#item-modal').modal('show');
            $('#id').val(res.user.id);
            $('#name').val(res.user.name);
            $('#username').val(res.user.username);
            $('#email').val(res.user.email);
            $('#passINPUT').attr('hidden', 'hidden');

            // Populate the roles select element based on userRoles
            $('#roles option').each(function() {
                if (res.userRoles.includes($(this).text())) {
                    $(this).prop('selected', true);
                } else {
                    $(this).prop('selected', false);
                }
            });

            // Refresh the select2 plugin (if you are using it)
            $('#roles').trigger('change');
        }
    });
}



    </script>
@endsection
