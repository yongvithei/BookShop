<!--start top header wrapper-->
<div class="header-wrapper">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
						<div class="shiping-title text-uppercase font-13 d-none d-sm-flex">{{__('main.welcome')}} {{ optional(Auth::user())->name ?? 'To Our Shop' }}</div>
						<ul class="navbar-nav ms-auto d-none d-lg-flex">
							<li class="nav-item"> <a class="nav-link" href="">{{__('main.track_order')}}</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="//about">{{__('main.about')}}</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="">{{__('main.our_stores')}}</a>
							</li>
							<li class="nav-item">	<a class="nav-link" href="">{{__('main.contact')}}</a>
							</li>
							<li class="nav-item">	<a class="nav-link" href="javascript:;">{{__('main.help_faqs')}}</a>
							</li>
						</ul>

						<ul class="navbar-nav">
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">USD</a>
								<ul class="dropdown-menu dropdown-menu-lg-end">
									<li><a class="dropdown-item" href="#">{{__('main.usd')}}</a></li>
									<li><a class="dropdown-item" href="#">{{__('main.riel')}}</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<div class="lang d-flex gap-1">
										<div><i class="flag-icon flag-icon-um"></i>
										</div>
										<div><span>ENG</span>
										</div>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg-end">
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
									class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
									class="flag-icon flag-icon-kh me-2"></i><span>Khmer</span></a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav social-link ms-lg-2 ms-auto">
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0 px-6">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-8 col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="/">
										<img src="{{asset('/frontend/assets/images/logo-icon.png')}}" class="logo-icon" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="col col-md order-4 order-md-2">

							<div class="input-group flex-nowrap px-xl-4">

							<input type="text" class="form-control w-100" placeholder="{{__('main.search_for_products')}}">
								<!-- <select class="form-select flex-shrink-0" aria-label="Default select example" style="width: 10.5rem;">
									<option selected>All Categories</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>	 -->
								<span class="input-group-text cursor-pointer bg-transparent"><a href="/search"><i class='bx bx-search'></i></a></span>
							</div>

						</div>
						<div class="col-4 col-md-auto order-3 d-none d-xl-flex align-items-center">
							<div class="fs-1 text-black"><i class='bx bx-headphone'></i>
							</div>
							<div class="ms-2">
								<p class="mb-0 font-13">{{__('main.contact_us')}}</p>
								<h5 class="mb-0">+885 879697809</h5>
							</div>
						</div>
						<div class="col-4 col-md-auto order-2 order-md-4">
							<div class="top-cart-icons float-end">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
										 @auth
										 <li class="nav-item"><a href="/user/dashboard" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										  @else
										  <li class="nav-item"><a href="/login" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										   @endauth
										<li class="nav-item"><a href="/wishlist" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
										</li>
										<li class="nav-item dropdown dropdown-large">
											<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown">	<span class="alert-count" id="cartQty"></span>
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:;">
													<div class="cart-header">
														<p class="cart-header-title mb-0" ><span id="cartQty2"> </span> Items</p>
														<p class="cart-header-clear ms-auto mb-0">{{__('main.view_cart')}}</p>
													</div>
												</a>
												<div class="cart-list" id="miniCart">
													
												</div>
												<a href="javascript:;">
													<div class="text-center cart-footer d-flex align-items-center">
														<h5 class="mb-0">{{__('main.total')}}</h5>
														<h5 class="mb-0 ms-auto">Total <span id="cartSubTotal"> </span></h5>
													</div>
												</a>
												<div class="d-grid p-3 border-top">
													<a href="{{ route('mycart') }}" class="btn btn-dark btn-ecomm">{{__('main.checkout')}}</a>
												</div>

											</div>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top px-32">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
					    <div class="offcanvas-header">
					        <button class="btn-close float-end"></button>
					        <h5 class="py-2">Navigation</h5>
					    </div>
					    <ul class="navbar-nav">
					        <li class="nav-item"> <a class="nav-link" href="/">Home </a>
					        </li>
					        @php
					        $categories = Cache::remember('all_categories', now()->addMinutes(30), function () {
					        return App\Models\Category::where('status', 'Active')
					        ->orderBy('name', 'ASC')
					        ->get();
					        });
					        @endphp

					        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
					                data-bs-toggle="dropdown">Categories<i class='bx bx-chevron-down'></i></a>
					            <ul class="dropdown-menu">
					                @foreach($categories as $cate)
							        <li><a class="dropdown-item"
							                href="{{ url('product/category/'.$cate->id.'/'.$cate->slug) }}">{{ $cate->name }}</a>
							        </li>
							        @endforeach
							    </ul>
							</li>
							
							@php
							$cateWithSub = Cache::remember('category_with_subcategories', now()->addMinutes(30), function () {
							return App\Models\Category::with('subcategories')
							->where('status', 'Active')
							->orderBy('id')
							->limit(4)
							->get();
							});
							@endphp

							@foreach($cateWithSub as $category)
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
							        data-bs-toggle="dropdown">{{ $category->name }}<i class='bx bx-chevron-down'></i></a>
							    <ul class="dropdown-menu">
							        @foreach($category->subcategories as $subcategory)
							        <li><a class="dropdown-item"
							                href="{{ url('product/subcategory/'.$subcategory->id.'/'.$subcategory->sub_slug) }}">{{ $subcategory->sub_name }}</a>
							        </li>
							        @endforeach
							    </ul>
							</li>
							@endforeach

							<li class="nav-item"> <a class="nav-link" href="/shop">Shop</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--end top header wrapper-->

