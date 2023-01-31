@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">{{ 'Assets Details' }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <table class="datatable-init table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Date acquired</th>
                                            <th>Warranty date</th>
                                            <th>Cost of asset</th>
                                            <th>Description</th>
                                            <th>Department</th>
                                            <th>Qr code</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="white-space:pre-wrap;">{{$asset->assetCategories->asset_category}}</td>
                                            <td>{{$asset->date_acquired}}</td>
                                            <td>{{$asset->warranty_date}}</td>
                                            <td>{{$asset->cost_of_asset}}</td>
                                            <td style="white-space:pre-wrap;">{{ $asset->asset_description }}</td>
                                            <td style="white-space:pre-wrap;">{{$asset->department->name}}</td>
                                            <td class="d-flex justify-content-center" style="white-space:pre-wrap;">
                                                <img class="w-50 h-50" src='{{ $asset->getAssetsQrCode() === '' ? '': $asset->getAssetsQrCode() }}'/>
                                            </td>
                                            <td style="white-space:normal;">
                                                {{$asset->location_of_asset}}
                                                {{'Latitude:'.$asset->latitude}}
                                                {{'Longitude'.$asset->longitude}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection