 @extends('admin.index')
@section('admin')


    <!-- UntitleUI framework -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/flatpickr/flatpickr.min.css')}}">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">

                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">

                    <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <a class="link-fx" href="javascript:void(0)">{{ __('part_s.report') }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                {{ __('part_s.all') }}
                            </li>
                        </ol>
                    </nav>
                </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">
                {{ __('part_s.report_order') }}
            </h2>


            <!-- Interactive Options -->
            <div class="row">
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                {{ __('part_s.search_by_year') }}
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form method="post" action="{{ route('search-by-year')}}">
		                    @csrf
                                <label class="form-label">
                                    {{ __('part_s.select_year') }}
                                </label>

                                <select name="year_number" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">{{ __('part_s.open_select_year') }}</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    {{ __('part_s.search') }}
                                </button>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-rtl block-header-default">
                            <h3 class="block-title">{{ __('part_s.search_by_user') }}</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </div>
                        </div>

                        <div class="block-content">

                            <label class="form-label">{{ __('part_s.select_user') }}</label>
                            <select name="year_name" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">{{ __('part_s.show_all_users') }}</option>
                            </select>
                            <div class="mb-3">
                                <a href="/search/by/name" class="btn btn-alt-primary">
                                    {{ __('part_s.search') }}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">{{ __('part_s.search_by_date') }}</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form method="post" action="{{ route('search-by-date')}}">
		                    @csrf
                            <div class="row mb-4">
                                    <div class="col-xl-12">
                                        <label class="form-label" for="date">{{ __('part_s.search_by_date_label') }}</label>
                                        <input type="text" class="js-flatpickr form-control" id="date" name="date" placeholder="F j, Y" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                    </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    {{ __('part_s.search_button') }}
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-rtl block-header-default">
                            <h3 class="block-title">
                                {{ __('part_s.search_by_month_heading') }}
                            </h3>

                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                              <form method="post" action="{{ route('search-by-month')}}">
		                    @csrf
                                  <label class="form-label">
                                      {{ __('part_s.select_month_label') }}
                                  </label>
                                  <select name="month" class="form-select mb-3" aria-label="Default select example">
                                      <option selected="">
                                          {{ __('part_s.select_month_default_option') }}
                                      </option>
                                      <option value="Janurary">{{ __('part_s.january') }}</option>
                                      <option value="February">{{ __('part_s.february') }}</option>
                                      <option value="March">{{ __('part_s.march') }}</option>
                                      <option value="April">{{ __('part_s.april') }}</option>
                                      <option value="May">{{ __('part_s.may') }}</option>
                                      <option value="Jun">{{ __('part_s.june') }}</option>
                                      <option value="July">{{ __('part_s.july') }}</option>
                                      <option value="August">{{ __('part_s.august') }}</option>
                                      <option value="September">{{ __('part_s.september') }}</option>
                                      <option value="October">{{ __('part_s.october') }}</option>
                                      <option value="November">{{ __('part_s.november') }}</option>
                                      <option value="December">{{ __('part_s.december') }}</option>
                            </select>
                            <label class="form-label"> {{ __('part_s.select_year_label') }}</label>
                                <select name="year" class="form-select mb-3" aria-label="Default select example">
                                    <option selected=""> {{ __('part_s.select_year_default_option') }}</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-alt-primary">
                                        {{ __('part_s.search_button') }}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END Interactive Options -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{asset('admin/assets/js/lib/jquery.min.js')}}"></script>
    <!-- Page JS Plugins -->


    <script src="{{ asset('admin/assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <script>One.helpersOnLoad(['js-flatpickr']);</script>



@endsection
