<section class="py-4">
					<div class="container">
					<h5 class="text-uppercase mb-0 text-center text-3xl">{{ __('main.browse_category') }}</h5>
						<div class="d-flex align-items-center">
							<a href="" class="btn btn-dark ms-auto rounded-0">{{ __('main.view_all') }}<i class='bx bx-chevron-right'></i></a>
						</div>
						<hr/>
							@php
								$categories = Cache::remember('categories', now()->addMinutes(30), function () {
									return App\Models\Category::where('status', 'Active')
									->orderBy('name', 'ASC')
									->select('id', 'name','cat_kh','slug')
									->get();
								});
							@endphp
						<div class="product-grid py-2">
							<div class="browse-category owl-carousel owl-theme">
								@foreach($categories as $category)
									@php
										$products = Cache::remember('products_' . $category->id, now()->addMinutes(30), function () use ($category) {
											return App\Models\Product::where('category_id', $category->id)
												->where('status', 1)
												->select('id')
												->get();
										});
									@endphp
								<div class="item">
									<div class="card rounded-0 product-card border">
										<div class="card-footer text-center">
											<a href="{{ url('product/category/'.$category->id.'/'.$category->slug) }}">
											<h6 class="mb-1 text-uppercase"> @if(session()->get('locale') == 'en') {{ $category->name ?? $category->cat_kh ?? '' }} @else {{ $category->cat_kh ?? $category->name ?? '' }} @endif</h6>
											<p class="mb-0 font-12 text-uppercase">{{ count($products) }} {{ __('main.products') }}</p>
											</a>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</section>
