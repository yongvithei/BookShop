@extends('admin.index')
@section('admin')

<!-- Main Container -->
<main id="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Hero -->
    <div class="content">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
                <h1 class="h3 fw-bold mb-1">
                    {{ __('part_s.dashboard') }}
                </h1>
                <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                    {{ __('part_s.welcome') }} <a class="fw-semibold" href="">{{ Auth::user()->name }}</a>. <d id="str">{{ __('part_s.today_sell') }}</d>
                </h2>
            </div>
            <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                <a class="btn btn-sm btn-alt-secondary space-x-1" href="/info/business">
                    <i class="fa fa-cogs opacity-50"></i>
                    <span>{{ __('part_s.settings') }}</span>
                </a>
                <div class="dropdown d-inline-block">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary space-x-1" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                            <span>{{ __('part_s.all_time') }}</span>
                            <i class="fa fa-fw fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="today">{{ __('pos_p.today') }}</a>
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="yesterday">{{ __('pos_p.yesterday') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="last_month">{{ __('part_s.last_month') }}</a>
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="last_3_months">{{ __('part_s.last_3_months') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="this_year">{{ __('part_s.this_year') }}</a>
                            <a class="dropdown-item fw-medium" href="javascript:void(0)" data-time-range="last_year">{{ __('part_s.last_year') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)" data-time-range="all_time">
                                <span>{{ __('part_s.all_time_dropdown') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
            <div class="col-sm-6 col-xxl-3">
                <!-- Pending Orders -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold" id="today">{{ $amount }} KHR</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" id="seAmount">$ {{ $seAmount }}</dd>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('part_s.total_sale') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-money-bills fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="/order/list">
                            <span>{{ __('part_s.view_all_orders') }}</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Pending Orders -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold" id="pending">{{ $pending }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('part_s.pending_orders') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-hourglass-start fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="/order/list">
                            <span>{{ __('part_s.view_all_orders') }}</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END New Customers -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Messages -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold" id="order">{{ $order }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('part_s.amount_order') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-cart-shopping fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="/order/list">
                            <span>{{ __('part_s.view_all_orders') }}</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Messages -->
            </div>
            <div class="col-sm-6 col-xxl-3">
                <!-- Conversion Rate -->
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold" id="customer">{{ $customer }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('part_s.total_user') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-chart-bar fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between" href="/user/list">
                            <span>{{ __('part_s.view_users') }}</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
                <!-- END Conversion Rate-->
            </div>
        </div>
        <!-- END Overview -->
        {{--
        <!-- Statistics -->
        <div class="row">
            <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                <!-- Earnings Summary -->
                <div class="block block-rounded flex-grow-1 d-flex flex-column">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings Summary</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                        <!-- Earnings Chart Container -->
                        <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas id="js-chartjs-earnings"></canvas>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row items-push text-center w-100">
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-up fs-base text-success"></i>
                                        <span>2.5%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-up fs-base text-success"></i>
                                        <span>3.8%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-down fs-base text-danger"></i>
                                        <span>1.7%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Earnings Summary -->
            </div>
            <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                <!-- Last 2 Weeks -->
                <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                <div class="row items-push flex-grow-1">
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">570</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                                        <i class="fa fa-caret-down me-1"></i>
                                        2.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- Total Orders Chart Container -->
                                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">$5,234.21</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i>
                                        4.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- Total Earnings Chart Container -->
                                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">264</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                </dl>
                                <div>
                                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i>
                                        9.3%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <!-- New Customers Chart Container -->
                                <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Last 2 Weeks -->
            </div>
        </div>
        <!-- END Statistics -->
        --}}
        <!-- Recent Orders -->
        @php
        $orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->limit(10)->get();
        @endphp
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Recent Orders</h3>
                <div class="block-options space-x-1">
{{--                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">--}}
{{--                        <i class="fa fa-search"></i>--}}
{{--                    </button>--}}
                    <div class="dropdown d-inline-block">
{{--                        <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="fa fa-fw fa-flask"></i>--}}
{{--                            {{ __('part_s.filters') }}--}}
{{--                            <i class="fa fa-angle-down ms-1"></i>--}}
{{--                        </button>--}}
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                {{ __('part_s.pending') }}
                                <span class="badge bg-primary rounded-pill">20</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                {{ __('part_s.active') }}
                                <span class="badge bg-primary rounded-pill">72</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                {{ __('part_s.completed') }}
                                <span class="badge bg-primary rounded-pill">890</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                {{ __('part_s.all') }}
                                <span class="badge bg-primary rounded-pill">997</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                <!-- Search Form -->
                <form action="" method="POST" onsubmit="return false;">
                    <div class="push">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
                            <span class="input-group-text bg-body border-0">
                      <i class="fa fa-search"></i>
                    </span>
                        </div>
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <div class="block-content block-content-full">
                <!-- Recent Orders Table -->
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                        <tr>
                            <th>{{ __('part_s.sl') }}</th>
                            <th>{{ __('part_s.date') }}</th>
                            <th>{{ __('part_s.invoice') }}</th>
                            <th>{{ __('part_s.amount') }}</th>
                            <th>{{ __('part_s.payment') }}</th>
                            <th>{{ __('part_s.status') }}</th>
                        </tr>
                        </thead>
                        <tbody class="fs-sm">
                            @foreach($orders as $key => $order)
                            <tr>
                                <td>{{ $key+1 }}</td>

                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>${{ $order->amount }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">
                                        {{ $order->status  }}</span>
                                </td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END Recent Orders Table -->
            </div>
            <div class="block-content block-content-full bg-body-light">

            </div>
        </div>
        <!-- END Recent Orders -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Page JS Plugins -->
<script src="{{asset('admin/assets/js/plugins/chart.js/chart.umd.js')}}"></script>
<!-- Page JS Code -->
<script src="{{asset('admin/assets/js/pages/be_pages_dashboard.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.dropdown-item').on('click', function () {
            var timeRange = $(this).data('time-range');

            // Perform an AJAX request to the server
            $.ajax({
                url: '/get-ecm-data', // Replace with your actual route
                method: 'POST',
                data: {
                    time_range: timeRange,
                },
                success: function (response) {
                    console.log(response);
                    // Update the UI with the server response
                    updateUI(response.Amount, response.seAmount, response.pending, response.order, response.customer, response.str);
                },
                error: function (error) {
                    console.error(error);
                },
            });
        });

        function updateUI(Amount, seAmount, pending, order, customer, str) {
            // Update your UI elements with the data received from the server
            $('#today').text(Amount + ' KHR');
            $('#seAmount').text('$ ' +seAmount);
            $('#pending').text(pending);
            $('#order').text(order);
            $('#customer').text(customer);
            $('#str').text(str);
            // Add more updates as needed
        }

    });
</script>

@endsection
