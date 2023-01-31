@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Tracks</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Configure tracks that contain the offices that the document will go to.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        
                                                        <li><a href="{{route('create_track')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Create</span> </a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                  <div class="card card-preview">
                                            <div class="card-inner">

                                                <div class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="datatable-wrap my-3">
        <table class="table" id="datatable">
            <thead>
                                                    <tr>
                                                        <td>#ID</td>
                                                        <td>TRACK NAME</td>
                                                        <td>NO OF OFFICES</td>
                                                        <td>DATE ADDED</td>
                                                        <td>ACTIONS</td>
                                                    </tr>
                                                </thead>
                                                 <tbody>
                                                    @foreach($tracks as $track)
                                                    <tr>
                                                        <th>{{$track->id}}</th>
                                                        <th>{{$track->name}}</th>
                                                        <th>{{$track->item_count}}</th>
                                                        <th>{{$track->date}}</th>
                                                        <th>
                                                            <a href="{{route('show_track', ['id'=>$track->id])}}">Show</a>
                                                          

                                                        </th>

                                                        
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                 
                                                </table></div></div>
                                            </div>
                                        </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalDefault">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Modal Title</h5>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    jQuery(document).ready(function(){
        $("#datatable").DataTable({
            columnDefs: [{ orderable: false, targets: [4] }],
        });

        $('#modalDefault').on('show', function(e) {
        var link     = e.relatedTarget(),
        modal    = $(this),
        id = link.data("track-id");

        console.log("track id" + id)

        modal.find("#email").val(email);
        });
    });
</script>
@endsection