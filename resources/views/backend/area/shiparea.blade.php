@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css' )}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/select2/css/select2.min.css' )}}">

    <!-- Stylesheets -->
    <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
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
                            <a class="link-fx" href="javascript:void(0)">{{__('crud.sipping_area')}}</a>
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
                                <button class="nav-link active" id="btabswo-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-home" role="tab" aria-controls="btabswo-static-home" aria-selected="true">{{__('crud.city')}}</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="btabswo-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabswo-static-profile" role="tab" aria-controls="btabswo-static-profile" aria-selected="false">{{__('crud.place')}}</button>
                            </li>
                            <li class="nav-item ms-auto">
                                <div class="block-options ps-3 pe-2">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button id="refreshC" type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </li>
                        </ul>
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="btabswo-static-home" role="tabpanel" aria-labelledby="btabswo-static-home-tab" tabindex="0">
                                <!-- Dynamic Table Full -->
                                <div class="block block-rounded">

                                    <div class="tab-pane">


                                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                        <table id="city-table" class="table table-bordered table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width: 80px;">{{__('crud.id')}}</th>
                                                <th>{{__('crud.city')}}</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{__('crud.status')}}</th>
                                                <th style="width: 15%;">{{__('crud.action')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr><tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr>
                                            </tbody>
                                        </table>
                                        <div class="py-4 mb-0 justify-content-end">
                                            <div class="col-md-1 col-xl-2">
                                                <a onClick="add_city()" type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">{{ __('crud.add') }}</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END Dynamic Table Full -->
                            </div>
                            <div class="tab-pane" id="btabswo-static-profile" role="tabpanel" aria-labelledby="btabswo-static-profile-tab" tabindex="0">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                <table id="dist-table" class="table table-bordered table-vcenter">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">{{__('crud.id')}}</th>
                                        <th>{{__('crud.name')}}</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">{{__('crud.city')}}</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">{{__('crud.status')}}</th>
                                        <th style="width: 15%;">{{__('crud.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr><td class="fs-sm"><div class="pl-loading"></div></td><td class="fw-semibold fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell fs-sm"><div class="pl-loading"></div></td><td class="d-sm-table-cell"><div class="pl-loading"></div></td><td class="text-center"><div class="pl-loading"></div></td></tr>
                                    </tbody>
                                </table>
                                <div class="py-4 mb-0 justify-content-end">
                                    <div class="col-md-1 col-xl-2">
                                        <a onClick="add_dist()" type="button" class="btn w-100 btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-dist">{{ __('crud.add') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Block Tabs With Options Default Style -->
                </div>
            </div>

            <!-- City Modal -->
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="item-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ __('crud.city_info') }}</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="CityForm" action="" method="POST" enctype="multipart/form-data"
                                onsubmit="return false;">
                                <div class="block-content row justify-content-center">
                                    <input type="hidden" name="id" id="id">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-2">
                                            <label class="form-label" for="name">{{ __('crud.name') }}</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('crud.name') }}">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="name_kh">{{ __('crud.khmer_placeholder') }}</label>
                                            <input type="text" class="form-control" id="name_kh" name="name_kh" placeholder="{{ __('crud.khmer_placeholder') }}">
                                            <span id="name_kh_error" class="text-danger" style="display: none;">{{ __('crud.name_required') }}</span>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label">{{ __('crud.status') }}</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusActive" name="status" value="1" checked="">
                                                    <label class="form-check-label" for="statusActive">{{ __('crud.status_active') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statusInactive" name="status" value="0">
                                                    <label class="form-check-label" for="statusInactive">{{ __('crud.status_inactive') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">{{ __('crud.close') }}</button>
                                    <button type="submit" id="btn-saveS" class="btn btn-sm btn-primary">{{ __('crud.save_changes') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Normal Block Modal -->
            <!-- modal-dist -->
            <div class="modal" id="modal-dist" tabindex="-1" role="dialog" aria-labelledby="modal-dist" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ __('crud.info') }}</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="DistForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <div class="block-content row justify-content-center">
                                    <input type="hidden" name="idC" id="idC">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="nameD">{{ __('crud.name') }}</label>
                                            <input type="text" class="form-control" id="nameD" name="nameD" placeholder="{{ __('crud.name_placeholder') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="nameDKH">{{ __('crud.name_placeholder') }}</label>
                                            <input type="text" class="form-control" id="nameDKH" name="nameDKH" placeholder="{{ __('crud.name_placeholder') }}">
                                            <span id="name_errorCKH" class="text-danger" style="display: none;">{{ __('crud.name_required') }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="city_id">{{ __('crud.city') }}</label>
                                            <select class="js-select2 form-select" id="city_id" name="city_id" style="width: 100%;" data-container="#modal-dist" data-placeholder="{{ __('crud.select_city') }}">
                                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }} {{ $city->ci_kh }}</option>
                                                @endforeach
                                            </select>
                                            <span id="cat_error" class="text-danger" style="display: none;">{{ __('crud.select_city') }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('crud.status') }}</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="staCActive" name="statusD" value="1" checked="">
                                                    <label class="form-check-label" for="staCActive">{{ __('crud.active') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="statCInactive" name="statusD" value="0">
                                                    <label class="form-check-label" for="statCInactive">{{ __('crud.inactive') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">{{ __('crud.close') }}</button>
                                    <button type="submit" id="btn-saveC" class="btn btn-sm btn-primary">{{ __('crud.save_changes') }}</button>
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

    <script src="{{ asset('admin/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>

    <!-- Page JS Helpers (Select2 + Bootstrap Maxlength + CKEditor plugins) -->
    <script>One.helpersOnLoad(['jq-select2']);</script>
    <!-- switch -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
//City script
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Add change event listener to #cat_id select element
        $('#city_id').on('change', function() {
            // Check if an option is selected
            if ($(this).val() !== '') {
                // If an option is selected, hide #cat_error
                $('#cat_error').hide();
            } else {
                // If no option is selected, show #cat_error
                $('#cat_error').show();
            }
        });
        $('#refreshC').on('click', function () {
           window.location.reload();
        });
        let cityTable = $('#city-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.city') }}',
            columns: [
                {data: 'id', name: 'id'},
                {
                    data: null,
                    name: 'ci_kh',
                    render: function (data, type, full, meta) {
                        // Check for null values and concatenate if both are non-null
                        let result = '';
                        if (full.name !== null) {
                            result += full.name;
                        }
                        if (full.name !== null && full.ci_kh !== null) {
                            result += '<br>';
                        }
                        if (full.ci_kh !== null) {
                            result += full.ci_kh;
                        }
                        return result;
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function (data) {
                        if (data === 1) {
                            return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">{{ __('crud.active') }}</span>';
                        } else {
                            return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">{{ __('crud.inactive') }}</span>';
                        }
                    }
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false
                },],
            order: [
                [0, 'desc']
            ],
            columnDefs: [
                {
                    targets: [0, 2, 3],
                    className: 'text-center',
                },
            ]
        });

        $('#CityForm').submit(function (e) {
            e.preventDefault();
            var nameVal = $('#name').val().trim();
            var nameKhVal = $('#name_kh').val().trim();
            if (nameVal === '' && nameKhVal === '') {
                $('#name_kh_error').show();
                return;
            }
            $('#name_kh_error').hide();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('city/store')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#item-modal").modal('hide');
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });
                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    });
                    var oTable = $('#city-table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-saveS").html('Submit');
                    $("#btn-saveS").attr("disabled", false);
                },
                error: function (error) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });
                    Toast.fire({
                        icon: 'error',
                        title: error.responseJSON.message
                    });
                }
            });
        });
    //dist
        $('#dist-table').DataTable({
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            autoWidth: false,
            serverSide: true,
            processing: false,
            ajax: '{{ route('all.dist') }}',
            columns: [
                { data: 'id', name: 'id' },
                {
                    data: null,
                    name: 'name',
                    render: function (data, type, full, meta) {
                        // Check for null values and concatenate if both are non-null
                        let result = '';
                        if (full.name !== null) {
                            result += full.name;
                        }
                        if (full.name !== null && full.dis_kh !== null) {
                            result += '<br>';
                        }
                        if (full.dis_kh !== null) {
                            result += full.dis_kh;
                        }
                        return result;
                    }
                },
                {
                    data: null,
                    name: 'city_name',
                    render: function (data, type, full, meta) {
                        // Check for null values and concatenate if both are non-null
                        let result = '';
                        if (full.city_name !== null) {
                            result += full.city_name;
                        }
                        if (full.city_name !== null && full.ci_kh !== null) {
                            result += '<br> ';
                        }
                        if (full.ci_kh !== null) {
                            result += full.ci_kh;
                        }
                        return result;
                    }
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function (data) {
                        if (data === 1) {
                            return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">{{ __('crud.active') }}</span>';
                        } else {
                            return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">{{ __('crud.inactive') }}</span>';
                        }
                    }
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }, ],
                order: [
                        [0, 'desc']
                    ],
                    columnDefs: [{
                            targets: [0, 2, 3, 4],
                            className: 'text-center',
                        },
                ]
            });
        });
        function add_dist() {
            $('#DistForm')[0].reset();
            $('#btn-saveC').html("{{ __('crud.create') }}");
            $('#modal-dist').modal('show');
            $('#id').val('');
            $('#city_id').trigger('change');
            $('#name_errorC').hide();
            $('#cat_error').hide();
        }
        function add_city() {
                    $('#CityForm')[0].reset();
                    $('#btn-saveS').html("{{ __('crud.create') }}");
                    $('#item-modal').modal('show');
                    $('#id').val('');
                    $('#name_error').hide();
                }

        $('#DistForm').submit(function (e) {
            e.preventDefault();
            var nameVal = $('#nameD').val().trim();
            var nameKhVal = $('#nameDKH').val().trim();
            var cityVal = $('#city_id').val().trim();
            if (nameVal === '' && nameKhVal === '') {
                $('#name_errorCKH').show();
                return;
            }
            if (cityVal === '') {
                $('#cat_error').show();
                $('#name_errorCKH').hide();
                return;
            }

            $('#name_errorCKH').hide();
            $('#cat_error').hide();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ url('dist/store')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#modal-dist").modal('hide');
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });
                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    });
                    var oTable = $('#dist-table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-saveC").html('Submit');
                    $("#btn-saveC").attr("disabled", false);
                },
                error: function (error) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 6000
                    });
                    Toast.fire({
                        icon: 'error',
                        title: error.responseJSON.message
                    });
                }
            });
        });

        function deleteFuncD(id) {
            Swal.fire({
                title: '{{ __('crud.delete_record') }}',
                text: "{{ __('crud.wont_revoke') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __('crud.yes_delete') }}',
                cancelButtonText: '{{ __('crud.cancel') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('dist/delete') }}",
                        data: { id: id },
                        dataType: 'json',
                        success: function (res) {
                            var oTable = $('#dist-table').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        }
        function deleteFuncC(id) {
            Swal.fire({
                title: '{{ __('crud.delete_record') }}',
                text: "{{ __('crud.wont_revoke') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __('crud.yes_delete') }}',
                cancelButtonText: '{{ __('crud.cancel') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('city/delete') }}",
                        data: { id: id },
                        dataType: 'json',
                        success: function (res) {
                            var oTable = $('#city-table').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        }
        function editFuncC(id) {
            $('#name_error').hide();
            $('#CityForm')[0].reset();
            $.ajax({
                type: "POST",
                url: "{{ url('city/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-saveS').html("{{ __('crud.save_changes') }}");
                    $('#item-modal').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#name_kh').val(res.ci_kh);
                    if (res.status === 1) {
                        $('#statusActive').prop('checked', true);
                    } else if (res.status === 0) {
                        $('#statusInactive').prop('checked', true);
                    }
                }
            });
        }
        function editFuncD(id) {
        $('#name_errorC').hide();
        $('#cat_error').hide();
        $('#DistForm')[0].reset();
            $.ajax({
                type: "POST",
                url: "{{ url('dist/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-saveS').html("{{ __('crud.save_changes') }}");
                    $('#modal-dist').modal('show');
                    $('#idC').val(res.id);
                    $('#nameD').val(res.name);
                    $('#nameDKH').val(res.dis_kh);
                    $('#city_id').val(res.city_id);
                    $('#city_id').trigger('change');
                    if (res.status === 1) {
                        $('#staCActive').prop('checked', true);
                    } else if (res.status === 0) {
                        $('#statCInactive').prop('checked', true);
                    }
                }
            });
        }
    </script>

@endsection
