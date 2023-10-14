@extends('frontend.index')
@section('main')
@section('title')
    About
@endsection
    @php
        $siteinfo = Cache::remember('sitefooter', now()->addMinutes(30), function () {
        return App\Models\SiteInfo::find(1);
        });
    @endphp
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">{{ $siteinfo->name }}</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start page content-->
            
            <section class="py-0 py-lg-4">
                <div class="container">
                    <p>{{ $siteinfo->information }}</p>
                    <p>{{ $siteinfo->address }}</p>
                    <p>{{ $siteinfo->email }}</p>
                    <p>{{ $siteinfo->support_phone }}</p>
                </div>
            </section>

            <!--end start page content-->
        </div>
    </div>
    <!--end page wrapper -->

@endsection
