	<!--start slider section-->
	@php
	$sliders = Cache::remember('sliders', now()->addMinutes(30), function () {
	return App\Models\Slider::where('status', 'Active')
    ->select('image') 
    ->get();
	});
	@endphp

	<section class="slider-section">
	    <div class="first-slider">
	        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
	            <ol class="carousel-indicators">
	                @foreach($sliders as $key => $slider)
	                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
	                    class="{{ $key == 0 ? 'active' : '' }}"></li>
	                @endforeach
	            </ol>

	            <div class="carousel-inner relative lg:px-10 py-2">
	                @foreach($sliders as $key => $slider)
	                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} bg-dark-gery rounded-lg shadow-md">
	                    <div class="relative">
	                        <img src="{{ asset('storage/sliders/'.$slider->image) }}"
	                            class="w-full h-56 lg:h-96 rounded-lg shadow-md" alt="...">
	                        <a href="/shop"
	                            class="absolute bottom-24 left-1/4 transform -translate-x-1/2 -translate-y-1/6 bg-gray-100 text-dark px-4 py-2 rounded-md">Shop
	                            Now</a>
	                    </div>
	                </div>
	                @endforeach
	            </div>
	            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span
	                    class="carousel-control-prev-icon" aria-hidden="true"></span>
	                <span class="visually-hidden">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span
	                    class="carousel-control-next-icon" aria-hidden="true"></span>
	                <span class="visually-hidden">Next</span>
	            </a>
	        </div>
	    </div>
	</section>
	<!--end slider section-->