@extends('backend.pos.index')
@section('pos')
<!-- Main Container -->
<main id="main-container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $date = date('Y-m-d');
        $todayAmount = App\Models\PosOrder::whereDate('created_at',$date)->sum('amount');
        $rate = App\Models\SiteInfo::select('exchange')->first();
        $todayReceived = App\Models\PosOrder::whereDate('created_at',$date)->sum('received');
        $todayCount = App\Models\PosOrder::whereDate('created_at',$date)->count('id');
        $cusCount = App\Models\Customer::where('status',"Active")->count('id');


        $customers = App\Models\Customer::with('posOrders')->where('status','Active')->take(9)->get();
        $orders = App\Models\PosOrder::with('customerId')->latest()->take(9)->get();

        $amountSell = $todayAmount / $rate->exchange;
        $amountReceived = $todayReceived / $rate->exchange;
        $seAmount = number_format($amountSell, 2);
        $reAmount = number_format($amountReceived, 2);
    @endphp
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
    <!-- Page Content -->
    <div class="content">
        <div class="mb-3 mt-md-0 ms-md-3 space-x-1">
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
        <!-- Stats -->
        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">{{ __('pos_p.total_sell') }}</div>
                        <div class="fs-2 fw-normal text-dark" id="Amount"> {{ $todayAmount }} KHR</div>
                        <span id="seAmount">$ {{ $seAmount }}</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">{{ __('pos_p.received_payment') }}</div>
                        <div class="fs-2 fw-normal text-dark" id="Received">{{ $todayReceived }} KHR</div>
                        <span id="reAmount">$ {{ $reAmount }}</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">{{ __('pos_p.sell') }}</div>
                        <div class="fs-2 fw-normal text-dark" id="Count">{{ $todayCount }}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">{{ __('pos_p.customer') }}</div>
                        <div class="fs-2 fw-normal text-dark">{{ $cusCount }}</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Stats -->

        <!-- Dashboard Charts -->
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-untitleui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings in $</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-0 text-center">
                    <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-untitleui">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Sales</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-0 text-center">
                        <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-sales"></canvas></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END Dashboard Charts -->

        <!-- Customers and Latest Orders -->
        <div class="row items-push">
            <!-- Latest Customers -->
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-untitleui h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{ __('pos_p.latest_customers') }}</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                            <thead>
                            <tr class="text-uppercase">
                                <th class="fw-bold" style="width: 80px;">{{ __('pos_p.id') }}</th>
                                <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 100px;">{{ __('pos_p.photo') }}</th>
                                <th class="fw-bold text-center">{{ __('pos_p.name') }}</th>
                                <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">{{ __('pos_p.orders') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($customers as $cus)
                                <td>
                                    <span class="fw-semibold">{{ $cus->id }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="/storage/customer/{{ $cus->photo }}" alt="">
                                </td>
                                <td class="fw-semibold">{{ $cus->name }}</td>
                                <td class="d-none d-sm-table-cell text-center">
                                @if ($cus->posOrders)
                                    {{ $cus->posOrders->count() }}
                                @else
                                    <p>{{ __('os_p.no_orders') }}</p>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Customers -->

            <!-- Latest Orders -->
            <div class="col-lg-6">
                <div class="block block-rounded block-mode-loading-untitleui h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">{{ __('pos_p.latest_orders') }}</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                            <thead>
                            <tr class="text-uppercase">
                                <th class="fw-bold">{{ __('pos_p.id') }}</th>
                                <th class="fw-bold">{{ __('pos_p.customer') }}</th>
                                <th class="d-none d-sm-table-cell fw-bold">{{ __('pos_p.date') }}</th>
                                <th class="fw-bold">{{ __('pos_p.payment') }}</th>
                                <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">{{ __('pos_p.price') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $or)
                            <tr>
                                <td>
                                    <span class="fw-semibold">{{$or->id}}</span>
                                </td>
                                <td class="d-sm-table-cell">
                                    <span class="fs-sm text-muted">@if ($or->customerId)
                                            {{ $or->customerId->name ?? __('pos_p.walking_customer') }}
                                    @else
                                        Walking Customer
                                    @endif</span>
                                </td>
                                <td class="d-sm-table-cell">
                                    <span class="fs-sm text-muted">{{$or->created_at}}</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">{{$or->payment}}</span>
                                </td>
                                <td class="d-sm-table-cell text-center">
                                    {{$or->amount}}{{ __('pos_p.khr') }}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Orders -->
        </div>
        <!-- END Customers and Latest Orders -->
    </div>
    <!-- END Page Content -->
</main>
    <!-- Page JS Plugins -->
    <script src="{{asset('admin/assets/js/plugins/chart.js/chart.umd.js')}}"></script>
    <!-- Page JS Code -->
    <script src="{{asset('admin/assets/js/pages/be_pages_dashboard_v1.min.js')}}"></script>
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
                url: '/get-sales-data', // Replace with your actual route
                method: 'POST',
                data: {
                    time_range: timeRange,
                },
                success: function (response) {
                    // Update the UI with the server response
                    updateUI(response.Amount, response.Received, response.Count, response.seAmount, response.reAmount);
                },
                error: function (error) {
                    console.error(error);
                },
            });
        });

        function updateUI(Amount, Received, Count, seAmount, reAmount) {
            // Update your UI elements with the data received from the server
            $('#Amount').text(Amount + ' KHR');
            $('#Received').text(Received + ' KHR');
            $('#Count').text(Count);
            $('#seAmount').text('$ ' +seAmount);
            $('#reAmount').text('$ ' +reAmount);
            // Add more updates as needed
        }

    });
</script>


@endsection
