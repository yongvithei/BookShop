@extends('admin.index')
@section('admin')
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <a class="link-fx" href="javascript:void(0)">User</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            All
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
                    <h3 class="block-title">List User</h3>
                    <div class="block-options">
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
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Last Seen</th>
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
                                <h3 class="block-title">User Information</h3>
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
                                            <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        </div>
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
                                    <div class="mb-2">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-envelope"></i>
                                                </span>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="provider">Login via</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fab fa-google"></i>
                                                </span>
                                            <input type="text" class="form-control" id="provider" name="provider">
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="verified">Verified at</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-envelope-open"></i>
                                                </span>
                                            <input type="text" class="form-control" id="verified" name="verified">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="create">Create at</label>
                                        <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                            <input type="text" class="form-control" id="create" name="create">
                                        </div>
                                    </div>
                                </div>
                            <div class="block-content block-content-full text-end bg-body">
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
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
                ajax: '{{ route('all.user') }}',
                 columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        {
    data: 'last_seen',
    name: 'last_seen',
    render: function (data, type, row) {
        var lastSeenTime = moment(data); // Assuming 'data' is a valid date

        // Calculate the difference in minutes
        var minutesSinceLastSeen = moment().diff(lastSeenTime, 'minutes');

        if (minutesSinceLastSeen < 1) {
            return '<span class="badge badge-pill bg-success">Active Now</span>';
        } else if (data !== null) {
            var diffForHumans = lastSeenTime.fromNow(); // Display time difference
            return '<span class="badge badge-pill bg-danger">' + diffForHumans + '</span>';
        }

        // Handle the case where neither is true (optional)
        return 'N/A';
    }
},

        { data: 'action', name: 'action', orderable: false },
  
                ],
                order: [[0, 'desc']],
                columnDefs: [
            {
                targets: [0, 3, 4],
                className: 'text-center',
            },
        ]
            });
        });
    function viewFunc(id) {
    $('#ItemForm').trigger("reset");
        $.ajax({
            type: "POST",
            url: "{{ url('user/view') }}",
            data: { id: id },
            dataType: 'json',
            success: function (res) {
                $('#item-modal').modal('show');
                $('#id').val(res.id);
                $('#name').val(res.name);
                $('#username').val(res.username);
                $('#email').val(res.email);
                $('#verified').val(res.email_verified_at);
                $('#create').val(res.created_at);

                // Check if the provider is null and set the value accordingly
                if (res.provider === null) {
                    $('#provider').val('Email');
                } else {
                    $('#provider').val('Google');
                }
            }
        });
    }

    </script>

@endsection
