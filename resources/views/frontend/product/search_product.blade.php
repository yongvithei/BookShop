@if($products -> isEmpty())
<h4 class="text-center text-danger">{{ __('main.product_not_found') }}</h4>
@else

<div class="product-grid">
    <!-- loop -->
    @foreach($products as $item)
    <div class="card rounded-0 product-card">
        <div class="d-flex align-items-center justify-content-end gap-3 position-absolute end-0 top-0 m-3">
            <a href="javascript:;">
                <div class="product-wishlist product-action"> <i class="bx bx-heart"></i>
                </div>
            </a>
        </div>
        <div class="row g-0">
            <div class="col-md-2">
                <img src="{{ $item->thumbnail ? asset($item->thumbnail) : asset('/storage/images/pro_img.jpg') }}" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div class="product-info">
                        <a href="{{ url('product/details/'.$item->id.'/'.$item->name) }}">
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
                                <span class="fs-5">$ {{$item->discount_price}}</span>
                                @else
                                <span class="fs-5">$ {{$item->price}}</span>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- loop -->
</div>
<hr>

@endif
