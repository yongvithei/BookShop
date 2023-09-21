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
                                <a class="link-fx" href="javascript:void(0)">Tables</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                DataTables
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
                    <h3 class="block-title">All Product</h3>
                    <div class="block-options">
                        <a type="button" class="btn btn-sm btn-alt-primary">Refresh</a>
                        <a href="{{ route('pro.create') }}" type="button" class="btn btn-sm btn-alt-primary">ADD</a>


                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table id="item-table" class="table table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 30px;">ID</th>
                            <th class="text-center" style="width: 100px;">Thumbnail</th>
                            <th>Product Name</th>
                            <th style="width: 19%;" >Selling Price</th>
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
                      <button type="button" class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home" aria-selected="true">INFO</button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile" aria-selected="false">Media</button>
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
                    <h3 class="text-center"> Product Information </h3>
                    <div class="m-2">

                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="fw-semibold">Name:</h6>
                        </div>
                        <div class="col-md-1">
                            <h6 id="name" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="fw-semibold">Price:</h6>
                        </div>
                        <div class="col-md-1">
                            <h6 id="pro_price" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="fw-semibold">Discount Price:</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 id="pro_discount" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold">Category:</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 id="cate_names" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold">Subcategory:</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 id="sub_names" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="fw-semibold">Partner:</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 id="partner_name" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row text-center">
                        <div class="col-md-1">
                            <h6 class="fw-semibold">Code:</h6>
                        </div>
                        <div class="col-md-4">
                            <h6 id="product_code" class="fw-normal"></h6>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="fw-semibold">QTY:</h6>
                        </div>
                        <div class="col-md-6">
                            <h6 id="pro_qty" class="fw-normal"></h6>
                        </div>
                    </div>
                     <div class="mb-3">
                                        <label class="form-label fw-semibold">Status</label>
                                            <div class="space-x-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="public" name="status" value="Public" checked="">
                                                    <label class="form-check-label" for="public">Public</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="private" name="status" value="private">
                                                    <label class="form-check-label" for="private">Private</label>
                                                </div>
                                            </div>
                                    </div>
                    <div class="mb-2">
                        </div>                                    
                    </div>
                </div>
                    <div class="tab-pane" id="btabs-static-profile" role="tabpanel" aria-labelledby="btabs-static-profile-tab" tabindex="0">
                      <h4 class="fw-normal">Thumbnail</h4>
                      <div class="col-md-10 col-lg-8">
                            <div class="row justify-content-center mt-4 mb-4">
                                <div class="col-lg-4">
                                    <img class="img-view" id="preview-image" src="{{asset('storage/images/default.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Click <i class="fa fa-fw fa-pencil-alt"></i> For More Details</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Okay</button>
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
      <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
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
            title: 'Delete Record?',
            text: 'Record ID: ' + id + '\nYou won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
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
                    $('#name').text(res.name);
                    $('#pro_price').text('៛' + res.pro_price );
                    $('#pro_discount').text('៛' +res.pro_discount);
                    $('#product_code').text(res.product_code);
                    $('#pro_qty').text(res.pro_qty);
                    $('#sub_names').text(res.sub_names);
                    $('#cate_names').text(res.cate_names);
                    $('#partner_name').text(res.partner_name);
                    $('#_status').val(res._status);
                    $('#thumbnail').val(res.thumbnail);
                    if (res.thumbnail) {
            // Set the src attribute with the correct URL
            $('#preview-image').attr('src', '{{ asset('') }}' + res.thumbnail);
        } else {
            // Set a default image URL
            $('#preview-image').attr('src', '{{ asset('/storage/images/default_product_table.webp') }}');
        }                    if (res._status === '1') {
                        $('#public').prop('checked', true);
                    } else if (res._status === '0') {
                        $('#private').prop('checked', true);
                    }
                }
            });
        }
    </script>

@endsection
