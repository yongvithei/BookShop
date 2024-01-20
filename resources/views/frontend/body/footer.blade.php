
	<!-- Footer Area -->
    <footer class="bg-slate-50">
			<div
			  class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8"
			>
			<hr>
			  <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

				<div>
				  <div class="text-teal-600">
					<!-- svg image -->
				  </div>
				@php
					$siteinfo = Cache::remember('sitefooter', now()->addMinutes(30), function () {
						return App\Models\SiteInfo::find(1);
					});
				@endphp
				  <p class="mt-2 max-w-xs text-gray-500">


                      @if(session()->get('locale') == 'en')
                          {{ $siteinfo->address }}
                      @else
                          {{ $siteinfo->address_kh }}
                      @endif
                      <br>
				  {{ $siteinfo->support_phone }}
				  </p>

				  <ul class="mt-8 flex gap-6">
					<li>
					  <a
						href="{{ $siteinfo->facebook }}"
						rel="noreferrer"
						target="_blank"
						class="text-gray-700 transition hover:opacity-75"
					  >
						<span class="sr-only">{{__('main.facebook')}}</span>

						<svg
						  class="h-6 w-6"
						  fill="currentColor"
						  viewBox="0 0 24 24"
						  aria-hidden="true"
						>
						  <path
							fill-rule="evenodd"
							 d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"
							clip-rule="evenodd"
						  />
						</svg>
					  </a>
					</li>

					<li>
					  <a
						href="{{ $siteinfo->telegram }}"
						rel="noreferrer"
						target="_blank"
						class="text-gray-700 transition hover:opacity-75"
					  >
						<span class="sr-only">{{__('main.telegram')}}</span>

						<svg
						  class="h-6 w-6"
						  fill="currentColor"
						  viewBox="0 0 24 24"
						  aria-hidden="true"
						>
						  <path
							fill-rule="evenodd"
							d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"
							clip-rule="evenodd"
						  />
						</svg>
					  </a>
					</li>
<li>
					  <a
						href="{{ $siteinfo->facebook }}"
						rel="noreferrer"
						target="_blank"
						class="text-gray-700 transition hover:opacity-75"
					  >
						<span class="sr-only">{{__('main.instagram')}}</span>

						<svg
						  class="h-6 w-6"
						  fill="currentColor"
						  viewBox="0 0 24 24"
						  aria-hidden="true"
						>
						  <path
							fill-rule="evenodd"
							d="M12 0c-6.626 0-12 5.372-12 12 0 6.627 5.374 12 12 12 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12zm0 5.5c-3.866 0-7 2.902-7 6.481 0 2.04 1.018 3.86 2.609 5.048v2.471l2.383-1.308c.636.176 1.31.271 2.008.271 3.866 0 7-2.902 7-6.482 0-3.579-3.134-6.481-7-6.481zm.696 8.728l-1.783-1.901-3.478 1.901 3.826-4.061 1.826 1.901 3.435-1.901-3.826 4.061z"
							clip-rule="evenodd"
						  />
						</svg>
					  </a>
					</li>
				  </ul>
				</div>

				<div
				  class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4"
				>
				  <div>
					<p class="font-medium text-gray-900">{{__('main.links')}}</p>

					<ul class="mt-6 space-y-4 text-sm">
					  <li>
						<a href="/" class="text-gray-700 transition hover:opacity-75">
						{{__('main.home')}}
						</a>
					  </li>

					  <li>
						<a href="/shop" class="text-gray-700 transition hover:opacity-75">
						{{__('main.shop')}}
						</a>
					  </li>

					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						{{__('main.products')}}
						</a>
					  </li>

					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						{{__('main.categories')}}
						</a>
					  </li>
					</ul>
				  </div>
				  <div>
					<p class="font-medium text-gray-900">{{__('main.policy_and_privacy')}}</p>
					<ul class="mt-6 space-y-4 text-sm">
					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						</a>
					  </li>
					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						{{__('main.returns_policy')}}
						</a>
					  </li>
					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						{{__('main.refund_policy')}}
						</a>
					  </li>
					</ul>
				  </div>
				  <div>
					<p class="font-medium text-gray-900">{{__('main.customer_service')}}</p>
					<ul class="mt-6 space-y-4 text-sm">
					  <li>
						<a href="/contact" class="text-gray-700 transition hover:opacity-75">
						{{__('main.contact')}}
						</a>
					  </li>
					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						  {{__('main.faqs')}}
						</a>
					  </li>
					  <li>
						<a href="#" class="text-gray-700 transition hover:opacity-75">
						{{__('main.live_chat')}}
						</a>
					  </li>
					</ul>
				  </div>
				  <div>
					<p class="font-medium text-gray-900">{{__('main.company')}}</p>
					<ul class="mt-6 space-y-4 text-sm">
					  <li>
						<a href="/contact" class="text-gray-700 transition hover:opacity-75">
						{{__('main.map')}}
						</a>
					  </li>
					  <li>
						<a href="/about" class="text-gray-700 transition hover:opacity-75">
						{{__('main.about_us')}}
						</a>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <p class="text-xs text-gray-500">
				&copy; 2024. {{__('main.credit')}}
			  </p>
			</div>
		</footer>
		<!-- //Footer Area -->
