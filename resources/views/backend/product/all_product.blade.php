@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
    <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
        .img-product {
            display: inline-block !important;
            width: 70px;
            height: 104px;
            /* border-radius: 10%; */
        }
        .img-view {
            display: inline-block !important;
            width: 250px;
            height: 364px;
            /* border-radius: 10%; */
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
                                <a class="link-fx" href="javascript:void(0)">{{ __('crud_p.tables') }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                {{ __('crud_p.datatables') }}
                            </li>
                        </ol>
                    </nav>

                </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">


            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @if(Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            <!-- Dynamic Table with Export Buttons -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{ __('crud_p.all_products') }}</h3>
                        <div class="block-options">
                            <a type="button" class="btn btn-sm btn-alt-primary">{{ __('crud_p.refresh') }}</a>
                            <a href="{{ route('pro.create') }}" type="button" class="btn btn-sm btn-alt-primary">{{ __('crud_p.add') }}</a>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        <table id="item-table" class="table table-bordered table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 30px;">{{ __('crud_p.id') }}</th>
                                <th class="text-center" style="width: 100px;">{{ __('crud_p.thumbnail') }}</th>
                                <th>{{ __('crud_p.product_name') }}</th>
                                <th style="width: 19%;">{{ __('crud_p.selling_price') }}</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">{{ __('crud_p.status') }}</th>
                                <th style="width: 15%;">{{ __('crud_p.action') }}</th>
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
            <!-- END Dynamic Table with Export Buttons -->
        </div>



         <!-- Tabs in Modal -->
         <div class="modal fade" id="modal-block-tabs" tabindex="-1" role="dialog" aria-labelledby="modal-block-tabs" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">

                  <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                      <li class="nav-item">
                          <button type="button" class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home" aria-selected="true">
                              {{ __('crud_p.info') }}
                          </button>
                      </li>
                      <li class="nav-item">
                          <button type="button" class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile" aria-selected="false">
                              {{ __('crud_p.media') }}
                          </button>
                      </li>

                      <li class="nav-item ms-auto">
                      <button type="button" class="nav-link" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                        <span class="visually-hidden">Settings</span>
                      </button>
                    </li>

                  </ul>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="btabs-static-home" role="tabpanel" aria-labelledby="btabs-static-home-tab" tabindex="0">
                            <h3 class="text-center">{{ __('crud_p.product_information') }}</h3>
                            <div class="mb-2">
                                <div class="input-group">
                <span class="input-group-text">
                    {{ __('crud_p.name') }}
                </span>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('crud_p.name') }}" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                <span class="input-group-text">
                    {{ __('crud_p.price') }}
                </span>
                                    <input type="text" class="form-control" id="pro_price" name="pro_price" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                <span class="input-group-text">
                    {{ __('crud_p.discount_price') }}
                </span>
                                    <input type="text" class="form-control" id="pro_discount" name="pro_discount" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        {{ __('crud_p.category') }}
                                    </span>
                                    <input type="text" class="form-control" id="cate_names" name="cate_names" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        {{ __('crud_p.subcategory') }}
                                    </span>
                                    <input type="text" class="form-control" id="sub_names" name="sub_names" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        {{ __('crud_p.partner') }}
                                    </span>
                                    <input type="text" class="form-control" id="partner_name" name="partner_name" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        {{ __('crud_p.code') }}
                                    </span>
                                    <input type="text" class="form-control" id="product_code" name="product_code" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        {{ __('crud_p.quantity') }}
                                    </span>
                                    <input type="text" class="form-control" id="pro_qty" name="pro_qty" readonly>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                <span class="input-group-text">
                                    {{ __('crud_p.status') }}
                                </span>
                                    <input type="text" class="form-control" id="pro_status" name="pro_status" readonly>
                                </div>
                            </div>

                </div>
                        <div class="tab-pane" id="btabs-static-profile" role="tabpanel" aria-labelledby="btabs-static-profile-tab" tabindex="0">
                            <h4 class="fw-normal">{{ __('crud_p.thumbnail') }}</h4>
                            <div class="col-md-10 col-lg-8">
                                <div class="row justify-content-center mt-4 mb-4">
                                    <div class="col-lg-4">
                                        <img class="img-view" id="preview-image" src="{{ asset('storage/images/default.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                  </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                data-bs-dismiss="modal">{{ __('crud_p.view_details') }}</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">{{ __('crud_p.close') }}</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Tabs in Modal -->
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


    <!-- Page JS Code -->
    <script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>
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
            ajax: '{{ route('pro.index') }}',
            columns: [
                { data: 'id', name: 'id' },
                {
        data: 'thumbnail',
        name: 'thumbnail',
        render: function (data, type, full, meta) {
                if (type === 'display' && data) {
                    return '<img src="'+"/"+ data + '" alt="" class="img-product" />';
                } else {
                    var defaultAvatarUrl = '{{ asset('/storage/images/default_product_table.webp') }}';
                    return '<img src="' + defaultAvatarUrl + '" class="img-product" alt=""/>';
                }
            }
            },
            { data: 'name', name: 'name' },
            {
                data: 'selling_price',
                name: 'selling_price',
                render: function (data) {
                    var formattedPrice = '<strong>' + parseFloat(data).toFixed(2) + ' ៛</strong>';
                    return formattedPrice;
                }
            },


                {
                data: '_status',
                name: '_status',
                render: function (data) {
                    if (data === 1) {
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
            targets: [0, 1, 3,4,5],
            className: 'text-center',
        },
    ]


        });
    });

    function editFunc(productId) {
    // Construct the edit URL using the productId and the route function
    var editUrl = '{{ route('pro.edit', ':productId') }}'.replace(':productId', productId);

    // Redirect to the edit page
    window.location.href = editUrl;
}

    function deleteFunc(id) {
        Swal.fire({
            title: '{{ __('crud_p.delete_record') }}',
            text: '{{ __('crud_p.record_id') }}: ' + id + '{{ __('crud_p.wont_revoke') }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __('crud_p.yes_delete') }}',
            cancelButtonText: '{{ __('crud_p.cancel') }}'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('product/delete') }}",
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


    function viewFunc(id) {

        $('#preview-image').attr('src', '{{ asset('/storage/images/default_product_table.webp') }}');
            $.ajax({
                type: "POST",
                url: "{{ url('pro/view') }}",
                data: { id: id },
                dataType: 'json',
                success: function (res) {
                    $('#btn-save').html("Save changes");
                    $('#modal-block-tabs').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                    $('#pro_price').val(res.pro_price );
                    $('#pro_discount').val(res.pro_discount);
                    $('#product_code').val(res.product_code);
                    $('#pro_qty').val(res.pro_qty);
                    $('#sub_names').val(res.sub_names);
                    $('#cate_names').val(res.cate_names);
                    $('#partner_name').val(res.partner_name);
                    $('#_status').val(res._status);
                    $('#thumbnail').val(res.thumbnail);
                    if (res.thumbnail) {
            // Set the src attribute with the correct URL
            $('#preview-image').attr('src', '{{ asset('') }}' + res.thumbnail);
        } else {
            // Set a default image URL
            $('#preview-image').attr('src', '{{ asset('/storage/images/default_product_table.webp') }}');
        }
                    if (res._status === 1) {
                        $('#pro_status').val('{{ __('crud_p.public') }}');
                    } else {
                        $('#pro_status').val('{{ __('crud_p.private') }}');
                    }
                }
            });
        }
    </script>

@endsection
