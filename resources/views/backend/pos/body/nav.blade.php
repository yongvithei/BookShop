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
                            <span class="nav-main-link-name">{{ __('pos_p.dashboard') }}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('admin/pos') ? ' active' : '' }}" href="/admin/pos">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">{{ __('pos_p.pos') }}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('pos/customer') ? ' active' : '' }}" href="/pos/customer">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">{{ __('pos_p.customer') }}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link {{ request()->is('pos/order') ? ' active' : '' }}" href="/pos/order">
                            <i class="nav-main-link-icon si si-compass"></i>
                            <span class="nav-main-link-name">{{ __('pos_p.order') }}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/admin/dashboard">
                            <i class="nav-main-link-icon si si-action-undo"></i>
                            <span class="nav-main-link-name">{{ __('pos_p.go_back') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Main Navigation -->
        </div>
    </div>
</div>
<!-- END Navigation -->
