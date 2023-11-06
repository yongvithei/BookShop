@extends('backend.pos.index')
@section('pos')
<!-- Main Container -->
<main id="main-container">
    @php
        $date = date('Y-m-d');
        $todayAmount = App\Models\PosOrder::whereDate('created_at',$date)->sum('amount');
        $todayReceived = App\Models\PosOrder::whereDate('created_at',$date)->sum('received');
        $todayCount = App\Models\PosOrder::whereDate('created_at',$date)->count('id');
        $cusCount = App\Models\Customer::where('status',"Active")->count('id');
        
        $customers = App\Models\Customer::with('posOrders')->where('status','Active')->take(9)->get();
        $orders = App\Models\PosOrder::with('customerId')->latest()->take(9)->get();
    @endphp
    <!-- Navigation -->
    @include('backend.pos.body.nav')
    <!-- END Navigation -->
    <!-- Page Content -->
    <div class="content">
        <!-- Stats -->
        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Today Total Sell</div>
                        <div class="fs-2 fw-normal text-dark">$ {{ $todayAmount }}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Today Received payment</div>
                        <div class="fs-2 fw-normal text-dark">$ {{ $todayReceived }}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Today Sell </div>
                        <div class="fs-2 fw-normal text-dark">{{$todayCount}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Customer</div>
                        <div class="fs-2 fw-normal text-dark">{{$cusCount}}</div>
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
                        <h3 class="block-title">Latest Customers</h3>
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
                                <th class="fw-bold" style="width: 80px;">ID</th>
                                <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 100px;">Photo</th>
                                <th class="fw-bold text-center">Name</th>
                                <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">Orders</th>
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
                                    <p>No Orders</p>
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
                        <h3 class="block-title">Latest Orders</h3>
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
                                <th class="fw-bold">ID</th>
                                <th class="fw-bold">Customer</th>
                                <th class="d-none d-sm-table-cell fw-bold">Date</th>
                                <th class="fw-bold">Payment</th>
                                <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
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
                                        {{ $or->customerId->name ?? 'Walking Customer' }}
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
                                <td class="d-sm-table-cell text-end">
                                    ${{$or->amount}}
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
@endsection
