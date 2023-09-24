@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
    </style>
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
                            <a class="link-fx" href="javascript:void(0)">Role And Permission</a>
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
                                <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">Role</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">Assign Permission to Role</button>
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



                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <table id="role-table" class="table table-bordered table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">ID</th>
                                        <th>Name</th>
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
                                            <td class="text-center">
                                                <div class="pl-loading"></div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="py-4 mb-0 justify-content-end">
                                    <div class="col-md-1 col-xl-2">
                                        <button onClick="addR()" type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#role-modal">ADD</button>

                                    </div>
                                </div>


                                <!-- END Dynamic Table Full -->
                            </div>
                            <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <div class="table-responsive">
                                <table id="per-table" class="table table-bordered table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">ID</th>
                                        <th>Name</th>
                                        <th style="width: 50%;">Permission</th>
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
                                            <td class="text-center">
                                                <div class="pl-loading"></div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                </div>
                                <div class="py-4 mb-0 justify-content-end">
                                    <div class="col-md-1 col-xl-2">
                                        <button onClick="addP()" type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#per-modal">ADD</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Block Tabs With Options Default Style -->

                </div>

            </div>

            <!-- Slider Modal -->
            <div class="modal" id="role-modal" tabindex="-1" role="dialog" aria-labelledby="role-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Add Role</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="roleForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">

                                <input type="hidden" name="idR" id="idR">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Role Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                            <span id="name_errorR" class="text-danger" style="display: none;">Name is required.</span>
                                            <span class="text-danger" id="error-message" style="display: none;"></span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusActive" name="status" value="Active" checked="">
                                                    <label class="form-check-label" for="statusActive">Active</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusInactive" name="status" value="Inactive">
                                                    <label class="form-check-label" for="statusInactive">Inactive</label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-saveR" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Normal Block Modal -->
            <!-- Normal Block Modal -->
            <div class="modal" id="per-modal" tabindex="-1" role="dialog" aria-labelledby="per-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 onClick="" class="block-title">Assign Permission to Role</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="perForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">
                                <input type="hidden" name="r_id" id="r_id">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="role_id">Subcategory</label>
                                            <select class="js-select2 form-select" id="role_id" name="role_id" style="width: 100%;" data-placeholder="Choose one..">
                                                <option>Choose one..</option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultAll" name="flexCheckDefaultAll">
                                                    <label class="form-check-label" for="flexCheckDefaultAll">Permission All</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @foreach($permissions->take($permissions->count() / 2) as $permission)
                                                <div class="mb-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}" name="permission[]">
                                                        <label class="form-check-label" for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                @foreach($permissions->slice($permissions->count() / 2) as $permission)
                                                <div class="mb-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}" name="permission[]">
                                                        <label class="form-check-label" for="{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-saveP" class="btn btn-sm btn-primary">Save changes</button>
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

        $('#per-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.per') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'role_name', name: 'role_name' },
                { data: 'permission_names', name: 'permission_names' },
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
        $('#role-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.role') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === 'Active') {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>';
                    } else {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>';
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
                }

            ]

        });
    });
    function addR(){
        $('#roleForm').trigger("reset");
        $('#btn-saveR').html("Create");
        $('#role-modal').modal('show');
        $('#idR').val('');
        $('#name_errorR').hide();
        $('#error-message').hide();

    }
    $('#roleForm').submit(function (e) {
            e.preventDefault();
            var nameValue = $('#name').val();
            if (nameValue.trim() === '') {
                $('#name_errorR').show();
                return;
            }
            $('#name_errorR').hide();
            var formData = new FormData(this);
            $.ajax({
        type: 'POST',
        url: "{{ url('role/store')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#role-modal").modal('hide');
            var oTable = $('#role-table').dataTable();
            oTable.fnDraw(false);
            $("#btn-saveR").html('Submit');
            $("#btn-saveR").attr("disabled", false);
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                var errorMessage = JSON.parse(xhr.responseText).error;
                console.error(errorMessage);
                $("#error-message").text(errorMessage).show();
            } else {
                console.error('An error occurred while creating the role.');
            }
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
                url: "{{ url('role/delete') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    var oTableR = $('#role-table').dataTable();
                    oTableR.fnDraw(false);
                    var oTableP = $('#per-table').dataTable();
                    oTableP.fnDraw(false);
                }
            });
        }
    });
}


    function editFunc(id){
        $('#name_errorR').hide();
        $('#error-message').hide();
        $.ajax({
            type:"POST",
            url: "{{ url('role/edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#btn-saveR').html("Save changes");
                $('#role-modal').modal('show');
                $('#idR').val(res.id);
                $('#name').val(res.name);
            if (res.status === 'Active') {
                $('#statusActive').prop('checked', true);
            } else if (res.status === 'Inactive') {
                $('#statusInactive').prop('checked', true);
            }
            }
        });
    }
    $('#flexCheckDefaultAll').click(function(){
		if ($(this).is(':checked')) {
			$('input[type = checkbox]').prop('checked',true);
		}else{
			$('input[type = checkbox]').prop('checked',false);
		}
	});

    //per

    $('#perForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
        type: 'POST',
        url: "{{ url('per/store')}}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#per-modal").modal('hide');
            var oTable = $('#per-table').dataTable();
            oTable.fnDraw(false);
            $("#btn-saveP").html('Submit');
            $("#btn-saveP").attr("disabled", false);
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                var errorMessage = JSON.parse(xhr.responseText).error;
                console.error(errorMessage);
                $("#error-message").text(errorMessage).show();
            } else {
                console.error('An error occurred while creating the role.');
            }
        }
    });
});

function addP(){
        $('#perForm').trigger("reset");
        $('#btn-saveP').html("Create");
    }
function editFuncP(id){
    $('#perForm').trigger("reset");
        $.ajax({
            type:"POST",
            url: "{{ url('per/edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#btn-saveP').html("Save changes");
                $('#per-modal').modal('show');
                $('#role_id').val(res.role.id);
            }
        });
    }
    </script>

@endsection
