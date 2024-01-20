@extends('frontend.index')
@section('main')

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
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.my_orders') }}</li>
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
                <h3 class="d-none">Account</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                @include('frontend.dashboard.sidebar')
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>{{ __('main.shipping_details') }}</h4>
                                                    </div>
                                                    <hr>
                                                    <div class="card-body">
                                                        <table class="table" style="background:#ffffff;font-weight: 600;">
                                                            <tr>
                                                                <th>{{ __('main.shipping_name') }}:</th>
                                                                <th>{{ $order->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.shipping_phone') }}:</th>
                                                                <th>{{ $order->phone }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.shipping_email') }}:</th>
                                                                <th>{{ $order->email }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.city') }} :</th>
                                                                <th>{{ $order->city->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.district') }} :</th>
                                                                <th>{{ $order->district->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.post_code') }} :</th>
                                                                <th>{{ $order->post_code }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.order_date') }} :</th>
                                                                <th>{{ $order->order_date }}</th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>{{ __('main.order_details') }} <span class="text-danger">{{ __('main.invoice') }} : {{ $order->invoice_no }}</span></h4>
                                                    </div>
                                                    <hr>
                                                    <div class="card-body">
                                                        <table class="table" style="background:#ffffff;font-weight: 600;">
                                                            <tr>
                                                                <th>{{ __('main.name') }} :</th>
                                                                <th>{{ $order->user->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.phones') }} :</th>
                                                                <th>{{ $order->phone }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.payment_type') }}:</th>
                                                                <th>{{ $order->payment_method }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.transaction_id') }}:</th>
                                                                <th>{{ $order->transaction_id }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.invoice') }}:</th>
                                                                <th class="text-danger">{{ $order->invoice_no }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.amount') }}:</th>
                                                                <th>{{ $order->amount }} {{ __('main.khr') }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('main.order_status') }}:</th>
                                                                <th><span class="badge rounded-pill bg-warning">{{ $order->status }}</span></th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- all products -->

                                    <div class="m-3">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>{{ __('main.all_products') }}</h4>
                                                </div>
                                                <hr>
                                                <div class="card-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table" style="font-weight: 600;">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="col-md-2">
                                                                                <label>{{ __('main.image') }}</label>
                                                                            </td>
                                                                            <td class="col-md-3">
                                                                                <label>{{ __('main.product_name') }}</label>
                                                                            </td>
                                                                            <td class="col-md-3">
                                                                                <label>{{ __('main.product_code') }}</label>
                                                                            </td>
                                                                            <td class="col-md-2">
                                                                                <label>{{ __('main.quantity') }}</label>
                                                                            </td>
                                                                            <td class="col-md-3">
                                                                                <label>{{ __('main.price') }}</label>
                                                                            </td>
                                                                        </tr>
                                                                        @foreach($orderItem as $item)
                                                                            <tr>
                                                                                <td class="col-md-1">
                                                                                    <label><img
                                                                                                src="{{ $item->product->thumbnail ? asset($item->product->thumbnail) : asset('/storage/images/pro_img.jpg') }}"
                                                                                            style="width:50px; height:50px;">
                                                                                    </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>{{ session()->get('locale') == 'en' ? ($item->product->name ? $item->product->name : $item->product->pro_kh) : ($item->product->pro_kh ? $item->product->pro_kh : $item->product->name) }}</label>
                                                                                </td>
                                                                                <td class="col-md-2">
                                                                                    <label>{{ $item->product->pro_code }}
                                                                                    </label>
                                                                                </td>
                                                                                <td class="col-md-1">
                                                                                    <label>{{ $item->qty }} </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>{{ $item->price }} {{ __('main.khr') }}<br>
                                                                                        Total =
                                                                                        {{ $item->price * $item->qty }} {{ __('main.khr') }}
                                                                                    </label>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- all products -->
                                </div>

                            </div>

                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end shop cart-->
    </div>
</div>
<!--end page wrapper -->



@endsection
