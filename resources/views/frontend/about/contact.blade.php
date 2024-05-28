@extends('frontend.index')
@section('main')
@section('title')
    Contact
@endsection
<!--start page wrapper -->
<div >
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">{{ __('main.contact_us') }}</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('main.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="javascript:;">{{ __('main.pages') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('main.contact_us') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start page content-->
            @php
                $siteinfo = Cache::remember('sitefooter', now()->addMinutes(30), function () {
                return App\Models\SiteInfo::find(1);
                });
            @endphp
        <section class="py-4">
            <div class="container">
                <h3 class="d-none">Google Map</h3>
                <div class="contact-map p-3 bg-light rounded-0 shadow-none">
                    <iframe
                        src="{{ $siteinfo->map }}"
                        class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </section>
        <section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="p-3 bg-light">
                    <form>
                        <div class="form-body">
                            <h6 class="mb-0 text-uppercase">@lang('main.drop_us_a_line')</h6>
                            <div class="my-3 border-bottom"></div>
                            <div class="mb-3">
                                <label class="form-label">@lang('main.enter_your_name')</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">@lang('main.enter_email')</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">@lang('main.phone_number')</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">@lang('main.message')</label>
                                <textarea class="form-control" rows="4" cols="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-dark btn-ecomm" disabled>@lang('main.send_message')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3 bg-light">
                    <div class="address mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.address')</h6>
                        <p class="mb-0 font-12">{{ session()->get('locale') == 'en' ? ($siteinfo->address ? $siteinfo->address : $siteinfo->address_kh) : ($siteinfo->address_kh ? $siteinfo->address_kh : $siteinfo->address) }}</p>
                    </div>
                    <div class="phone mb-3">
                        <h6 class="mb-0 text-uppercase">{{ __('main.phone_number') }}</h6>
                        <p class="mb-0 font-13">{{ $siteinfo->support_phone }}</p>
                    </div>
                    <div class="email mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.email')</h6>
                        <p class="mb-0 font-13">{{ $siteinfo->email }}</p>
                    </div>
{{--                    <div class="working-days mb-3">--}}
{{--                        <h6 class="mb-0 text-uppercase">@lang('main.working_days')</h6>--}}
{{--                        <p class="mb-0 font-13">@lang('main.working_hours')</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</section>

        <!--end start page content-->
    </div>
</div>
<!--end page wrapper -->

@endsection
