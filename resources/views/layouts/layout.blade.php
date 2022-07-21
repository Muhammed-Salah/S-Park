<!doctype html>
<html class="fixed has-top-menu">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>S-Park | @yield('title')</title>
    <meta name="keywords" content="S-Park" />
    <meta name="description" content="Parking slot booking system">
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
    <link rel="stylesheet" href="{{ asset('ui/vendor/chartist/chartist.min.css') }}" />
    <link rel="stylesheet" href="{{asset('ui/vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('ui/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('ui/vendor/pnotify/pnotify.custom.css')}}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/datatables/media/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/dropzone/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('ui/vendor/dropzone/dropzone.css') }}" />

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
<section class="body">

    <!-- start: header -->
    <header class="header header-nav-menu header-nav-top-line">
        <div class="logo-container">
{{--            <a href="#" class="logo" style="margin: 3px 0 0 15px;">--}}
{{--                <img src="#" width="50" height="50" alt="Blood bank kerala - Qatar" />--}}
{{--            </a>--}}
            <button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
                <i class="fas fa-bars"></i>
            </button>

            <!-- start: header nav menu -->
            <div class="header-nav collapse">
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
                            <li class="@if($active === 'Place') active @endif">
                                <a class="nav-link" href="{{route('place.index')}}">
                                    Place
                                </a>
                            </li>
                            <li class="@if($active === 'Vehicle') active @endif">
                                <a class="nav-link" href="{{route('vehicle.index')}}">
                                    Vehicle
                                </a>
                            </li>
                            <li class="dropdown @if($active === 'Parking') active @endif">
                                <a class="nav-link" href="{{route('park.index')}}">
                                    Parking
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- end: header nav menu -->
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                        <span class="name">{{ Auth::user()->name }}</span>
                        <span class="role">{{ Auth::user()->email }}</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>S-Park</h2>

                <div class="right-wrapper text-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="#">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li><span>@yield('page-header')</span></li>
                    </ol>

                    <a class="sidebar-right-toggle"><i class="fas fa-syringe"></i></a>
                </div>
            </header>

            @yield('content')

        </section>
    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

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
<script src="{{ asset('ui/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('ui/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('ui/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('ui/vendor/dropzone/dropzone.js') }}"></script>
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
<script src="{{ asset('ui/vendor/chartist/chartist.js') }}"></script>
{{--<script src="{{ asset('ui/vendor/jqvmap/jquery.vmap.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>--}}
{{--<script src="{{ asset('ui/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>--}}
<script src="{{ asset('ui/vendor/select2/js/select2.js') }}"></script>
<script src="{{ asset('ui/vendor/pnotify/pnotify.custom.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js') }}"></script>
<script src="{{ asset('ui/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}"></script>
<script src="{{ asset('ui/vendor/ios7-switch/ios7-switch.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('ui/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('ui/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('ui/js/theme.init.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('ui/js/examples/examples.header.menu.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.dashboard.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.modals.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.datatables.default.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.datatables.row.with.details.js') }}"></script>
<script src="{{ asset('ui/js/examples/examples.datatables.tabletools.js') }}"></script>
<script src={{ asset('ui/js/examples/examples.charts.js') }}></script>
<script src={{ asset('ui/js/examples/examples.advanced.form.js') }}></script>

</body>
</html>
