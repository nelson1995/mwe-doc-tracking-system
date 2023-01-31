@extends('layouts.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Tracks / <strong class="text-primary small">{{$track->name}}</strong></h3>
                        </div>
                        
                    </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row gy-5">
                            <div class="col-lg-5">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Track Info</h5>
                                        <p>Submission date, approve date, status etc.</p>
                                    </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="card card-bordered">
                                        <ul class="data-list is-compact">
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Created By</div>
                                                    <div class="data-value">{{$track->created_by->fullname()}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Date Created</div>
                                                    <div class="data-value">{{$track->date}}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Status</div>
                                                    <div class="data-value"><span class="badge badge-dim badge-sm badge-outline-success">Completed</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                        </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-lg-7">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="nk-block-title title">
                                                            Offices </h5>
                                                            <p>These are the stops that the document goes through.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card card-bordered">
                                                        <div class="card-inner">
                                                            <div class="timeline">
                                                                <ul class="timeline-list">
                                                                    @php $counter = 1 @endphp
                                                                    @foreach($track->offices as $item)
                                                                    <li class="timeline-item">
                                                                        <div class="timeline-status bg-primary is-outline"></div>
                                                                        <div class="timeline-date">{{$counter++}} <em class="icon ni ni-map-pin"></em></div>
                                                                        <div class="timeline-data">
                                                                            <h6 class="timeline-title">{{$item->name}}</h6>
                                                                            <div class="timeline-des">
                                                                                <p>{{$item->location}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div><!-- .col -->
                                                    </div><!-- .row -->
                                                    </div><!-- .nk-block -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endsection