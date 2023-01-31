@extends('layouts.master')

@section('content')

                <div class="nk-sidebar">
                           <div class="nk-sidebar-inner" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px -28px -32px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; "><div class="simplebar-content" style="padding: 24px 28px 32px;">
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Main</h6>
                            </li><!-- .nk-menu-heading -->
                              
                            <li class="nk-menu-item">
                                <a href="{{route('list_offices')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                    <span class="nk-menu-text">Offices</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('list_branches')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-location"></em></span>
                                    <span class="nk-menu-text">Branches</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item active current-page">
                                <a href="{{route('list_sub_departments')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-building-fill"></em></span>
                                    <span class="nk-menu-text">Departments</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('list_departments')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-flag-fill"></em></span>
                                    <span class="nk-menu-text">Directorates</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Documents</h6>
                            </li><!-- .nk-menu-heading -->
                             <li class="nk-menu-item">
                                <a href="html/index-invest.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Document Types</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                             <li class="nk-menu-item">
                                <a href="html/index-invest.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-opt"></em></span>
                                    <span class="nk-menu-text">Categories</span>
                                </a>
                            </li>

                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Security & Access Control</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="{{route('list_roles')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                                    <span class="nk-menu-text">Roles</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="{{route('list_permissions')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
                                    <span class="nk-menu-text">Permissions</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                         
                        </ul><!-- .nk-menu -->
                    </div></div></div></div><div class="simplebar-placeholder" style="width: 279px; height: 883px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 835px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
           
                </div>


 <div class="nk-content ">
                <div class="container-fluid">
                        <div class="nk-content-inner">
                 <div class="nk-content-body">
                            @yield('body-content')
                </div>
            </div>
        </div>
    </div>



@endsection