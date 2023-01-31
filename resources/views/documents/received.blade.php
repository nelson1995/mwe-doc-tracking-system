@extends('documents.basic')

@section('inner-body')

@foreach($documents as $du)
<div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <span class="tb-sub">{{$du->document->barcode}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-lead">{{$du->document->name}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">{{$du->document->documentType->type}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">{{$du->document->author}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub text-primary">{{$du->document->date_of_arrival}}</span>
                                                            </div>
                                                             <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub ">{{$du->document->date_written}}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="{{route('view_doc',$du->document->id)}}">View</a></li>
                                                                        <li><a href="#">Comment</a></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            
                                                        </div>
                                                        @endforeach
@endsection