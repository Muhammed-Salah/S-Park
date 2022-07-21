<!doctype html>
<html class="fixed has-top-menu">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>BDKQ | @yield('title')</title>
    <meta name="keywords" content="BDK Qatar" />
    <meta name="description" content="Blood Donors Kerala - Qatar">
{{--    <meta name="author" content="okler.net">--}}

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('ui/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('ui/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('ui/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/morris/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('ui/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('ui/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('ui/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('ui/vendor/modernizr/modernizr.js') }}"></script>

</head>
<body>

@yield('content')

<!-- Vendor -->
<script src="{{ asset('ui/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('ui/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('ui/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('ui/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('ui/vendor/common/common.js') }}"></script>
<script src="{{ asset('ui/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('ui/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Specific Page Vendor -->
<script src="{{ asset('ui/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('ui/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('ui/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('ui/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('ui/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('ui/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('ui/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('ui/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('ui/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('ui/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('ui/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('ui/vendor/snap.svg/snap.svg.js') }}"></script>
<script src="{{ asset('ui/vendor/liquid-meter/liquid.meter.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/jquery.vmap.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('ui/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('ui/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('ui/js/theme.init.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('ui/js/examples/examples.header.menu.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.dashboard.js') }}"></script>

</body>
</html>
