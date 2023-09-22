@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
        .img-view {
            display: inline-block !important;
            width: 430px;
            height: 204px;
            /* border-radius: 10%; */
        }
    </style>
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
                                        <table id="slider-table" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 80px;">ID</th>
                                                <th>Name Slider</th>
                                                <th class="d-none d-sm-table-cell" style="width: 30%;">Image</th>
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
                                        <div class="py-4 mb-0 justify-content-end">
                                            <div class="col-md-1 col-xl-2">
                                                <a onClick="add_sli()" type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">ADD</a>
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
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="item-modal" aria-hidden="true">
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
                            <form id="SliForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">
                                <input type="hidden" name="id" id="id">    
                                <input type="hidden" name="image_hidden" id="image_hidden">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="name">Slider Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Slider Name">
                                            <span id="name_error" class="text-danger" style="display: none;">Name is required.</span>
                                        </div>

                                        <div class="mb-2">
                                            <label class="form-label">Preview Image</label>
                                            <div class="mb-4">
                                            <img class="img-view" id="preview-image" src="{{asset('storage/images/default.jpg')}}" alt="">
                                            </div>
                                            <div class="mb-4">
                                                <label for="image" class="form-label">Choose For Slider</label>
                                                <input class="form-control" type="file" name="image" id="image">
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

                                </div>


                           
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-saveS" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Normal Block Modal -->
            <!-- modal-coupon -->
            <div class="modal" id="modal-coupon" tabindex="-1" role="dialog" aria-labelledby="modal-coupon" aria-hidden="true">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
//slider script
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#slider-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.slider') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
            {
                data: 'image',
            name: 'image',
                render: function (data, type, full, meta) {
                    if (type === 'display' && data) {
                        var Url = '/storage/sliders/' + data;
                        return '<img src="' + Url + '" alt="" class="img-avatar" />';
                    } else {
                        
                        var defaultUrl = '{{ asset('storage/sliders/default.jpg') }}';
                        return '<img src="' + defaultUrl + '" class="img-avatar img-avatar48"  />';
                    }
                }
                        },
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
                    targets: [0,2, 3,4],
                    className: 'text-center',
                },
            ]
        });
    });   
        function add_sli() {
            $('#SliForm')[0].reset();
            $('#img_previewS').attr('src', '{{ asset('storage/sliders/default.jpg') }}');
            $('#btn-saveS').html("Create");
            $('#item-modal').modal('show');
            $('#id').val('');
            $('#name_error').hide();
        }
        $('#SliForm').submit(function (e) {
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
                url: "{{ url('sli/store')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#item-modal").modal('hide');
                    var oTable = $('#slider-table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-saveS").html('Submit');
                    $("#btn-saveS").attr("disabled", false);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
        function deleteFuncS(id) {
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
                        url: "{{ url('sli/delete') }}",
                        data: { id: id },
                        dataType: 'json',
                        success: function (res) {
                            var oTable = $('#slider-table').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        }


        function editFuncS(id) {
        $('#SliForm')[0].reset();
        $('#preview-image').attr('src', '{{ asset('storage/sliders/default.jpg') }}');
            $.ajax({
                type: "POST",
                url: "{{ url('sli/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-saveS').html("Save changes");
                    $('#item-modal').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#image_hidden').val(res.image);
                    // Set the src attribute of the preview image with the user's avatar URL
                    $('#preview-image').attr('src', '{{ asset('storage/sliders') }}/' + res.image);
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
//promo_code script


    </script>

@endsection
