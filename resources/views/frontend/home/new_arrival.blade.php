<section class="py-4">
					<div class="container">
					<h5 class="text-uppercase mb-0 text-center text-3xl">{{ __('main.new_arrivals') }}</h5>
						<div class="d-flex align-items-center">
							<a href="/shop/new" class="btn btn-dark ms-auto rounded-0">{{ __('main.view_all') }}<i class='bx bx-chevron-right'></i></a>
						</div>
					<hr/>
					@php
                        $productn = App\Models\Product::with('category')
                        ->where('status', 1)
                        ->where('featured', 1)
                        ->orderBy('id', 'ASC')
                        ->limit(9)
                        ->get();

                    @endphp
						<div class="product-grid">
							<div class="new-arrivals owl-carousel owl-theme">
								@foreach($productn as $product)
								<!-- loop -->
								<div class="item my-3">
									<div class="card rounded-lg product-card shadow-sm">
										<div class="bg-transparent border-bottom-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="absolute top-2 right-2">
												<a id="{{ $product->id }}" onclick="addToWishList(this.id)" href="javascript:;">
													<div class="product-wishlist product-action"> <i class='bx bx-heart'></i>
													</div>
												</a>
											</div>
										</div>
										<a href="{{ url('product/details/'.$product->id.'/'.$product->slug) }}">
											<img src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="card-img-top" alt="Product Image">
										</a>

									</div>
										<div class="card-body">
											<div class="product-info">
												<a href="{{ url('product/category/'.$product->category->id.'/'.$product->category->slug) }}">
													<p class="product-catergory font-13 mb-1">
                                                        @if(session()->get('locale') == 'en')
                                                            {{ $product->category->name ? $product->category->name : ($product->category->cat_kh ?? 'N/A') }}
                                                        @else
                                                            {{ $product->category->cat_kh ? $product->category->cat_kh : ($product->category->name ?? 'N/A') }}
                                                        @endif
                                                    </p>
												</a>
												<a href="{{ url('product/details/'.$product->id.'/'.$product->slug) }}">
													<h6 class="product-name mb-2">
                                                        @if(session()->get('locale') == 'en')
                                                            {{ $product->name ? $product->name : $product->pro_kh }}
                                                        @else
                                                            {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                                        @endif</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price">
														@if($product->discount_price != NULL)
															<span class="me-1 text-decoration-line-through">{{$product->discount_price}} {{ __('main.khr') }}</span>
															<span class="fs-5">{{$product->price}} {{ __('main.khr') }}</span>
														@else
															<span class="fs-5">{{$product->price}} {{ __('main.khr') }}</span>
														@endif
													</div>
													@php
													$avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
													@endphp
													<div class="cursor-pointer ms-auto">	<span>{{ number_format($avarage, 1) }}</span>  <i class="bx bxs-star text-warning"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="grid grid-cols-2 gap-2">
														<a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm" id="{{ $product->id }}" onclick="addToMiniCart('{{ $product->id }}','{{ $product->name }}', {{ $product->price }},{{ $product->pro_qty > 0 ? '1' : '0' }})"> <i class='bx bxs-cart-add'></i>{{ __('main.add') }}</a>
														<a href="javascript:;" class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200" data-bs-toggle="modal" data-bs-target="#QuickViewProduct" id="{{ $product->id }}" onclick="productView(this.id)"><i class='bx bxs-show'></i>{{ __('main.view') }}</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- loop -->
								@endforeach
							</div>
						</div>
					</div>
				</section>
