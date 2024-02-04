<div class="card shadow-none mb-3 mb-lg-0 border rounded-xl">
    <div class="card-body">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <div class="list-group list-group-flush rounded-xl">
            <a href="/user/dashboard"
                class="list-group-item d-flex justify-content-between align-items-center rounded-xl {{ request()->is('user/dashboard') ? ' active' : '' }}">
                @lang('main.dashboard')
                <i class='bx bx-tachometer fs-5'></i>
            </a>
            <a href="/user/orderlist"
                class="list-group-item d-flex justify-content-between align-items-center rounded-xl {{ request()->is('user/orderlist') ? ' active' : '' }}">
                @lang('main.orders')
                <i class='bx bx-cart-alt fs-5'></i>
            </a>
             <a href="/user/track-order"
                class="list-group-item d-flex justify-content-between align-items-center rounded-xl {{ request()->is('user/track-order') ? ' active' : '' }}">
                 {{ __('main.track_order') }}
                <i class='bx bx-notepad fs-5'></i>
            </a>
            <a href="/user/account/details"
                class="list-group-item d-flex justify-content-between align-items-center rounded-xl {{ request()->is('user/account/details') ? ' active' : '' }}">
                @lang('main.account_details')
                <i class='bx bx-user-circle fs-5'></i>
            </a>
            <a href="/user/account/password"
                class="list-group-item d-flex justify-content-between align-items-center rounded-xl {{ request()->is('user/account/password') ? ' active' : '' }}">
                @lang('main.password')
                <i class='bx bx-lock fs-5'></i>
            </a>
            <a href="" class="list-group-item d-flex justify-content-between align-items-center bg-transparent"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                @lang('main.logout')
                <i class='bx bx-log-out fs-5'></i>
            </a>
        </div>
    </div>
</div>
