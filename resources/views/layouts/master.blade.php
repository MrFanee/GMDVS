<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'My Website')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/srtdash/js/popper.min.js') }}"></script>

    <!-- SRTDash native css -->
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/themify-icons.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/metisMenu.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/owl.carousel.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/slicknav.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/typography.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/default-css.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/srtdash/css/responsive.css') }}"> --}}
    <!-- Custom css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}"> --}}
    <!-- modernizr css -->
    {{-- <script src="{{ asset('vendor/srtdash/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/vendor/jquery-2.2.4.min.js') }}"></script> --}}

    @yield('css')

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <aside id="left-panel" class="left-panel">
            @include('layouts.navbar')
    </aside>

    <div id="right-panel" class="right-panel">
        @include('layouts.header')
        <div class="content">
            {{-- @include('layouts.widgets') --}}
            @yield('content')
        </div>
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/jquery.matchHeight.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script src="{{ asset('vendor/srtdash/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/plugins.js') }}"></script>
    <script src="{{ asset('vendor/srtdash/js/scripts.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
    @include('sweetalert::alert')
    <!-- Custom js -->
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/custom-general.js') }}"></script> --}}


    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

        });
    </script>

    @stack('js')
</body>
</html>
