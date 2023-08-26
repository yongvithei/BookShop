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
                                <a class="link-fx" href="javascript:void(0)">Report</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                All
                            </li>
                        </ol>
                    </nav>
                </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <h2 class="content-heading">
               Report Order

            </h2>

            <!-- Interactive Options -->
            <div class="row">
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Search By Year</h3>
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
                            <label class="form-label">Select Year:</label>
                            <select name="year_name" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Open this select Year</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    Search
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-rtl block-header-default">
                            <h3 class="block-title">Search By User</h3>
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
                            <label class="form-label">Select User</label>
                            <select name="year_name" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Open this Select User</option>
                                <option value="user">user</option>
                                <option value="user2">user2</option>
                                <option value="user4">user4</option>
                                <option value="user6">user6</option>
                                <option value="user7">user7</option>
                            </select>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Search By Date</h3>
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
                            <div class="row mb-4">
                                <div class="col-xl-12">
                                    <label class="form-label" for="example-flatpickr-friendly">Search By Date</label>
                                    <input type="text" class="js-flatpickr form-control" id="example-flatpickr-friendly" name="example-flatpickr-friendly" placeholder="F j, Y" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header block-header-rtl block-header-default">
                            <h3 class="block-title">Search By Month</h3>
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
                            <label class="form-label">Select Month:</label>
                            <select name="month" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Open this select Month</option>
                                <option value="Janurary">Janurary</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="block-content">
                            <label class="form-label">Select Year:</label>
                            <select name="year_name" class="form-select mb-3" aria-label="Default select example">
                                <option selected="">Open this select Year</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-alt-primary">
                                    Search
                                </button>
                            </div>
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
