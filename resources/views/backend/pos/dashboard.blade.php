@extends('backend.pos.index')
@section('pos')
<!-- Main Container -->
<main id="main-container">
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
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Total Paid</div>
                        <div class="fs-2 fw-normal text-dark">120,580</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Incomplete payment</div>
                        <div class="fs-2 fw-normal text-dark">$150</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                        <div class="fs-2 fw-normal text-dark">$3,200</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Pending Order</div>
                        <div class="fs-2 fw-normal text-dark">21</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Stats -->

        <!-- Dashboard Charts -->
        <div class="row">
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
                        <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
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
                        <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div class="pt-3" style="height: 360px;"><canvas id="js-chartjs-dashboard-sales"></canvas></div>
                    </div>

                </div>
            </div>
        </div>
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
                                <th class="fw-bold">Name</th>
                                <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">Orders</th>
                                <th class="fw-bold text-center" style="width: 60px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar12.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    David Fuller                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">5</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar7.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Susan Day                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">14</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar11.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Scott Young                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">15</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar11.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Sara Fields                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">36</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar11.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Wayne Garcia                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">3</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar5.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Amanda Powell                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">1</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#01368</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <img class="img-avatar img-avatar32" src="{{asset('admin/assets/media/avatars/avatar9.jpg')}}" alt="">
                                </td>
                                <td class="fw-semibold">
                                    Ralph Murray                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <a class="link-fx fw-semibold" href="javascript:void(0)">12</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
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
                                <th class="d-none d-sm-table-cell fw-bold">Date</th>
                                <th class="fw-bold">State</th>
                                <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                                <th class="fw-bold text-center" style="width: 60px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07835</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $999,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07834</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $2.299,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07833</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $1200,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07832</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-danger">Cancelled</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $399,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07831</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $349,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07830</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $999,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07829</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $39,99
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07828</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $499,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">#07827</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">
                                    $325,00
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
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
