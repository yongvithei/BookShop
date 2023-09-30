@extends('frontend.index')
@section('main')

<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">{{ __('main.search_result_found') }} (12)</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> {{ __('main.home') }}</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">{{ __('main.shop') }}</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">{{ __('main.search_result') }}</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop area-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-12">
								<div class="product-wrapper">
									<div class="toolbox d-lg-flex align-items-center mb-3 gap-2 p-3 bg-white border">
										<div class="d-flex flex-wrap">
											<p class="mb-0 font-13 text-nowrap text-dark text-2xl">{{ __('main.found') }} (12)</p>
										</div>
									</div>
									<div class="product-grid">
										<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
											<div class="col">
												<div class="card rounded-0 product-card">
													<div class="card-header bg-transparent border-bottom-0">
														<div class="d-flex align-items-center justify-content-end gap-3">
															<a href="javascript:;">
																<div class="product-action product-wishlist"> <i class="bx bx-heart"></i>
																</div>
															</a>
														</div>
													</div>
													<img src="{{asset('/frontend/assets/images/products/01.png')}}" class="card-img-top" alt="...">
													<div class="card-body">
														<div class="product-info">
															<a href="javascript:;">
																<p class="product-catergory font-13 mb-1">Catergory Name</p>
															</a>
															<a href="javascript:;">
																<h6 class="product-name mb-2">Product Short Name</h6>
															</a>
															<div class="d-flex align-items-center">
																<div class="mb-1 product-price">	<span class="me-1 text-decoration-line-through">$99.00</span>
																	<span class="fs-5">$49.00</span>
																</div>
																<div class="cursor-pointer ms-auto">	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																	<i class="bx bxs-star text-warning"></i>
																</div>
															</div>
                                                            <div class="product-action mt-2">
																<div class="grid grid-cols-2 gap-2">
																	<a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm">	<i class='bx bxs-cart-add'></i>Add</a>
																	<a href="javascript:;" class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bxs-show'></i>View</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<!--end row-->
									</div>
									<hr>
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;"><i class='bx bx-chevron-left'></i> Prev</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class='bx bx-chevron-right'></i></a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end shop area-->
			</div>
		</div>
		<!--end page wrapper -->

        <!--start quick view product-->
        @include('frontend.body.quickview')
		<!--end quick view product-->

		<!--Start Back To Top Button--> 
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->


@endsection