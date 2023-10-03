				<section class="py-4 border-top">
					<div class="container">
						<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
							<div class="col">
								<div class="bestseller-list mb-3">
								<h6 class="mb-3 text-center text-base font-bold hover:underline">{{ __('main.best_selling_products') }}</h6>
								@foreach($news as $new)
								<!-- loop -->
									<div class="d-flex align-items-center my-2">
										<div class="bottom-product-img">
											<a href="">
												<img src="{{ asset($new->thumbnail) }}" width="100" alt="">
											</a>
										</div>
										<div class="ms-0">
											<h6 class="fw-light mb-1">{{ $new->name }}</h6>
											<div class="rating font-12"> <i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
											</div>
										@if($new->discount_price != NULL)
											<p class="mb-0"><strong>$ {{$new->discount_price}}</strong></p>
											@else
											<p class="mb-0"><strong>$ {{$new->price}}</strong></p>
											@endif
										</div>
									</div>
									<hr/>
									<!-- loop -->
									@endforeach
								</div>
							</div>
							<div class="col">
								<div class="featured-list mb-3">
									<h6 class="mb-3 text-center text-base font-bold hover:underline">Featured Products</h6>
									@foreach($featureds as $featured)
									<div class="d-flex align-items-center my-2">
										<div class="bottom-product-img">
											<a href="">
												<img src="{{ asset($featured->thumbnail) }}" width="100" alt="">
											</a>
										</div>
										<div class="ms-0">
											<h6 class="fw-light mb-1">{{ $featured->name }}</h6>
											<div class="rating font-12"> <i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
											</div>
											@if($new->discount_price != NULL)
											<p class="mb-0"><strong>$ {{$featured->discount_price}}</strong></p>
											@else
											<p class="mb-0"><strong>$ {{$featured->price}}</strong></p>
											@endif
										</div>
									</div>
									<hr/>

								@endforeach
								</div>
							</div>
							<div class="col">
								<div class="new-arrivals-list mb-3">
									<h6 class="mb-3 text-center text-base font-bold hover:underline">New arrivals</h6>
									@foreach($news as $new)
									<div class="d-flex align-items-center my-2">
										<div class="bottom-product-img">
											<a href="">
												<img src="{{ asset($new->thumbnail) }}" width="100" alt="">
											</a>
										</div>
										<div class="ms-0">
											<h6 class="fw-light mb-1">{{ $new->name }}</h6>
											<div class="rating font-12"> <i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
											</div>
											@if($new->discount_price != NULL)
											<p class="mb-0"><strong>$ {{$new->discount_price}}</strong></p>
											@else
											<p class="mb-0"><strong>$ {{$new->price}}</strong></p>
											@endif
										</div>
									</div>
									<hr/>
									@endforeach

								</div>
							</div>
							<div class="col">
								<div class="top-rated-products-list mb-3">
									<h6 class="mb-3 text-center text-base font-bold hover:underline">Top rated Products</h6>
									@foreach($featureds as $featured)
									<div class="d-flex align-items-center my-2">
										<div class="bottom-product-img">
											<a href="">
												<img src="{{ asset($featured->thumbnail) }}" width="100" alt="">
											</a>
										</div>
										<div class="ms-0">
											<h6 class="fw-light mb-1">{{ $featured->name }}</h6>
											<div class="rating font-12"> <i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
												<i class="bx bxs-star text-warning"></i>
											</div>
											@if($new->discount_price != NULL)
											<p class="mb-0"><strong>$ {{$featured->discount_price}}</strong></p>
											@else
											<p class="mb-0"><strong>$ {{$featured->price}}</strong></p>
											@endif
										</div>
									</div>
									<hr/>
									@endforeach
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
