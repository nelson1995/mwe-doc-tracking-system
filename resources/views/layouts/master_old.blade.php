
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MWE Tracking System</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="/assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-133433427-1');
    </script>


    <!--  css for document file manager -->
    <!-- Flatpickr -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="document-manager-assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/owl.carousel.css">
    <link rel="stylesheet" href="document-manager-assets/css/owl.theme.css">
    <link rel="stylesheet" href="document-manager-assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="document-manager-assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="document-manager-assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="document-manager-assets/css/responsive.css">
    <!-- OTHER LIBS -->

    <link rel="stylesheet" type="text/css" href="/assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">

    <script type="text/javascript">
            var APP_URL = {!! json_encode(url('/')) !!}
    </script>
   <!-- jQuery -->
    <script src="/assets/vendor/jquery.min.js"></script>
    <script src="/assets/vendor/jquery-ui.min.js"></script>
</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand ">
                            <span>MWE Tracking System</span>
                        </a>

                        <form class="search-form d-none d-sm-flex flex" action="index.html">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                            <input type="text" class="form-control" placeholder="Search">
                        </form>


                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="mr-1 d-flex-inline">
                                        <span class="text-light">Adrian D.</span>
                                    </span>
                                    <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>Adrian Demian</strong></div>
                                        <div class="text-muted">@adriandemian</div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="index.html"><i class="material-icons">dvr</i> Dashboard</a>
                                    <a class="dropdown-item" href="profile.html"><i class="material-icons">account_circle</i> My profile</a>
                                    <a class="dropdown-item" href="edit-account.html"><i class="material-icons">edit</i> Edit account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html"><i class="material-icons">exit_to_app</i> Logout</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <!-- CONTENT -->
                <div class="mdk-drawer-layout__content page">
                    @yield('content')

                </div>

                <!-- LEFT SIDE MENU -->
                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start" data-position="left" data-domfactory-upgraded="mdk-drawer" data-closing="true" data-persistent="" data-opened=""><div class="mdk-drawer__scrim" style=""></div>
                    <div class="mdk-drawer__content" style="">
                        <div class="sidebar sidebar-left sidebar-p-t ps ps--active-y sidebar-dark bg-dark" data-perfect-scrollbar="">
                            <div class="sidebar-heading">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active open">
                                    <a class="sidebar-menu-button"  href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Documents</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{route('list_tracks')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                        <span class="sidebar-menu-text">Tracks</span>
                                    </a>
                                </li>
                            </ul>
                                <div class="sidebar-heading">Settings</div>
                             <ul class="sidebar-menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{route('list_departments')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_balance</i>
                                        <span class="sidebar-menu-text">Departments</span>
                                    </a>
                                </li>
                                 <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{route('list_sub_departments')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                        <span class="sidebar-menu-text">Sub Departments</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{route('list_offices')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_city</i>
                                        <span class="sidebar-menu-text">Offices</span>
                                    </a>
                                </li>
                                  <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{route('list_branches')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                        <span class="sidebar-menu-text">Branches</span>
                                    </a>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                        <span class="sidebar-menu-text">Personnel</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button collapsed" data-toggle="collapse" href="#layouts_menu" aria-expanded="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                        <span class="sidebar-menu-text">Other</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="layouts_menu" style="">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="ui-forms.html">
                                                <span class="sidebar-menu-text">Roles and Permission</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fluid-ui-forms.html">
                                                <span class="sidebar-menu-text">Document Categories</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-ui-forms.html">
                                                <span class="sidebar-menu-text">Document Types</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>

                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->


    <!-- Bootstrap -->
    <script src="/assets/vendor/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="/assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="/assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="/assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="/assets/js/toggle-check-all.js"></script>
    <script src="/assets/js/check-selected-row.js"></script>
    <script src="/assets/js/dropdown.js"></script>
    <script src="/assets/js/sidebar-mini.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="/assets/js/app-settings.js"></script>



    <!-- Flatpickr -->
    <script src="/assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="/assets/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="/assets/vendor/Chart.min.js"></script>


    <!-- App Charts JS -->
    <script src="/assets/js/charts.js"></script>
    <script src="/assets/js/progress-charts.js"></script>

    <!-- Chart Samples -->
    <script src="/assets/js/page.analytics.js"></script>

    <!-- Vector Maps -->
    <script src="/assets/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="/assets/js/vector-maps.js"></script>


    <script src="/assets/vendor/sweetalert.min.js" type="text/javascript"></script>
    <script src="/assets/vendor/sweetalert2.all.js" type="text/javascript"></script>
    <script src="/assets/vendor/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/vendor/dataTables.buttons.min.js"></script>
    <script src="/assets/vendor/select2/select2.min.js"></script>


    <script src="/assets/js/sortable.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.autocomplete.min.js"></script>



     <!-- for document views edited by nelson -->
     <!-- modernizr JS ============================================ -->
     <script src="{{ asset('document-manager-assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery
    ============================================ -->
     <!-- <script src="{{ asset('document-manager-assets/js/vendor/jquery-1.11.3.min.js') }}"></script> -->

      <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 -->
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('document-manager-assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('document-manager-assets/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('document-manager-assets/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('document-manager-assets/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('document-manager-assets/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/tab.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('document-manager-assets/js/plugins.js') }}"></script>
        <!-- main JS ============================================ -->
        <script src="{{ asset('document-manager-assets/js/main.js') }}"></script>
    </div>
</body>

</html>
