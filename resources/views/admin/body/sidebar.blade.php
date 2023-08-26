
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="">
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
                    <a class="nav-main-link{{ request()->is('admin/dashboard') ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>

                <li class="nav-main-heading">ORDER MANAGEMENT</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('order/list') ? ' active' : '' }}" href="/order/list">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Order</span>
                    </a>
                </li>
                <li class="nav-main-item{{ request()->is('return/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-trophy"></i>
                        <span class="nav-main-link-name">Returns</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('return/pending') ? ' active' : '' }}" href="/return/pending">
                                <span class="nav-main-link-name">Pending</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('return/approve') ? ' active' : '' }}" href="/return/approve">
                                <span class="nav-main-link-name">Approve</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('user/list') ? ' active' : '' }}" href="/user/list">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">User</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('report/order') ? ' active' : '' }}" href="/report/order">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Report</span>
                    </a>
                </li>

                <li class="nav-main-heading">PRODUCT MANAGEMENT</li>


                <li class="nav-main-item{{ request()->is('product/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Products</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('product/all') ? ' active' : '' }}" href="/product/all">
                                <span class="nav-main-link-nam e">All Product</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('product/add') ? ' active' : '' }}" href="/product/add">
                                <span class="nav-main-link-name">Add Product</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item{{ request()->is('all/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Category Setup</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('all/category') ? ' active' : '' }}" href="{{ route('all.category') }}">
                                <span class="nav-main-link-name">Categories</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('all/subcategory') ? ' active' : '' }}" href="/all/subcategory">
                                <span class="nav-main-link-name">Sub Categories</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('list/partners') ? ' active' : '' }}" href="/list/partners">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Business Partners</span>
                    </a>
                </li>
                <li class="nav-main-heading">PROMOTION MANAGEMENT</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('list/promo') ? ' active' : '' }}" href="/list/promo">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Banners & Coupon</span>
                    </a>
                </li>


                <li class="nav-main-heading">SYSTEM SETTINGS</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('info/business') ? ' active' : '' }}" href="/info/business">
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
