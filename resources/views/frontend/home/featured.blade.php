<!--start Featured product-->
<section class="py-4">
    <div class="container">
        <h5 class="text-uppercase mb-0 text-center text-3xl">{{ __('main.featured_products') }}</h5>
        <div class="d-flex align-items-center">
            <a href="/shop/feature" class="btn btn-dark btn-ecomm ms-auto rounded-0">{{ __('main.more_products') }}<i
                    class='bx bx-chevron-right'></i></a>
        </div>
        @php
            $products = App\Models\Product::with('category')
            ->where('status', 1)
            ->where('featured', 1)
            ->orderBy('id', 'DESC')
            ->limit(8)
            ->get();
        @endphp
        <hr />
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @foreach($products as $product)
                <div class="col my-3">
                    <div class="card rounded-lg product-card shadow-sm">
                        <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                            <div class="relative">
                                <img src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="card-img-top" alt="Product Image">
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
                                    <p class="product-catergory font-13 mb-1">
                                        @if(session()->get('locale') == 'en')
                                            {{ $product->category->name ? $product->category->name : ($product->category->cat_kh ?? 'N/A') }}
                                        @else
                                            {{ $product->category->cat_kh ? $product->category->cat_kh : ($product->category->name ?? 'N/A') }}
                                        @endif
                                    </p>
                                </a>
                                <a href="{{ url('product/details/'.$product->id.'/'.$product->name) }}">
                                    <h6 class="product-name mb-2">
                                        @if(session()->get('locale') == 'en')
                                            {{ $product->name ? $product->name : $product->pro_kh }}
                                        @else
                                            {{ $product->pro_kh ? $product->pro_kh : $product->name }}
                                        @endif
                                    </h6>
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
                                     @if($avarage == 0)
                                    @elseif($avarage == 1 || $avarage < 2)
                                   <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                    </div>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                    </div>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                    </div>
                                    @elseif($avarage == 4 || $avarage < 5)
                                     <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-light-4"></i>
                                    </div>
                                    @elseif($avarage == 5 || $avarage < 5)
                                     <div class="cursor-pointer ms-auto">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    @endif

                                </div>
                                <div class="product-action mt-2">
                                    <div class="grid grid-cols-2 gap-2">
                                            <a id="{{ $product->id }}" onclick="addToMiniCart('{{ $product->id }}', '{{ $product->name }}', {{ $product->price }}, {{ $product->pro_qty > 0 ? '1' : '0' }})" href="javascript:;" class="rounded-xl btn btn-dark btn-ecomm">
                                            <i class='bx bxs-cart-add'></i>{{ __('main.add') }}
                                        </a>
                                        <a href="javascript:;"
                                            class="rounded-xl btn bg-slate-100 btn-ecomm hover:bg-slate-200"
                                            data-bs-toggle="modal" data-bs-target="#QuickViewProduct" id="{{ $product->id }}" onclick="productView(this.id)"><i
                                                class='bx bxs-show'></i>{{ __('main.view') }}</a>
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
