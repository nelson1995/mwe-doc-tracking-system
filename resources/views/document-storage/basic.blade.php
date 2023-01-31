@extends('layouts.master')

@section('content')
            <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px -28px -32px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 24px 28px 32px;">
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Registry</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folders"></em></span>
                                    <span class="nk-menu-text">Open Registry</span>
                                </a>
                                    <ul class="nk-menu-sub">
                                        @foreach($documentTypes as $documentType)
                                            <li class="nk-menu-item">
                                                <a href="{{ route('show_document',$documentType->id) }}" class="nk-menu-link"><em class="icon ni ni-folder-fill"></em> <span class="nk-menu-text">{{ $documentType->type }} </span></a>
                                            </li>
                                        @endforeach
                                    </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folders"></em></span>
                                    <span class="nk-menu-text">Secure Registry</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('list_settings')}}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-archive"></em></span>
                                    <span class="nk-menu-text">Archives</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                         
                            </ul><!-- .nk-menu -->
                        </div></div></div></div>
                    <div class="simplebar-placeholder" style="width: 279px; height: 883px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 835px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                </div>

                @yield('body-content')
        

@endsection