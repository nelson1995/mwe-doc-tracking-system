@extends('settings.basic')

@section('body-content')

 <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Directorates</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($departments)}} Directorates</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                      
                                                        <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDept"><em class="icon ni ni-plus"></em><span>Create</span></button>
</li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

        <div class="nk-block nk-block-lg">

                                    <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="datatable-wrap my-3">

                                                    <table class="nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" role="grid">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head" role="row">
                                                            <th class="nk-tb-col nk-tb-col-check sorting">
                                                                #ID
                                                            </th>
                                                            <th class="nk-tb-col"> <span class="sub-text">Directorate Name</span></th>

                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Abbreviation</span></th>
                                                            <th class="nk-tb-col tb-col-mb"></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        @foreach($departments as $dept)
                                                    <tr class="nk-tb-item odd" role="row">
                                                            <td class="nk-tb-col">
                                                                <div class="">
                                                                    {{$dept->id}}
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                  
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">

                                                                            {{$dept->name}}
                                                                             <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$dept->abbreviation}} </span>
                                                            </td>
                                                            
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                 
                                                                    <li class="nk-tb-action-hidden">
                                                                        
                                                                        <a  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" onclick="deleteItem({{$dept->id}})"  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                  
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table></div>
                </div>
           </div>
    </div>
</div>                             
<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalDept">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Create Directorate</h5>
            </div>
            <div class="modal-body">
                 <form method="post" action="{{route('store_department')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Directorate Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the directorate .." >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Abbreviation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="abbreviation" required="" placeholder="Enter an abbreviation of the directorate .." >
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            
        </div>
    </div>
</div>



<script type="text/javascript">
    jQuery(document).ready(function(){
    $("#datatable").DataTable({
        columnDefs: [{ orderable: false, targets: [3] }],
    });
    });

    function deleteItem(id){
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this department!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ff7076',
            cancelButtonColor: '#1C2260',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
        }).then((result) => {
            if(result.value){
                $.ajax({
                    url: '/departments/delete/'+id,
                    type: "DELETE",
                    data:{ _token: "{{csrf_token()}}" }
                }).done(function() {
                    swal({
                        title: "Deleted", 
                        text: "Department has been successfully deleted", 
                        type: "success",
                        confirmButtonColor: '#6610f2',
                    }).then(function() {
                        location.href = '/departments';
                    });
                });
            }
        });
    }
</script>



@endsection


