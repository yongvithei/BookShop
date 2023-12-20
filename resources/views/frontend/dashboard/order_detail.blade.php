@extends('frontend.index')
@section('main')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">My Orders</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Account</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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
                                                        <h4>Shipping Details</h4>
                                                    </div>
                                                    <hr>
                                                    <div class="card-body">
                                                        <table class="table"
                                                            style="background:#F4F6FA;font-weight: 600;">
                                                            <tr>
                                                                <th>Shipping Name:</th>
                                                                <th>{{ $order->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping Phone:</th>
                                                                <th>{{ $order->phone }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping Email:</th>
                                                                <th>{{ $order->email }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>City :</th>
                                                                <th>{{ $order->city->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>District :</th>
                                                                <th>{{ $order->district->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Post Code :</th>
                                                                <th>{{ $order->post_code }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Order Date :</th>
                                                                <th>{{ $order->order_date }}</th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Order Details
                                                            <span class="text-danger">Invoice : {{ $order->invoice_no }}
                                                            </span></h4>
                                                    </div>
                                                    <hr>
                                                    <div class="card-body">
                                                        <table class="table"
                                                            style="background:#F4F6FA;font-weight: 600;">
                                                            <tr>
                                                                <th> Name :</th>
                                                                <th>{{ $order->user->name }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone :</th>
                                                                <th>{{ $order->phone }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Payment Type:</th>
                                                                <th>{{ $order->payment_method }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Transx ID:</th>
                                                                <th>{{ $order->transaction_id }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Invoice:</th>
                                                                <th class="text-danger">{{ $order->invoice_no }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Order Amonut:</th>
                                                                <th>{{ $order->amount }} KHR</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Order Status:</th>
                                                                <th><span
                                                                        class="badge rounded-pill bg-warning">{{ $order->status }}</span>
                                                                </th>
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
                                                    <h4>All Products</h4>
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
                                                                                    <label>Image </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>Product Name </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>Product Code </label>
                                                                                </td>
                                                                                <td class="col-md-2">
                                                                                    <label>Quantity </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>Price </label>
                                                                                </td>
                                                                            </tr>
                                                                            @foreach($orderItem as $item)
                                                                            <tr>
                                                                                <td class="col-md-1">
                                                                                    <label><img
                                                                                            src="{{ asset($item->product->thumbnail) }}"
                                                                                            style="width:50px; height:50px;">
                                                                                    </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>{{ $item->product->name }}</label>
                                                                                </td>
                                                                                <td class="col-md-2">
                                                                                    <label>{{ $item->product->pro_code }}
                                                                                    </label>
                                                                                </td>
                                                                                <td class="col-md-1">
                                                                                    <label>{{ $item->qty }} </label>
                                                                                </td>
                                                                                <td class="col-md-3">
                                                                                    <label>{{ $item->price }} KHR<br>
                                                                                        Total =
                                                                                        {{ $item->price * $item->qty }} KHR
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
