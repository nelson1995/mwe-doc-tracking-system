@extends('layouts.master')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <!-- <p>Welcome to the EDAMS Dashboard</p> -->
                                </div>
                            </div><!-- .nk-block-head-content -->
                                
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-inner">
                                                <div class="row ">
                                                    <div class="col-xl-3 col-lg-6 col-12">
                                                        <div class="card text-white bg-info">
                                                            <div class="card-inner">
                                                                <h5 class="card-title">Pending</h5>
                                                                
                                                                <div class="">
                                                                    <h1>23</h1>
                                                                    <span>documents</span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6 col-12">
                                                        <div class="card text-white bg-success">
                                                            <div class="card-inner">
                                                                <h5 class="card-title">Received</h5>
                                                                
                                                                <div class="">
                                                                    <h1>10</h1>
                                                                    <span>documents</span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6 col-12">
                                                        <div class="card text-white bg-warning">
                                                            <div class="card-inner">
                                                                <h5 class="card-title">Submitted</h5>
                                                                
                                                                <div class="">
                                                                    <h1>15</h1>
                                                                    <span>documents</span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-xl-3 col-lg-6 col-12">
                                                        <div class="card text-white bg-primary">
                                                            <div class="card-inner">
                                                                <h5 class="card-title">Completed</h5>
                                                                
                                                                <div class="">
                                                                    <h1>45</h1>
                                                                    <span>documents</span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                </div><!-- .card -->
                                            </div>
                                        </div>
                                        <!-- .col -->
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="card">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-3">
                                                            <div class="card-title">
                                                                <h6 class="title"> Submitted And Received Documents</h6>
                                                                <p>In last 15 days submitted and received overview.</p>
                                                            </div>
                                                        </div>
                                                <div class="nk-order-ovwg-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                        <canvas class="order-overview-chart chartjs-render-monitor" id="orderOverview" style="display: block; " width="1200" height="500"></canvas>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                                            <div class="card-inner">
                                                                                <div class="card-title-group">
                                                                                    <div class="card-title card-title-sm">
                                                                                        <h6 class="title">Documents by Personnel</h6>
                                                                                    </div>
                                                                                    <div class="card-tools">
                                                                                        <div class="drodown">
                                                                                            <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-toggle="dropdown">30 Days</a>
                                                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                                                <ul class="link-list-opt no-bdr">
                                                                                                    <li><a href="#"><span>7 Days</span></a></li>
                                                                                                    <li><a href="#"><span>15 Days</span></a></li>
                                                                                                    <li><a href="#"><span>30 Days</span></a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="traffic-channel">
                                                                                    <div class="traffic-channel-doughnut-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                                                                    <canvas class="analytics-doughnut chartjs-render-monitor" id="TrafficChannelDoughnutData" style="display: block; height: 160px; width: 623px;" width="934" height="240"></canvas>
                                                                                </div>
                                                                                <div class="traffic-channel-group g-2">
                                                                                    <div class="traffic-channel-data">
                                                                                        <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></span><span>Under Secretary</span></div>
                                                                                        <div class="amount">4,305 <small>58.63%</small></div>
                                                                                    </div>
                                                                                    <div class="traffic-channel-data">
                                                                                        <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff" style="background: rgb(184, 172, 255);"></span><span>Directors</span></div>
                                                                                        <div class="amount">859 <small>23.94%</small></div>
                                                                                    </div>
                                                                                    <div class="traffic-channel-data">
                                                                                        <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce" style="background: rgb(255, 169, 206);"></span><span>Commissioners</span></div>
                                                                                        <div class="amount">482 <small>12.94%</small></div>
                                                                                    </div>
                                                                                    <div class="traffic-channel-data">
                                                                                        <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b" style="background: rgb(249, 219, 123);"></span><span>Assictant Commisioner</span></div>
                                                                                        <div class="amount">138 <small>4.49%</small></div>
                                                                                    </div>
                                                                                    </div><!-- .traffic-channel-group -->
                                                                                    </div><!-- .traffic-channel -->
                                                                                </div>
                                                                                </div><!-- .card -->
                                            </div>
                                        </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- content @e -->
                                                    @endsection