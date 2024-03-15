@extends('frontend.index')
@section('main')
		<!--start page wrapper -->
		<div >
			<div class="page-content">
				<!--start breadcrumb-->
                <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                    <div class="container">
                        <div class="page-breadcrumb d-flex align-items-center">
                            <p class="breadcrumb-title pe-3">{{ __('main.my_orders') }}</p>
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
						<h3 class="d-none">{{ __('main.my_ordeers') }}</h3>
						<div class="card card rounded-xl drop-shadow">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4 drop-shadow">
										@include('frontend.dashboard.sidebar')
									</div>
									<div class="col-lg-8">
									    <div class="card shadow-none mb-0">
									        <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="table-light">
                                                        <tr>
                                                            <th>{{ __('main.number') }}</th>
                                                            <th>{{ __('main.invoice') }}</th>
                                                            <th>{{ __('main.payment') }}</th>
                                                            <th>{{ __('main.date') }}</th>
                                                            <th>{{ __('main.total') }}</th>
                                                            <th>{{ __('main.status') }}</th>
                                                            <th>{{ __('main.actions') }}</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orders as $key => $order)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ $order->invoice_no }}</td>
                                                                <td>{{ $order->payment_method }}</td>
                                                                <td>{{ $order->order_date }}</td>
                                                                <td>{{ $order->amount }} {{ __('main.khr') }}</td>
                                                                <td>
                                                                    @if($order->status == 'pending')
                                                                        <span class="badge rounded-pill bg-warning">{{ __('main.pending') }}</span>
                                                                    @elseif($order->status == 'confirm')
                                                                        <span class="badge rounded-pill bg-info">{{ __('main.confirm') }}</span>
                                                                    @elseif($order->status == 'processing')
                                                                        <span class="badge rounded-pill bg-danger">{{ __('main.processing') }}</span>
                                                                    @elseif($order->status == 'delivered')
                                                                        <span class="badge rounded-pill bg-success">{{ __('main.delivered') }}</span>
                                                                    @elseif($order->status == 'cancelled')
                                                                        <span class="badge rounded-pill bg-red-600">{{ __('main.cancelled') }}</span>
                                                                    @else
                                                                        <span class="badge rounded-pill bg-red-600">{{ __('main.failed') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex gap-2">
                                                                        <a href="{{ url('user/order_details/'.$order->id) }}" class="btn btn-dark btn-sm rounded-lg">{{ __('main.view') }}</a>
                                                                        <a href="{{ url('user/invoice_download/'.$order->id) }}" class="btn-sm btn-danger rounded-lg">{{ __('main.invoice') }}</a>
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    <!-- Display pagination links -->
                                                    <div class="p-2 text-center">
                                                        {{ $orders->links() }}
                                                    </div>
                                                </div>

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
