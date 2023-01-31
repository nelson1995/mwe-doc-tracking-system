@extends('documents.basic')

@section('inner-body')

@foreach($documents as $doc)
<div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <span class="tb-sub">{{$doc->barcode}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-lead">{{$doc->name}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">{{$doc->documentType->type}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">{{$doc->author}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub text-primary">{{$doc->date_of_arrival}}</span>
                                                            </div>
                                                             <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub ">{{$doc->date_written}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="{{route('view_doc',$doc->id)}}">View</a></li>
                                                                        <li><a href="#">Edit</a></li>
                                                                        <li><a href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            
                                                        </div>
                                                        @endforeach
@endsection