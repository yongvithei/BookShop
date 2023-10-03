<section class="py-4">
    <div class="container">
        <h3 class="d-none">{{ __('main.brands') }}</h3>
        <div class="brand-grid">
            <div class="brands-shops owl-carousel owl-theme border">
                @foreach($partners as $partner)
                <!-- loop -->
                <div class="item border-end">
                    <div class="p-4">
                        <a href="javascript:;">
                            <img src="{{ asset('storage/images/'.$partner->avatar) }}" class="img-fluid" alt="...">
                        </a>
                    </div>
                </div>
                <!-- loop -->
                @endforeach
            </div>
        </div>
    </div>
</section>
