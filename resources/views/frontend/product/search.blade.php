@extends('frontend.index')
@section('main')
@section('title')
Product Searcing
@endsection
<!--start page wrapper -->
<div >
	<div class="page-content">
		<!--start breadcrumb-->
		<section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
			<div class="container">
				<div class="page-breadcrumb d-flex align-items-center">
					<h3 class="breadcrumb-title pe-3">{{ __('main.search_result_found') }} {{$item}}</h3>
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

							@if($products -> isEmpty())
							<div class="toolbox d-lg-flex align-items-center mb-3 gap-2 p-3 bg-white border">
								<div class="d-flex flex-wrap">
									<p class="mb-0 font-13 text-nowrap text-dark text-2xl">{{ __('main.found') }} (0)</p>
								</div>
							</div>
                                <h4 class="text-center text-danger">{{ __('main.product_not_found') }}</h4>
                            @else

							<div class="product-grid">
								<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
									<!-- loop -->
									@foreach($products as $item)
									<div class="col">
										<div class="card rounded-0 product-card">
											<div class="card-header bg-transparent border-bottom-0">
												<div class="d-flex align-items-center justify-content-end gap-3">
													<a href="javascript:;">
														<div class="product-action product-wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i class="bx bx-heart"></i>
														</div>
													</a>
												</div>
											</div>
											<img src="{{ $item->thumbnail ? asset($item->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="card-img-top" alt="Product Image">
											<div class="card-body">
												<div class="product-info">
													<a href="javascript:;">
														<p class="product-catergory font-13 mb-1">
                                                            @if(session()->get('locale') == 'en')
                                                                {{ $item->category->name ? $item->category->name : ($item->category->cat_kh ?? 'N/A') }}
                                                            @else
                                                                {{ $item->category->cat_kh ? $item->category->cat_kh : ($item->category->name ?? 'N/A') }}
                                                            @endif
                                                        </p>
													</a>
													<a href="javascript:;">
														<h6 class="product-name mb-2">
                                                            @if(session()->get('locale') == 'en')
                                                                {{ $item->name ? $item->name : $item->pro_kh }}
                                                            @else
                                                                {{ $item->pro_kh ? $item->pro_kh : $item->name }}
                                                            @endif
                                                        </h6>
													</a>
													<div class="d-flex align-items-center">
														<div class="mb-1 product-price">

															@if($item->discount_price != NULL)
															<span class="me-1 text-decoration-line-through">$ {{$item->discount_price}}</span>
															<span class="fs-5">$ {{$item->price}}</span>
															@else
															<span class="fs-5">$ {{$item->price}}</span>
															@endif

														</div>
{{--														<div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-warning"></i>--}}
{{--															<i class="bx bxs-star text-warning"></i>--}}
{{--															<i class="bx bxs-star text-warning"></i>--}}
{{--															<i class="bx bxs-star text-warning"></i>--}}
{{--															<i class="bx bxs-star text-warning"></i>--}}
{{--														</div>--}}
													</div>
													<div class="product-action mt-2">
														<div class="grid grid-cols-2 gap-2">
															<a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm"> <i class='bx bxs-cart-add'></i>{{ __('main.add') }}</a>
															<a href="javascript:;" class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200" data-bs-toggle="modal" data-bs-target="#QuickViewProduct" id="{{ $item->id }}" onclick="productView(this.id)"><i class='bx bxs-show'></i>{{ __('main.view') }}</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
									<!-- loop -->
								</div>
								<!--end row-->
							</div>
                                <hr class="mt-3">
                                <nav class="d-flex justify-end" aria-label="Page navigation">
                                    {{ $products->links() }}
                                </nav>
							@endif
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
