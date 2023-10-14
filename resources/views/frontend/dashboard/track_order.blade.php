@extends('frontend.index')
@section('main')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
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
                                        <h1 class="mb-3 text-xl">Track Your Order</h1>
										<div class="card shadow-none mt-6 border">
											<div class="card-body">
                                                <form method="post" action="{{ route('order.tracking') }}" class="row g-3" enctype="multipart/form-data">
                                                    @csrf
													<div class="col-md-6">
														<label class="form-label">Order ID</label>
														<input id="code" name="code" type="text" value="" required autofocus autocomplete="name" class="form-control" placeholder="Invoice Number like BSK...">
                                                        <span class="text-danger">{{ $errors->first('code') }}</span>
                                                    </div>

													<div class="col-13">
														<button type="submit" class="bg-dark text-white btn-ecomm">Submit</button>
													</div>
												</form>
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
