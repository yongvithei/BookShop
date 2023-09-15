@extends('admin.index')
@section('admin')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                Categories
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
                    <h3 class="block-title">Categories</h3>
                    <div class="block-options">
                        <a class="btn btn-sm btn-alt-primary">Refresh</a>
                        <a onClick="add()"  href="javascript:void(0)" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">ADD</a>
                        
                    </div>
                </div>
                
                
                <div class="block-content block-content-full ">
                    <div class="table-responsive-sm">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table id="item-table" class="table table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">ID</th>
                                    <th>Name</th>
                                    <th class="d-sm-table-cell" style="width: 30%;">Description</th>
                                    <th class="d-sm-table-cell" style="width: 15%;">Status</th>
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
            </div>
            <!-- END Dynamic Table Full -->
            <!-- Normal Block Modal -->
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Category</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>              
                            <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="block-content row justify-content-center">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="example-text-input">Name *</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                                            <span id="name_error" class="text-danger" style="display: none;">Field is required.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="example-textarea-input">Description</label>
                                            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Description or Note"></textarea>
                                        </div>
                                        <div class="mb-3">
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
            ajax: '{{ route('all.category') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'desc', name: 'desc' },
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
    function add(){
        $('#ItemForm').trigger("reset");
        $('#btn-save').html("Create");
        $('#item-modal').modal('show');
        $('#id').val('');
        $('#name_error').hide();
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
            url: "{{ url('category/store')}}",
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
                url: "{{ url('category/delete') }}",
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


    function editFunc(id){
        $('#name_error').hide();
        $.ajax({
            type:"POST",
            url: "{{ url('category/edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#btn-save').html("Save changes");
                $('#item-modal').modal('show');
                $('#id').val(res.id);
                $('#name').val(res.name);
                $('#desc').val(res.desc);
            if (res.status === 'Active') {
                $('#statusActive').prop('checked', true);
            } else if (res.status === 'Inactive') {
                $('#statusInactive').prop('checked', true);
            }
            }
        });
    }  
    </script>
    
@endsection
