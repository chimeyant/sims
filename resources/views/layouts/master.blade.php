<!DOCTYPE html>
<html lang="en">
    <head><base href="">
    <meta charset="utf-8" />
    <title> @yield('title') | {{ config('app.name') }}</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ url('assets/plugins/global/plugins.bundle.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ url('assets/css/themes/layout/header/base/light.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/themes/layout/header/menu/light.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/themes/layout/brand/dark.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/themes/layout/aside/dark.css?v=7.0.4') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ url('assets/media/logos/favicon.ico') }}" />
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    @include('includes.mobileheader')
    {{-- Main --}}
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
           {{-- Asside Menu --}}
           @include('includes.menus')
        </div>

        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            {{-- Header  --}}
            @include('includes.header')

            {{-- Main Content --}}
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                @yield('content')
            </div>
            <!--begin::Scrolltop-->

            {{-- Footer  --}}
            @include('includes.footer')
        </div>
        <!--end::Page-->
    </div>

    @include('includes.userpanel')

    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>


    @include('includes.scripts')
    @yield('footscript')
</body>
</html>
