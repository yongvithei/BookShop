
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">{{__('body.title')}}</span>
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
                    <i class="si si-globe"></i>
                </button>
                <div class="dropdown-menu" >
                    <!-- Color Themes -->
                    <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                    <a href="/locale/en" class="dropdown-item">
                        <span>{{__('body.eng')}}</span>
                    </a>
                    <a href="/locale/km" class="dropdown-item">
                        <span>{{__('body.kh')}}</span>
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
            @if(Auth::user()->can('dashboard.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('admin/dashboard') ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.dashboard')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('order.menu'))
                <li class="nav-main-heading">{{__('body.order_management')}}</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('order/list') ? ' active' : '' }}" href="/order/list">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.order')}}</span>
                    </a>
                </li>
            @endif
               
            @if(Auth::user()->can('user.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('user/list') ? ' active' : '' }}" href="/user/list">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.user')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('report.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('report/order') ? ' active' : '' }}" href="/report/order">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.report')}}</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('shipping/area') ? ' active' : '' }}" href="/shipping/area">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.shippingarea')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('product.menu'))
                <li class="nav-main-heading">{{__('body.product_management')}}</li>


                <li class="nav-main-item{{ request()->is('product/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">{{__('body.products')}}</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('product/all') ? ' active' : '' }}" href="/product/all">
                                <span class="nav-main-link-nam e">{{__('body.all_product')}}</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('product/add') ? ' active' : '' }}" href="/product/add">
                                <span class="nav-main-link-name">{{__('body.add_product')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->can('category.menu'))
                <li class="nav-main-item{{ request()->is('all/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">{{__('body.category_setup')}}</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('all/category') ? ' active' : '' }}" href="{{ route('all.category') }}">
                                <span class="nav-main-link-name">{{__('body.categories')}}</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('all/subcategory') ? ' active' : '' }}" href="/all/subcategory">
                                <span class="nav-main-link-name">{{__('body.sub_categories')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(Auth::user()->can('business.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('list/partners') ? ' active' : '' }}" href="/list/partners">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.business_partners')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('review.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('review/all') ? ' active' : '' }}" href="/review/all">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">{{__('body.review')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('promo.menu'))
                <li class="nav-main-heading">{{__('body.promotion_management')}}</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('list/promo') ? ' active' : '' }}" href="/list/promo">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">{{__('body.banners_coupon')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('role.menu'))
                <li class="nav-main-heading">{{__('body.roles_and_permission')}}</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('role/permission') ? ' active' : '' }}" href="/role/permission">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">{{__('body.roles_and_permission')}}</span>
                        </a>
                    </li>
            @endif
            @if(Auth::user()->can('assign.menu'))
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('list/admin') ? ' active' : '' }}" href="/list/admin">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">{{__('body.assign')}}</span>
                        </a>
                    </li>
            @endif
            @if(Auth::user()->can('site.menu'))
                <li class="nav-main-heading">{{__('body.system_setting')}}</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('info/business') ? ' active' : '' }}" href="/info/business">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">{{__('body.business_setup')}}</span>
                    </a>
                </li>
            @endif
            @if(Auth::user()->can('backup.menu'))
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('backup/info') ? ' active' : '' }}" href="/backup/info">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">{{__('body.backup')}}</span>
                    </a>
                </li>
            @endif
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->
