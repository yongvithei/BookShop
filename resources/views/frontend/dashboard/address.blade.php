@extends('frontend.index')
@section('main')


<!--start page wrapper -->
<div >
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
										<div class="card shadow-none mb-0">
											<div class="card-body">
												<h6 class="mb-4">The following addresses will be used on the checkuot page by default.</h6>
												<div class="row">
													<div class="col-12 col-lg-6">
														<h5 class="mb-3">Billing Addresses</h5>
														<address>
													  Madison Riiz<br>
													  123 Happy Street<br>
													  Cape Town<br>
													  Western Cape<br>
													  8001<br>
													  South Africa
												  </address>
													</div>
													<div class="col-12 col-lg-6">
														<h5 class="mb-3">Shipping Addresses</h5>
														<address>
														Madison Riiz<br>
														123 Happy Street<br>
														Cape Town<br>
														Western Cape<br>
														8001<br>
														South Africa
													</address>
													</div>
												</div>
												<!--end row-->
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