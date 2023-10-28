<!-- Navigation -->
<div class="bg-primary-darker">
    <div class="bg-black-10">
        <div class="content py-3">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none">
                <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
                <button type="button"
                    class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
                    data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
                <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('pos/dashboard') ? ' active' : '' }}" href="/pos/dashboard">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('admin/pos') ? ' active' : '' }}" href="/admin/pos">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">POS</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('pos/customer') ? ' active' : '' }}" href="/pos/customer">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">Customer</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('pos/order') ? ' active' : '' }}" href="/pos/order">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">Order</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/admin/dashboard">
                            <i class="nav-main-link-icon si si-action-undo"></i>
                            <span class="nav-main-link-name">Go Back</span>
                        </a>
                    </li>
                    
                    <li class="nav-main-heading">Extra</li>
                    
                    <li class="nav-main-item ms-lg-auto">
                        
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                            aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-brush"></i>
                            <span class="nav-main-link-name d-lg-none">Themes</span>
                        </a>
                        <ul class="nav-main-submenu nav-main-submenu-right">
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                    <i class="nav-main-link-icon fa fa-square text-default"></i>
                                    <span class="nav-main-link-name">Default</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                    data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                                    <span class="nav-main-link-name">Amethyst</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css"
                                    href="#">
                                    <i class="nav-main-link-icon fa fa-square text-city"></i>
                                    <span class="nav-main-link-name">City</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css"
                                    href="#">
                                    <i class="nav-main-link-icon fa fa-square text-flat"></i>
                                    <span class="nav-main-link-name">Flat</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                    data-theme="assets/css/themes/modern.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-square text-modern"></i>
                                    <span class="nav-main-link-name">Modern</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" data-toggle="theme"
                                    data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                                    <span class="nav-main-link-name">Smooth</span>
                                </a>
                            </li>
                        </ul>
                        
                    </li>
                       

                </ul>
            </div>
            <!-- END Main Navigation -->
        </div>
    </div>
</div>
<!-- END Navigation -->
