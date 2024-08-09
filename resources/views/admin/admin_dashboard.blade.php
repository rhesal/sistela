<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Mordenize</title>
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
    <link rel="shortcut icon" type="image/png" href="{{ asset('dist/images/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('dist/libs/jquery-raty-js/lib/jquery.raty.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/libs/dropzone/dist/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Prism Js -->
    <link rel="stylesheet" href="{{ asset('dist/libs/prismjs/themes/prism-okaidia.min.css') }}">

    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('dist/libs/select2/dist/css/select2.min.css') }}">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('dist/images/logos/favicon.ico') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            @include('admin.body.sidebar')
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('admin.body.header')
            <!--  Header End -->
            @yield('admin')
        </div>
    </div>

    @include('sweetalert::alert')

    <!--  Import Js Files -->
    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/code/validate.min.js') }}"></script>
    <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--  core files -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <!--  current page js files -->

    <script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/js/plugins/toastr-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jqbootstrapvalidation/validation.js') }}"></script>
    <script src="{{ asset('dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/datatable/datatable-basic.init.js') }}"></script>
    <script src="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dist/js/forms/sweet-alert.init.js') }}"></script>
    <script src="{{ asset('dist/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('dist/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('dist/js/forms/select2.init.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard.js') }}"></script>

    <script>
        !(function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        })(window, document, jQuery);
    </script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>
