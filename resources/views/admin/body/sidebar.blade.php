<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header border-bottom">
        <!-- User Avatar -->
        <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
        </div>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
        </a>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Side Overlay Tabs -->
        <div class="block block-transparent pull-x pull-t">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab" data-bs-target="#so-overview" role="tab" aria-controls="so-overview" aria-selected="true">
                        <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab" data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
                        <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                    </button>
                </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
                <!-- Overview Tab -->
                <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel" aria-labelledby="so-overview-tab" tabindex="0">
                    <!-- Activity -->
                    <div class="block block-transparent">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Recent Activity</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Activity List -->
                            <ul class="nav-items mb-0">
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale ($15)</div>
                                            <div>Admin Template</div>
                                            <small class="text-muted">3 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">You edited the file</div>
                                            <div>Documentation.doc</div>
                                            <small class="text-muted">15 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-trash text-danger"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Project deleted</div>
                                            <div>Line Icon Set</div>
                                            <small class="text-muted">4 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Activity List -->
                        </div>
                    </div>
                    <!-- END Activity -->

                    <!-- Online Friends -->
                    <div class="block block-transparent">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Online Friends</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Users Navigation -->
                            <ul class="nav-items mb-0">
                                <li>
                                    <a class="d-flex py-2" href="javascript:void(0)">
                                        <div class="me-3 ms-2 overlay-container overlay-bottom">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Betty Kelley</div>
                                            <div class="text-muted">Copywriter</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex py-2" href="javascript:void(0)">
                                        <div class="me-3 ms-2 overlay-container overlay-bottom">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Thomas Riley</div>
                                            <div class="text-muted">Web Developer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex py-2" href="javascript:void(0)">
                                        <div class="me-3 ms-2 overlay-container overlay-bottom">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Susan Day</div>
                                            <div class="text-muted">Web Designer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex py-2" href="javascript:void(0)">
                                        <div class="me-3 ms-2 overlay-container overlay-bottom">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Carol Ray</div>
                                            <div class="text-muted">Photographer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex py-2" href="javascript:void(0)">
                                        <div class="me-3 ms-2 overlay-container overlay-bottom">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Scott Young</div>
                                            <div class="text-muted">Graphic Designer</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END Users Navigation -->
                        </div>
                    </div>
                    <!-- END Online Friends -->

                    <!-- Quick Settings -->
                    <div class="block block-transparent mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Quick Settings</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Quick Settings Form -->
                            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                <div class="mb-4">
                                    <p class="fs-sm fw-semibold mb-2">
                                        Online Status
                                    </p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-check1" name="so-settings-check1" checked>
                                        <label class="form-check-label fs-sm" for="so-settings-check1">Show your status to all</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="fs-sm fw-semibold mb-2">
                                        Auto Updates
                                    </p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-check2" name="so-settings-check2" checked>
                                        <label class="form-check-label fs-sm" for="so-settings-check2">Keep up to date</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="fs-sm fw-semibold mb-1">
                                        Application Alerts
                                    </p>
                                    <div class="space-y-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check3" name="so-settings-check3" checked>
                                            <label class="form-check-label fs-sm" for="so-settings-check3">Email Notifications</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check4" name="so-settings-check4" checked>
                                            <label class="form-check-label fs-sm" for="so-settings-check4">SMS Notifications</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="fs-sm fw-semibold mb-1">
                                        API
                                    </p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-check5" name="so-settings-check5" checked>
                                        <label class="form-check-label fs-sm" for="so-settings-check5">Enable access</label>
                                    </div>
                                </div>
                            </form>
                            <!-- END Quick Settings Form -->
                        </div>
                    </div>
                    <!-- END Quick Settings -->
                </div>
                <!-- END Overview Tab -->

                <!-- Sales Tab -->
                <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel" aria-labelledby="so-sales-tab" tabindex="0">
                    <div class="block block-transparent mb-0">
                        <!-- Stats -->
                        <div class="block-content">
                            <div class="row items-push pull-t">
                                <div class="col-6">
                                    <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                                    <a class="fs-lg" href="javascript:void(0)">22.030</a>
                                </div>
                                <div class="col-6">
                                    <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                                    <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Stats -->

                        <!-- Today -->
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-6">
                                    <span class="fs-sm fw-semibold text-uppercase">Today</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="ext-muted">$996</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items push">
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $249</div>
                                            <small class="text-muted">3 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $129</div>
                                            <small class="text-muted">50 min ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $119</div>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $499</div>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Today -->

                        <!-- Yesterday -->
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-6">
                                    <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="text-muted">$765</span>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items push">
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $249</div>
                                            <small class="text-muted">26 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-minus text-danger"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Product Purchase - $50</div>
                                            <small class="text-muted">28 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $119</div>
                                            <small class="text-muted">29 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-minus text-danger"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">Paypal Withdrawal - $300</div>
                                            <small class="text-muted">37 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $129</div>
                                            <small class="text-muted">39 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $119</div>
                                            <small class="text-muted">45 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                        <div class="flex-shrink-0 me-3 ms-2">
                                            <i class="fa fa-fw fa-plus text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 fs-sm">
                                            <div class="fw-semibold">New sale! + $499</div>
                                            <small class="text-muted">46 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <!-- More -->
                            <div class="text-center">
                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                                </a>
                            </div>
                            <!-- END More -->
                        </div>
                        <!-- END Yesterday -->
                    </div>
                </div>
                <!-- END Sales Tab -->
            </div>
        </div>
        <!-- END Side Overlay Tabs -->
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->

<!-- Sidebar -->
<!--
    Sidebar Mini Mode - Display Helper classes

    Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

    Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
    Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
    Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">UntitleUI</span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                    <!-- Color Themes -->
                    <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                        <span>Default</span>
                        <i class="fa fa-circle text-default"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                        <span>Amethyst</span>
                        <i class="fa fa-circle text-amethyst"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                        <span>City</span>
                        <i class="fa fa-circle text-city"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                        <span>Flat</span>
                        <i class="fa fa-circle text-flat"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                        <span>Modern</span>
                        <i class="fa fa-circle text-modern"></i>
                    </a>
                    <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                        <span>Smooth</span>
                        <i class="fa fa-circle text-smooth"></i>
                    </a>
                    <!-- END Color Themes -->

                    <div class="dropdown-divider"></div>

                    <!-- Sidebar Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                        <span>Sidebar Dark</span>
                    </a>
                    <!-- END Sidebar Styles -->

                    <div class="dropdown-divider"></div>

                    <!-- Header Styles -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                        <span>Header Dark</span>
                    </a>
                    <!-- END Header Styles -->
                </div>
            </div>
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>

                <li class="nav-main-heading">ORDER MANAGEMENT</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Orders</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Pending</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Confirmed</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Out for delivery</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Delivered</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Cancelled</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-trophy"></i>
                        <span class="nav-main-link-name">Returns</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_tiles.html">
                                <span class="nav-main-link-name">Panding</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_users.html">
                                <span class="nav-main-link-name">Approve</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-heading">PRODUCT MANAGEMENT</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Category Setup</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Categories</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">Sub Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Brands</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Add new</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">InHouse Products</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Add new</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Seller Products</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Add new</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">PROMOTION MANAGEMENT</li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Banners</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Coupon</span>
                    </a>
                </li>
                <li class="nav-main-heading">REPORTS & ANALYSIS</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Sales & Transaction Report</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">
                        Earning Reports</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">
                        Inhouse Sales</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">
                        Seller Report</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                      <span class="nav-main-link-name">
                        Transaction Report</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">
                    Product Report</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">
                    Order Report</span>
                    </a>
                </li>
                <li class="nav-main-heading">SYSTEM SETTINGS</li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">
                    Business Setup</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
