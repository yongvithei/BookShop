@extends('frontend.index')
@section('main')
@section('title')
    Account
@endsection
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.my_orders') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.account') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.dashboard') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start shop cart-->
        <section class="py-4">
            <div class="container">
                <h3 class="d-none">{{ __('main.account') }}</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                               @include('frontend.dashboard.sidebar')
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body">
                                        <p>{{ __('main.hello_user', ['user' => optional(Auth::user())->name ?? __('main.user')]) }}</p>
                                        <p>{{ __('main.from_account_dashboard') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </section>
        <!--end shop cart-->
    </div>
</div>
<!--end page wrapper -->

@endsection
