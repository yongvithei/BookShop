<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Admin</title>

    <meta name="description" content="Admin">
    <meta name="author" content="Admin">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Admin">
    <meta property="og:site_name" content="UntitleUI">
    <meta property="og:description" content="UntitleUI Admin">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- UntitleUI framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/untitleui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
<!-- Page Container -->
<!--
  Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or One.layout('dark_mode_[on/off/toggle]')
-->
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed main-content-narrow sidebar-o-xs side-trans-enabled">

    <!-- Side Overlay--><!-- Sidebar -->
    @include('admin.body.sidebar')
    <!-- END Side Overlay --><!-- END Sidebar -->
    <!-- Header -->
    @include('admin.body.header')
    <!-- END Header -->

    <!-- here every thing -->
    @yield('admin')
    <!-- end here every thing -->

    <!-- Footer -->
    @include('admin.body.footer')
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    UntitleUI JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/untitleui.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/chart.js/chart.umd.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_pages_dashboard.min.js"></script>
</body>
</html>

