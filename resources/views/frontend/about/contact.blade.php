@extends('frontend.index')
@section('main')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--start breadcrumb-->
        <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">Contact Us</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                        Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--end breadcrumb-->
        <!--start page content-->
        <section class="py-4">
            <div class="container">
                <h3 class="d-none">Google Map</h3>
                <div class="contact-map p-3 bg-light rounded-0 shadow-none">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.836488827363!2d103.2095014742702!3d13.109542887218648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31054a29b054941d%3A0x1d499446e74506f9!2sNorea%20Pagoda!5e0!3m2!1sen!2ssg!4v1694107879802!5m2!1sen!2ssg"
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
                                <button class="btn btn-dark btn-ecomm">@lang('main.send_message')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-3 bg-light">
                    <div class="address mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.address')</h6>
                        <p class="mb-0 font-12">@lang('main.street_name'), @lang('main.city'), @lang('main.country')</p>
                    </div>
                    <div class="phone mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.phone')</h6>
                        <p class="mb-0 font-13">@lang('main.toll_free') (123) 12331</p>
                        <p class="mb-0 font-13">@lang('main.mobile') : +885-08610XXXX</p>
                    </div>
                    <div class="email mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.email')</h6>
                        <p class="mb-0 font-13">mail@example.com</p>
                    </div>
                    <div class="working-days mb-3">
                        <h6 class="mb-0 text-uppercase">@lang('main.working_days')</h6>
                        <p class="mb-0 font-13">@lang('main.working_hours')</p>
                    </div>
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
