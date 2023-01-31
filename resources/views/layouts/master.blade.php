
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <!-- Page Title  -->
    <title>{{session('title')}} | EDAMS</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/assets/css/dashlite.css?ver=1.8.0">
    <!-- <link rel="stylesheet" href="/assets/css/daslitecustomfile.css"> -->
    <link id="skin-default" rel="stylesheet" href="/assets/css/theme.css?ver=1.8.0">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/sortable.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
            var APP_URL = {!! json_encode(url('/')) !!}
        </script>
</head>
    

<body class="nk-body npc-default ">
    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-dark">
            <div class="nk-apps-brand">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="/images/logo-small.png" srcset="/images/logo-small2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="/images/logo-dark-small.png" srcset="/images/logo-dark-small2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('dashboard')}}" class="nk-menu-link" title="Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('received_documents') }}" class="nk-menu-link" title="Document Manager">
                                        <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('document_manager_index')}}" class="nk-menu-link" title="Document Storage">
                                        <span class="nk-menu-icon"><em class="icon ni ni-folder"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('list_assets') }}" class="nk-menu-link" title="Assets">
                                        <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>
                                    </a>
                                </li>
                                <!-- <li class="nk-menu-item">
                                    <a href="{{route('list_tracks')}}" class="nk-menu-link" title="Tracks">
                                        <span class="nk-menu-icon"><em class="icon ni ni-exchange"></em></span>
                                    </a>
                                </li> -->
                                <li class="nk-menu-item">
                                    <a href="{{route('list_users')}}" class="nk-menu-link" title="Users">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('list_offices')}}" class="nk-menu-link" title="Settings">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                
                                <div class="nk-header-app-info">
                                    <span class="sub-text text-primary" style="font-size: 12px">Ministry of Water and Environment</span>
                                    <span class="lead-text fw-bold" style="font-size: 18px">ELECTRONIC DOCUMENT AND ASSET MANAGEMENT SYSTEM</span>
                                </div>
                            </div>
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                   
                                
                                    <li class="dropdown list-apps-dropdown d-lg-none">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-menu-circled"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                            <div class="dropdown-body">
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="html/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-dashlite bg-primary text-white"></em></span>
                                                            <span class="list-apps-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/chats.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat-circle bg-info-dim"></em></span>
                                                            <span class="list-apps-title">Chats</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/mailbox.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-inbox bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">Mailbox</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/messages.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-chat bg-success-dim"></em></span>
                                                            <span class="list-apps-title">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/apps/file-manager.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-folder bg-purple-dim"></em></span>
                                                            <span class="list-apps-title">File Manager</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/components.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-layers bg-secondary-dim"></em></span>
                                                            <span class="list-apps-title">Components</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="/demo2/ecommerce/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-cart bg-danger-dim"></em></span>
                                                            <span class="list-apps-title">Ecommerce Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo4/subscription/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-calendar-booking bg-primary-dim"></em></span>
                                                            <span class="list-apps-title">Subscription Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo5/crypto/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-bitcoin-cash bg-warning-dim"></em></span>
                                                            <span class="list-apps-title">Crypto Wallet Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/demo6/invest/index.html">
                                                            <span class="list-apps-media"><em class="icon ni ni-invest bg-blue-dim"></em></span>
                                                            <span class="list-apps-title">HYIP Invest Panel</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- .nk-dropdown-body -->
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>{{Auth::user()->lname[0] . Auth::user()->fname[0]}}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{Auth::user()->fullname()}}</span>
                                                        <span class="sub-text text-soft">{{Auth::user()->email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                                                       <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <em class="icon ni ni-signout"></em><span>Sign out</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    </li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="nk-sidebar" data-content="sidebarMenu">
                    @yield('side-menu')                    
                </div>
 -->
               
                @yield('content')

            

            
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="/js/jquery.autocomplete.min.js"></script>
    <script src="/assets/js/bundle.js?ver=1.8.0"></script>
    <script src="/assets/js/scripts.js?ver=1.8.0"></script>
    <script src="/assets/js/charts/gd-default.js?ver=1.8.0"></script>
    <script src="/assets/js/charts/gd-analytics.js?ver=1.8.0"></script>
    <script src="/assets/js/libs/jqvmap.js?ver=1.8.0"></script>
    <script src="/assets/js/example-chart.js?ver=1.8.0"></script>
    
    <!-- select2 for dropdown dialog -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</body>

</html>