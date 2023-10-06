<!--start Featured product-->
<section class="py-4">
    <div class="container">
        <h5 class="text-uppercase mb-0 text-center text-3xl">{{ __('main.featured_products') }}</h5>
        <div class="d-flex align-items-center">
            <a href="javascript:;" class="btn btn-dark btn-ecomm ms-auto rounded-0">{{ __('main.more_products') }}<i
                    class='bx bx-chevron-right'></i></a>
        </div>
        @php
            $products = Cache::remember('product_f', now()->addMinutes(30), function () {
                return App\Models\Product::with('category')
                    ->where('status', 1)
                    ->where('featured', 1)
                    ->orderBy('id', 'DESC')
                    ->limit(8)
                    ->get();
            });
        @endphp
        <hr />
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @foreach($products as $product)
                <div class="col my-3">
                    <div class="card rounded-lg product-card shadow-sm">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                            <div class="relative">
                                <img src="{{ asset($product->thumbnail) }}" class="card-img-top" alt="...">
                                <div class="absolute top-2 right-2">
                                    <a id="{{ $product->id }}" onclick="addToWishList(this.id)" href="javascript:;" class="product-wishlist product-action">
                                        <i class="bx bx-heart text-red-500 text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="product-info">
                                <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">{{ $product->category->name ?? 'N/A' }}
                                    </p>
                                </a>
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                    <h6 class="product-name mb-2">{{$product->name}}</h6>
                                </a>
                                <div class="d-flex align-items-center">
                                    <div class="mb-1 product-price">
                                        @if($product->discount_price != NULL)
                                        <span class="me-1 text-decoration-line-through">$ {{$product->discount_price}}</span>
                                            <span class="fs-5">$ {{$product->price}}</span>
                                        @else
                                            <span class="fs-5">$ {{$product->price}}</span>
                                        @endif
                                    </div>
                                    <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="product-action mt-2">
                                    <div class="grid grid-cols-2 gap-2">
                                        <a href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm"> <i
                                                class='bx bxs-cart-add' ></i>Add</a>
                                        <a href="javascript:;"
                                            class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                            data-bs-toggle="modal" data-bs-target="#QuickViewProduct" id="{{ $product->id }}" onclick="productView(this.id)"><i
                                                class='bx bxs-show'></i>View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
    </div>
</section>
<!--end Featured product-->