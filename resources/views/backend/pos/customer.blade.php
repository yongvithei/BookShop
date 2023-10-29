@extends('backend.pos.index')
@section('pos')
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
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
     <!-- Page Content -->
     <div class="content">

     <!-- Dynamic Table Full -->
     <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Customer</h3>
                    <div class="block-options">
                        <a type="button" class="btn btn-sm btn-alt-primary">Refresh</a>
                        <a onClick="add()" href="javascript:void(0)" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">ADD</a>

                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table id="item-table" class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">ID</th>
                            <th style="width: 20%;">Photo</th>
                            <th style="width: 20%;">Customer Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 25%;">Contact</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                            <th class="text-center" style="width: 15%;">Action</th>
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
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->

           <!-- Normal Block Modal -->
           <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Customer Info</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="hiphoto" id="hiphoto">
                                <div class="block-content row justify-content-center">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="name">Name *</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Customer Name">
                                            <span id="name_error" class="text-danger" style="display: none;">Field is required.</span>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Customer Address">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="contact">Contact Info</label>
                                            <textarea class="form-control" id="contact" name="contact" rows="1" placeholder="Contact Info"></textarea>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg">
                                                <label for="image" class="form-label">Choose Image</label>
                                                <input class="form-control" type="file" name="image" id="image">
                                            </div>
                                            <div class="col-lg-4">
                                                <img class="img-avatar" id="preview-image" src="{{asset('storage/images/default.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="note">Note</label>
                                            <textarea class="form-control" id="note" name="note" rows="3" placeholder="Note"></textarea>
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
            ajax: '{{ route('all.customer') }}',
            columns: [
                { data: 'id', name: 'id' },
            {
                data: 'photo',
                name: 'photo',
                render: function (data, type, full, meta) {
                if (type === 'display' && data) {
                    // Construct the full URL to the avatar image
                    var avatarUrl = '/storage/customer/' + data;
                    return '<img src="' + avatarUrl + '" alt="Avatar" class="img-avatar" />';
                } else {
                    var defaultAvatarUrl = '{{ asset('storage/customer/default.jpg') }}';
                    return '<img src="' + defaultAvatarUrl + '" alt="photo" class="img-avatar"  />';
                }
            }
            },
            { data: 'name', name: 'name' },
            { data: 'contact', name: 'contact' },
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
            targets: [0, 1,4,5],
            className: 'text-center',
        },
    ]


        });
    });
    function add() {
        $('#ItemForm')[0].reset();
        $('#preview-image').attr('src', '{{ asset('storage/images/default.jpg') }}');
        $('#btn-save').html("Create");
        $('#item-modal').modal('show');
        $('#id').val('');
        $('#name_error').hide();
    }
        $('#ItemForm').submit(function (e) {
            e.preventDefault();
            var nameVal = $('#name').val();
            if (nameVal.trim() === '') {
                $('#name_error').show();
                return;
            }
            $('#name_error').hide();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('cus/store')}}",
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
                        url: "{{ url('cus/delete') }}",
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
            $('#ItemForm')[0].reset();
            $.ajax({
                type: "POST",
                url: "{{ url('cus/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-save').html("Save changes");
                    $('#item-modal').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#contact').val(res.contact);
                    $('#address').val(res.address);
                    $('#note').val(res.note);
                    $('#hiphoto').val(res.photo);
                    if (res.photo === null) {
                        $('#preview-image').attr('src', '{{ asset('storage/images/default.jpg') }}');
                    } else {
                        $('#preview-image').attr('src', '{{ asset('storage/customer') }}/' + res.photo);
                    }
                    if (res.status === 'Active') {
                        $('#statusActive').prop('checked', true);
                    } else if (res.status === 'Inactive') {
                        $('#statusInactive').prop('checked', true);
                    }
                }
            });
        }


        function preview() {
        $('#image').change(function () {
            var file = this.files[0];
            if (file) {
                var allowedExtensions = ['svg','jpg', 'jpeg', 'png', 'gif'];
                var fileExtension = file.name.split('.').pop().toLowerCase();
                if (allowedExtensions.indexOf(fileExtension) === -1) {
                    $('#image').val(''); // Clear the file input
                    $('#preview-image').attr('src', ''); // Clear the image source
                    alert('Please select a valid image file (svg, jpg, jpeg, png, gif).');
                } else {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            } else {
                $('#preview-image').attr('src', '');
            }
        });
    }
    preview();
    </script>
@endsection
