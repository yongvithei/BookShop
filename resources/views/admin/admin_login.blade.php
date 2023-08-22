<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Admin</title>

    <meta name="description" content="UntitleUI - Bootstrap 5 Admin Template &amp; UI Framework created by untitled and published on Unknown">
    <meta name="author" content="untitled">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="UntitleUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="UntitleUI">
    <meta property="og:description" content="UntitleUI - Bootstrap 5 Admin Template &amp; UI Framework created by untitled and published on Unknown">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <!--icons -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <link rel="stylesheet" id="css-main" href="assets/css/untitleui.min.css">
    @vite(['resources/css/app.css'])
</head>
<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo14@2x.jpg');">
            <div class="hero-static d-flex align-items-center bg-primary-dark-op">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <!-- Sign Up Block -->
                            <div class="block block-rounded mb-0" style="box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.1);">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Sign In</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option fs-sm" href="">Forgot Password?</a>
                                        <a class="btn-block-option" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="New Account">
                                            <i class="fa fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-1">


                                        <!-- Sign Up Form -->
                                        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <div class="row mb-1 justify-content-center">
                                            <div class="col-sm-10 col-md-8 col-xl-7">
                                                <a class="btn w-100 btn-alt-danger text-center" href="javascript:void(0)" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                                    <i class="fab fa-fw fa-google opacity-50 me-1"></i> Connect to Google
                                                </a>
                                            </div>
                                        </div>
                                        <div class="or-container"><div class="line-separator"></div> <div class="or-label">  or  </div><div class="line-separator"></div></div>
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <!-- Email Address or Username -->
                                            <div class="mb-4">

                                                <x-text-input id="login-username" class="form-control form-control-alt form-control-lg" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" placeholder="Username or Email" />

                                            </div>

                                            <!-- Password -->
                                            <div class="mb-1">

                                                <x-text-input id="login-password" class="form-control form-control-alt form-control-lg" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2 red-text" />
                                                <x-input-error :messages="$errors->get('login')" class="mt-2 " />
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="block mt-3">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="lg:col-lg-6 xxl:col-xxl-3 flex justify-center">
                                                    <button type="submit" class="bg-green-400 text-white px-6 py-2 rounded-lg hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 shadow-md" style="margin-bottom: 20px;">
                                                        Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Sign Up Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign Up Block -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->


<script src="assets/js/untitleui.app.min.js"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>
</html>
