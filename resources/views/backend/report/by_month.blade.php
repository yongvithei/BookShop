@extends('admin.index')
@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
 <style>
        .pl-loading {
            min-height: 30px;
            background-color: #eee;
            border-radius: 10px;
        }
    </style>
  <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">

                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="javascript:void(0)">{{ __('part_s.tables') }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                {{ __('part_s.datatables') }}
                            </li>
                        </ol>
                    </nav>
                </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Responsive -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        {{ __('part_s.search_by_month') }}: {{ $month }} {{ $year }}
                        <div class="row">
                            <div class="block-content">
                                <form method="post" action="{{ route('search-by-month')}}">
                                    @csrf
                                    <div class="col-xl-12">
                                        <label class="form-label">{{ __('part_s.select_month') }}</label>
                                        <select name="month" id="month" class="form-select mb-2"
                                            aria-label="Default select example">
                                            <option value="January" {{ $month == "January" ? 'selected' : '' }}>{{ __('part_s.january') }} </option>
                                            <option value="February" {{ $month == "February" ? 'selected' : '' }}> {{ __('part_s.february') }}</option>
                                            <option value="March" {{ $month == "March" ? 'selected' : '' }}>{{ __('part_s.march') }} </option>
                                            <option value="April" {{ $month == "April" ? 'selected' : '' }}>{{ __('part_s.april') }} </option>
                                            <option value="May" {{ $month == "May" ? 'selected' : '' }}>{{ __('part_s.may') }}</option>
                                            <option value="June" {{ $month == "June" ? 'selected' : '' }}>{{ __('part_s.june') }}</option>
                                            <option value="July" {{ $month == "July" ? 'selected' : '' }}>{{ __('part_s.july') }}</option>
                                            <option value="August" {{ $month == "August" ? 'selected' : '' }}>{{ __('part_s.august') }} </option>
                                            <option value="September" {{ $month == "September" ? 'selected' : '' }}> {{ __('part_s.september') }}</option>
                                            <option value="October" {{ $month == "October" ? 'selected' : '' }}>{{ __('part_s.october') }} </option>
                                            <option value="November" {{ $month == "November" ? 'selected' : '' }}> {{ __('part_s.november') }}</option>
                                            <option value="December" {{ $month == "December" ? 'selected' : '' }}> {{ __('part_s.december') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <label class="form-label">{{ __('part_s.select_year') }}</label>
                                        <select name="year" id="year" class="form-select mb-2"
                                            aria-label="Default select example">
                                            <option value="2023" {{ $year == "2023" ? 'selected' : '' }}>2023</option>
                                            <option value="2024" {{ $year == "2024" ? 'selected' : '' }}>2024</option>
                                            <option value="2025" {{ $year == "2025" ? 'selected' : '' }}>2025</option>
                                            <option value="2026" {{ $year == "2026" ? 'selected' : '' }}>2026</option>
                                        </select>
                                        <div class="mb-1">
                                            <button type="submit" class="btn btn-alt-primary">
                                                {{ __('part_s.search_button') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </h3>
                </div>

            <div class="block-content block-content-full">
                <div class="table-responsive">
              <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table id="order-table" class="table table-bordered table-vcenter">
                <thead>
                  <tr>
                      <th>{{ __('part_s.no') }}</th>
                      <th>{{ __('part_s.invoice') }}</th>
                      <th>{{ __('part_s.date') }}</th>
                      <th>{{ __('part_s.amount') }}</th>
                      <th>{{ __('part_s.payment') }}</th>
                      <th>{{ __('part_s.state') }}</th>
                      <th>{{ __('part_s.action') }}</th>
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
                        <td class="text-center">
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
                        <td class="text-center">
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
                        <td class="text-center">
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
                        <td class="text-center">
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
                        <td class="text-center">
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
          </div>
          <!-- Dynamic Table Responsive -->
        </div>



         <!-- Extra Large Block Modal -->
            <div class="modal" id="modal_order" tabindex="-1" role="dialog" aria-labelledby="modal_order" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-transparent mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{ __('part_s.order_details') }}</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content fs-sm">
                                    <!-- Interactive Options -->
                                    <div class="row">
                                        <!-- Addresses -->
                                        <div class="block block-rounded">

                                            <div class="block-content">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- Shipping Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">{{ __('part_s.shipping_details') }}</h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">{{ __('part_s.name') }}: <span id="ship_name"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.email') }}: <span id="ship_email"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.city') }}: <span id="ship_city"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.district') }}: <span id="ship_district"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.postcode') }}: <span id="ship_post"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.order_date') }}: <span id="order_date"></span></div>
                                                                <address class="fs-sm">
                                                                    <i class="fa fa-phone"></i> {{ __('part_s.phone') }}: <span id="ship_phone"></span><br>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <!-- END Shipping Address -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- User Address -->
                                                        <div class="block block-rounded block-bordered">
                                                            <div class="block-header border-bottom">
                                                                <h3 class="block-title">{{ __('part_s.invoice') }} : <span id="invoice_no"></span></h3>
                                                            </div>
                                                            <div class="block-content">
                                                                <div class="fs-4 mb-1">{{ __('part_s.name') }}: <span id="name"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.email') }}: <span id="email"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.payment_method') }}: <span id="payment_method"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.transaction_id') }}: <span id="transaction_id"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.invoice_id') }}: <span id="invoice_no"></span></div>
                                                                <div class="fs-sm">{{ __('part_s.amount') }}: <span id="amount"></span></div>
                                                                <div class="fs-sm mb-3">{{ __('part_s.status') }}: <span class="badge bg-success" id="status"></span></div>
                                                            </div>

                                                        </div>
                                                        <!-- END User Address -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Addresses -->
                                        <!-- Page Content -->

                                        <!-- Shopping Cart -->
                                        <div class="block block-rounded">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">{{ __('part_s.product_order') }}</h3>
                                            </div>

                                                <div class="table-responsive">
                                                    <table id="item-table" class="table table-borderless table-striped table-vcenter">
                                                        <thead>
                                                        <tr>
                                                            <th>{{ __('part_s.no') }}</th>
                                                            <th>{{ __('part_s.invoice') }}</th>
                                                            <th>{{ __('part_s.date') }}</th>
                                                            <th>{{ __('part_s.amount') }}</th>
                                                            <th>{{ __('part_s.payment') }}</th>
                                                            <th>{{ __('part_s.state') }}</th>
                                                            <th>{{ __('part_s.action') }}</th>
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
                                                            <td class="text-center">
                                                                <div class="pl-loading"></div>
                                                            </td>
                                                        </tr>



                                                        </tbody>
                                                    </table>
                                                </div>

                                        </div>
                                        <!-- END Shopping Cart -->
                                    </div>
                                    <!-- END Interactive Options -->
                            </div>
                            <div class="block-content block-content-full text-end bg-body">
                           <form id="ItemForm" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
                                 <input type="hidden" name="oid" id="oid">
                                <button type="submit" id="buttonCancelled" class="btn btn-sm btn-warning mx-3">{{ __('part_s.cancel_order') }}</button>

                            <label class="text-center" for="status">{{ __('part_s.choose') }}:</label>
                               <select name="status" id="order-select">
                                </select>
                                <button id="buttonConfirm" type="submit" class="btn btn-sm btn-primary mx-3" data-bs-dismiss="modal">{{ __('part_s.confirm') }}</button>
                                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">{{ __('part_s.close') }}</button>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Extra Large Block Modal -->
    </main>

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
    <script>One.helpersOnLoad(['js-flatpickr']);</script>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        //table
       $(document).ready(function () {
     // Retrieve the format date from the data attribute
     var monthYear = $('#month').val()+' '+$('#year').val()
    $('#order-table').DataTable({
        pageLength: 10,
        lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
        autoWidth: false,
        serverSide: true,
        processing: false,
        ajax: '{{ route('by-date') }}',
        columns: [
            { data: 'id', name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            { data: 'invoice_no', name: 'invoice_no' },
            { data: 'order_date', name: 'order_date' }, // Change 'email' to 'order_date'
            { data: 'amount', name: 'amount' },
            { data: 'payment_method', name: 'payment_method' },
            {
                data: 'status',
                name: 'status',
                 render: function (data) {
                     if (data === "pending") {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">' + '{{ __('part_s.status_pending') }}' + '</span>';
                     } else if (data === "confirm") {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">' + '{{ __('part_s.status_confirm') }}' + '</span>';
                     } else if (data === "delivering") {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">' + '{{ __('part_s.status_delivering') }}' + '</span>';
                     } else if (data === "delivered") {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">' + '{{ __('part_s.status_delivered') }}' + '</span>';
                     } else if (data === "cancelled") {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">' + '{{ __('part_s.status_cancelled') }}' + '</span>';
                     } else {
                         return '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-light text-secondary">' + '{{ __('part_s.status_failed') }}' + '</span>';
                     }
                }
            },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']],
        columnDefs: [
            {
                targets: [0, 2, 3, 4, 6],
                className: 'text-center',
            },
        ],
    });
        $('#order-table').DataTable().column(2).search(monthYear).draw();
});

</script>

<script>
    function viewFunc(id) {
        editFunc(id)
        $.ajax({
            type: "POST",
            url: "{{ route('order.items') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function (resOrderItems) {
                    $.ajax({
                                type: "POST",
                                url: "{{ url('order/detail') }}",
                                data: {
                                    id: id
                                },
                                dataType: 'json',
                                success: function (res) {
                                        $('#modal_order').modal('show');
                                        $('#id').val(res.order_id);
                                        // Clear any existing rows in the table body
                                        $('#item-table tbody').html('');
                                        // Initialize a variable to track the condition
                                       var shouldDisableConfirmButton = false; // Initialize to false

                                        // Iterate through the order items and add rows to the table
                                        $.each(resOrderItems, function (index, item) {
                                            var row = '<tr><td>' + item.name + '</td><td>' + item.pro_code + '</td><td>' + item.orderqty + '</td><td>' + item.qtyinstock + '</td><td>' + item.price + '</td><td>' + item.total_price + '$' + '</td></tr>';
                                            // Check the condition for each row

                                            if (parseInt(item.qtyinstock) < parseInt(item.orderqty)) { // Use parseInt to ensure numeric comparison
                                                shouldDisableConfirmButton = true;
                                            }
                                            row += '</td></tr>';
                                            $('#item-table tbody').append(row);
                                        });

                                        // Update the "Confirm" button's disabled attribute and text based on the condition
                                        if (shouldDisableConfirmButton) {
                                            $('#buttonConfirm').prop('disabled', true);
                                            $('#buttonConfirm').text('Low Qty'); // Change the button text to "Low Qty"
                                        } else {
                                            $('#buttonConfirm').prop('disabled', false);
                                            $('#buttonConfirm').text('{{ __('part_s.save') }}'); // Change the button text back to "Confirm"
                                        }
                        // Populate the user data into the modal table
                        $('#ship_name').text(res.ship_name);
                        $('#ship_email').text(res.ship_email);
                        $('#ship_city').text(res.ship_city);
                        $('#ship_district').text(res.ship_district);
                        $('#ship_post').text(res.ship_post);
                        $('#order_date').text(res.order_date);
                        $('#ship_phone').text(res.ship_phone);

                        $('#name').text(res.name);
                        $('#email').text(res.email);
                        $('#payment_method').text(res.payment_method);
                        $('#transaction_id').text(res.transaction_id);
                        $('#invoice_no').text(res.invoice_no);
                        $('#amount').text(res.amount);
                        $('#status').text(res.status);

                    }

                });
                $('#buttonCancelled').on('click', function () {
                        cancelledFunc(id);
                    });
            }
        });
    }
    $('#ItemForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        // Assuming you are using the correct URL for the update route
        var url = "{{ route('order.update') }}";

        $.ajax({
            type: 'POST', // Consider changing this to PUT or PATCH
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                // Update the DataTable here, if necessary
                $("#modal_order").modal('hide');
                var oTable = $('#order-table').dataTable();
                oTable.fnDraw(false);
                $("#btn-save").html('Submit');
                $("#btn-save").attr("disabled", false);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });

    function editFunc(id) {
        $.ajax({
            type: "POST",
            url: "{{ url('order/edit') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function (res) {
                $('#oid').val(res.id);
                $('#order-select').val(res.status);
                $('#order-select').trigger('change');
            }
        });
    }
    function cancelledFunc(id) {
        Swal.fire({
            title: '{{ __('part_s.cancelled_record_title') }}',
            text: '{{ __('part_s.cancelled_record_text') }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __('part_s.confirm_cancel') }}',
            cancelButtonText: '{{ __('crud.cancel') }}'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('order/cancelled') }}",
                    data: { id: id },
                    dataType: 'json',
                    success: function (res) {
                        var oTable = $('#order-table').dataTable();
                        oTable.fnDraw(false);
                        $("#modal_order").modal('hide');
                    }
                });
            }
        });
    }
    function editFunc(id){
        $.ajax({
            type:"POST",
            url: "{{ url('order/edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#oid').val(res.id);
                $('#order-select').val(res.status);
                $('#order-select').trigger('change');
            }
        });
    }
    </script>
    <script>
    function downloadInvoice(orderId) {
        // Use JavaScript to navigate to the desired URL
        window.location.href = `/admin/invoice_download/${orderId}`;
    }
    // Function to create and add options to the select element
    function addOptionsToSelect() {
        var selectElement = document.getElementById('order-select');
        var optionsArray = [
            { value: 'cancelled', text: '{{ __('part_s.status_cancelled') }}' },
            { value: 'failed', text: '{{ __('part_s.status_failed') }}' },
            { value: 'delivering', text: '{{ __('part_s.status_delivering') }}' },
            { value: 'delivered', text: '{{ __('part_s.status_delivered') }}' },
            { value: 'confirm', text: '{{ __('part_s.status_confirm') }}' },
            { value: 'pending', text: '{{ __('part_s.status_pending') }}' },
        ];

        for (var i = 0; i < optionsArray.length; i++) {
            var option = document.createElement('option');
            option.value = optionsArray[i].value;
            option.text = optionsArray[i].text;
            selectElement.appendChild(option);
        }
    }

    // Call the function to add options to the select element
    addOptionsToSelect();
</script>

@endsection
