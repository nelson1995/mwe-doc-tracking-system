@extends('layouts.master')
@section('content')
<div class="nk-content p-0">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-ibx">
                <div class="nk-ibx-aside toggle-screen-lg" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                    <div class="nk-ibx-head">
                        <div class="mr-n1"><a href="#" class="link link-text" data-toggle="modal" data-target="#compose-mail"><em class="icon-circle icon ni ni-file-docs"></em> <span>Documents Manager</span></a> </div>
                    </div>
                    <div class="nk-ibx-nav" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                    <ul class="nk-ibx-menu">
                        <li class="@if(Request::is('documents/received')) active  @endif">
                            <a class="nk-ibx-menu-item " href="{{route('received_documents')}}">
                                <em class="icon ni ni-inbox"></em>
                                <span class="nk-ibx-menu-text">Received</span>
                                <!-- <span class="badge badge-pill badge-primary">8</span> -->
                            </a>
                        </li>
                        <li class="@if(Request::is('documents/pending')) active  @endif">
                            <a class="nk-ibx-menu-item " href="{{route('pending_documents')}}">
                                <em class="icon ni ni-edit"></em>
                                <span class="nk-ibx-menu-text">Pending</span>
                                <!-- <span class="badge badge-pill badge-light">12</span> -->
                            </a>
                        </li>
                        <li class="@if(Request::is('documents/submitted')) active  @endif">
                            <a class="nk-ibx-menu-item " href="{{route('submitted_documents')}}">
                                <em class="icon ni ni-send"></em>
                                <span class="nk-ibx-menu-text">Submitted</span>
                            </a>
                        </li>
                        
                        
                        <li class="@if(Request::is('documents/completed')) active  @endif">
                            <a class="nk-ibx-menu-item " href="{{route('completed_documents')}}">
                                <em class="icon ni ni-emails"></em>
                                <span class="nk-ibx-menu-text">Completed</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .nk-ibx-status -->
                </div></div></div></div>
                <div class="simplebar-placeholder" style="width: 299px; height: 895px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 711px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                </div><!-- .nk-ibx-aside -->
                <div class="nk-ibx-body bg-white">
                    <div class="nk-ibx-head">
                        <div class="nk-fmg-search">
                            <em class="icon ni ni-search"></em>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search documents">
                        </div>
                        <div class="nk-fmg-actions">
                            <ul class="nk-block-tools g-3">
                                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpload"><em class="icon ni ni-upload-cloud"></em><span>Upload</span></button>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div class="nk-ibx-head-actions">
                        
                    </div>
                    <div>
                        <ul class="nk-ibx-head-tools g-1">
                            
                            <!--  <li><a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                            <li class="mr-n1 d-lg-none"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li> -->
                            
                            
                        </ul>
                    </div>
                    <div class="search-wrap " data-search="search">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or author">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            
                        </div>
                        <div>
                            
                        </div>
                        
                        </div><!-- .search-wrap -->
                        </div><!-- .nk-ibx-head -->
                        <div class="nk-ibx-list" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                        @yield('view-document')
                        <div class="nk-tb-list nk-tb-orders">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-orders-type"><span>BARCODE</span></div>
                                <div class="nk-tb-col tb-col-xl"><span>NAME OF DOCUMENT</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>DOCUMENT TYPE</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>AUTHOR</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>DATE OF ARRIVAL</span>
                            </div>
                            <div class="nk-tb-col tb-col-sm"><span>DATE WRITTEN</span>
                        </div>
                        <div class="nk-tb-col tb-col-sm"></div>
                        
                    </div>
                    @yield('inner-body')
                    
                </div>
                <!--                                      @yield('inner-body')
                -->
            
                </div></div></div></div></div></div></div><!-- .nk-ibx-list -->
                
                </div><!-- .nk-ibx-body -->
                </div><!-- .nk-ibx -->
            </div>
        </div>
    </div>
    <!-- Modal Content Code -->
    <div class="modal fade zoom" tabindex="-1" id="modalSend">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title">Send Document</h5>
                </div>
                <form method="post" action="{{route('send_document')}}">
                    @csrf
                    <input type="hidden" name="document_id" id="document_id">
                    <div class="modal-body">
                        <div class="nk-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Document Info</h6>
                                        </div>
                                        
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">NAME</span>
                                                <span class="data-value" id="doc-name"></span>
                                            </div>
                                            
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">AUTHOR</span>
                                                    <span class="data-value" id="author"></span>
                                                </div>
                                                
                                                </div><!-- data-item -->
                                                </div><!-- data-list -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">ADD RECEIPIENTS</h6>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label"></label>
                                                                <div class="form-control-wrap">
                                                                    <select id="select-users" class="form-select select2-hidden-accessible" name="user_ids[]" multiple="" placeholder="Select personnel" >
                                                                        @foreach($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->fullname()}}</option>
                                                                        @endforeach
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center col-md-12">
                                                    <button type="submit" class="btn btn-lg btn-block btn-primary mt-4">Send Document</button>
                                                </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Content Code -->
                <div class="modal fade zoom" tabindex="-1" id="modalUpload">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                            <div class="modal-header">
                                <h5 class="modal-title">Upload Document</h5>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('store_document') }}" enctype ="multipart/form-data">
                                    @csrf
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name" name="nameOfDoc" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Address</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-email" name="address" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="select03">Type of document</label>
                                                <select id="select01" name="typeofdoc" data-toggle="select" class="form-control">
                                                    @foreach($documentType as $docType)
                                                    <option selected="active">{{ $docType->type }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="flatpickrSample01">Date of Arrival</label>
                                                <input id="flatpickrSample01" name="dateofarrival" type="date" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form-label">Upload file</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="docFile" class="custom-file-input" id="inputGroupFile01"
                                                        aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">Author</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-subject" name="author" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Comment</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="fv-message" name="comment" placeholder="Enter your comments" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="flatpickrSample01">Date written</label>
                                                <input id="flatpickrSample01" name="datewritten" type="date" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="select03">select status</label>
                                                <select id="select01" name="status" data-toggle="select" class="form-control">
                                                    <option selected="active">pending</option>
                                                    <option>received</option>
                                                    <option>sent</option>
                                                    <option>completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save Document</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
<script type="text/javascript">

    $(document).on("click", ".open-sendModal", function () {
        var docId = $(this).data('id');
        $.ajax({
            url: "/documents/get_doc_by_id/"+docId,
            success:function(data){
                console.log(data)
                $("#document_id").val(data.id)
                $("#doc-name").text(data.name)
                $("#author").text(data.author)
                }
            });
        });
</script>
@endsection