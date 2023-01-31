<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <base href="../../../">
        <meta charset="utf-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="./images/favicon.png">
        <!-- Page Title  -->
        <title>Login | EDAMS</title>
        <!-- StyleSheets  -->
        <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.8.0">
        <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.8.0">
    </head>
    <body class="nk-body npc-default pg-auth">
        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                            
                            <div class="brand-logo pb-4 text-center">
                          
                             <a href="{{route('login')}}" class="logo-link">
                                <img class="" src="./images/mwe-logo.png" alt="logo">
                               
                                    </a>
                        </div>
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            
                                            <div class="nk-block-des pb-2 mx-2">
                                                <h4 class="text-center">ELECTRONIC DOCUMENT AND ASSET MANAGEMENT SYSTEM</h4>
                                            </div>
                                            
                                            <h6 class="nk-block-title text-primary text-center">LOGIN</h6>
                                            
                                        </div>
                                    </div>
                                    @if($errors->any())
                                    <div class="alert-example">
                                        <div class="alert alert-fill alert-danger alert-dismissible alert-icon">
                                            <em class="icon ni ni-cross-circle"></em>
                                            @foreach ($errors->all() as $error)
                                            {{$error}}
                                            @endforeach
                                            <button class="close" data-dismiss="alert"></button>
                                        </div>
                                        
                                    </div>
                                    @endif
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <div class="form-group pt-2">
                                            <div class="form-label-group">
                                                <label class="form-label" for="default-01">{{'Username'}} </label>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Enter your username " name="username">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="password">Password</label>
                                                <a class="link link-primary link-sm" href="#">Forgot Password?</a>
                                            </div>
                                            <div class="form-control-wrap">
                                                <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                        <!-- <div class="nk-footer nk-auth-footer-full">
                            <div class="container wide-lg">
                                <div class="row g-3">
                                    <div class="col-lg-6 order-lg-last">
                                        <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Terms & Condition</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Help</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nk-block-content text-center text-lg-left">
                                            <p class="text-soft">&copy; 2019 CryptoLite. All Rights Reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- JavaScript -->
        <script src="./assets/js/bundle.js?ver=1.8.0"></script>
        <script src="./assets/js/scripts.js?ver=1.8.0"></script>
    </html>