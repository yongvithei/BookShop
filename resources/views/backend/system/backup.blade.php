@extends('admin.index')
@section('admin')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->


    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">

            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">{{ __('backup.system_setting') }}</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            {{ __('backup.backup_and_caches') }}
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- END Connections -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(isset($successMessage))
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif


            <!-- Connections -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('backup.clear_caches') }}</h3>
                </div>

                <div class="block-content">
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                {{ __('backup.clean_cache_description') }}
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-7">
                            <div class="row mb-4">
                                <label class="form-label mb-2">{{ __('backup.cache_and_optimize_system') }}</label>

                                <div class="col-sm-10 col-md-8 col-xl-6">
                                    <a class="btn w-100 btn btn-secondary text-center" href="{{ route('clear-cache') }}">
                                        <i class="far fa-trash-can opacity-50 me-1"></i> {{ __('backup.clean_now') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Connections -->
            <!-- Connections -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ __('backup.backup_system') }}</h3>
                </div>
                <div class="block-content">
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                {{ __('backup.backup_system_description') }}
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-7">
                            <div class="row mb-4">
                                <label class="form-label">{{ __('backup.schedule') }}</label>
                                <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="statusActive" name="status" value="Active" checked="">
                                        <label class="form-check-label" for="statusActive">{{ __('backup.daily_schedule') }}</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="form-label mb-2">{{ __('backup.manual_backup') }}</label>
                                <div class="col-sm-10 col-md-8 col-xl-6">
                                    <a class="btn w-100 btn btn-dark text-center" href="{{ route('backupall') }}">
                                        <i class="fa fa-database opacity-50 me-1"></i> {{ __('backup.backup_now') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="form-label mb-2">{{ __('backup.backup_only_database') }}</label>
                                <div class="col-sm-10 col-md-8 col-xl-6">
                                    <a class="btn w-100 btn btn-dark text-center" href="{{ route('dbdumps') }}">
                                        <i class="fa fa-database opacity-50 me-1"></i>{{ __('backup.backup_now') }}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    <!-- jQuery (required for DataTables plugin) -->

    <!-- Page JS Plugins -->


@endsection
