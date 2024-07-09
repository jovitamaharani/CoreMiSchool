<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>{{ env('APP_NAME') }} | School</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('mobilelogo.png') }}" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin_assets/dist/css/style.min.css') }}" />
    @yield('style')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('preloader.png') }}" style="width:150px" alt="loader" class="lds-ripple" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('preloader.png') }}" style="width:150px" alt="loader" class="lds-ripple" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('school.layouts.sidebar')
        <!--  Sidebar End -->
                <!-- SignIn modal content -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('school.layouts.header')
            <!--  Header End -->
            <div class="px-4" style="padding-top: calc(70px + 15px);">
                <!--  Owl carousel -->
                @yield('content')
            </div>
        </div>
    </div>

    <!--  Customizer -->

    <!--  Customizer -->
    <!--  Import Js Files -->
    @yield('script')
    <script src="{{ asset('admin_assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--  core files -->
    <script src="{{ asset('admin_assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/custom.js') }}"></script>
    <!--  current page js files -->
    <script src="{{ asset('admin_assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/dashboard.js') }}"></script>
</body>

</html>
