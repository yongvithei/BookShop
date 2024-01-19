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
        .img-partner {
            width: 104px;
            height: auto;

        }
        .img-pre {
            width: 125px;
            height: 60px;

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
                            <a class="link-fx" href="javascript:void(0)">
                                {{ __('part_s.business_partners') }}
                            </a>
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
                    <h3 class="block-title">{{ __('part_s.partner') }}</h3>
                    <div class="block-options">
                        <a onClick="add()" type="button" class="btn btn-sm btn-alt-primary" data-bs-toggle="modal" data-bs-target="#item-modal">{{ __('part_s.add') }}</a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table id="item-table" class="table table-bordered table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">{{ __('part_s.id') }}</th>
                            <th class="text-center" style="width: 100px;">{{ __('part_s.image') }}</th>
                            <th>{{ __('part_s.partner_name') }}</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('part_s.status') }}</th>
                            <th style="width: 15%;">{{ __('part_s.action') }}</th>
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
            <!-- Normal Block Modal -->
            <div class="modal" id="item-modal" tabindex="-1" role="dialog" aria-labelledby="item-modal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ __('part_s.partner_information') }}</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <input type="hidden" name="avatar_hidden" id="avatar_hidden">
                                    <div class="block-content row justify-content-center">

                                        <div class="col-lg-12 col-xl-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="name">{{ __('part_s.name') }}</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('part_s.category_name') }}">
                                                <span id="name_error" class="text-danger" style="display: none;">{{ __('part_s.field_required') }}</span>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="phone">{{ __('part_s.contact') }}</label>
                                                <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="far fa-address-book"></i>
                                            </span>
                                                    <input type="text" class="form-control" id="phone" name="phone">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="address">{{ __('part_s.address') }}</label>
                                                <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="far fa-map"></i>
                                            </span>
                                                    <input type="text" class="form-control" id="address" name="address">
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-lg">
                                                    <label for="one-profile-edit-avatar" class="form-label">{{ __('part_s.choose_image') }}</label>
                                                    <input class="form-control" type="file" name="avatar" id="avatar">
                                                </div>
                                                <div class="col-lg-4 mt-2">
                                                    <img class="img-pre" id="preview-image" src="{{ asset('storage/images/default.jpg') }}" alt="">
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="desc">{{ __('part_s.description') }}</label>
                                                <textarea class="form-control" id="desc" name="desc" rows="2" placeholder="{{ __('part_s.description_placeholder') }}"></textarea>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label">{{ __('part_s.status') }}</label>
                                                <div class="space-x-2">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="statusActive" name="status" value="Active" checked="">
                                                        <label class="form-check-label" for="statusActive">{{ __('part_s.active') }}</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" id="statusInactive" name="status" value="Inactive">
                                                        <label class="form-check-label" for="statusInactive">{{ __('part_s.inactive') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">{{ __('part_s.close') }}</button>
                                    <button type="submit" id="btn-save" class="btn btn-sm btn-primary">{{ __('part_s.save_changes') }}</button>
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
            ajax: '{{ route('all.partner') }}',
            columns: [
                { data: 'id', name: 'id' },
            {
                data: 'avatar',
    name: 'avatar',
    render: function (data, type, full, meta) {
        if (type === 'display' && data) {
            // Construct the full URL to the avatar image
            var avatarUrl = '/storage/images/' + data;

            // Create an img element with the avatar URL as src
            return '<img src="' + avatarUrl + '" alt="Avatar" class="img-partner" />';
        } else {
            // Return the default image URL when data is null
            var defaultAvatarUrl = '{{ asset('storage/images/default.jpg') }}';
            return '<img src="' + defaultAvatarUrl + '" class="img-avatar img-avatar48"  />';
        }
    }
            },
            { data: 'name', name: 'name' },
                {
                data: 'status',
                name: 'status',
                render: function (data) {
                    if (data === 'Active') {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">{{ __('crud.active') }}</span>';
                    } else {
                        return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">{{ __('crud.inactive') }}</span>';
                    }
                }
            },
                { data: 'action', name: 'action', orderable: false },
            ],
            order: [[0, 'desc']],
            columnDefs: [
        {
            targets: [0, 1, 3,4],
            className: 'text-center',
        },
    ]


        });
    });
    function add() {
        $('#ItemForm')[0].reset();
        $('#preview-image').attr('src', '{{ asset('storage/images/default.jpg') }}');
        $('#btn-save').html("{{ __('crud.create') }}");
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
                url: "{{ url('par/store')}}",
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
                    var oTable = $('#item-table').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
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
        function deleteFunc(id) {
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
                        url: "{{ url('par/delete') }}",
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
        $('#preview-image').attr('src', '{{ asset('storage/images/default.jpg') }}');
            $.ajax({
                type: "POST",
                url: "{{ url('par/edit') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-save').html("{{ __('part_s.save_changes') }}");
                    $('#item-modal').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#phone').val(res.phone);
                    $('#address').val(res.address);
                    $('#desc').val(res.desc);
                    $('#avatar_hidden').val(res.avatar);

                    // Set the src attribute of the preview image with the user's avatar URL
                    $('#preview-image').attr('src', '{{ asset('storage/images') }}/' + res.avatar);

                    if (res.status === 'Active') {
                        $('#statusActive').prop('checked', true);
                    } else if (res.status === 'Inactive') {
                        $('#statusInactive').prop('checked', true);
                    }
                }
            });
        }

        function preview() {
        $('#avatar').change(function () {
            var file = this.files[0];
            if (file) {
                var allowedExtensions = ['svg','jpg', 'jpeg', 'png', 'gif'];
                var fileExtension = file.name.split('.').pop().toLowerCase();
                if (allowedExtensions.indexOf(fileExtension) === -1) {
                    $('#avatar').val(''); // Clear the file input
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
