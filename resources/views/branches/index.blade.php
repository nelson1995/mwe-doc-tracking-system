@extends('settings.basic')

@section('body-content')

 <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Branches</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($branches)}} branches</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                      
                                                        <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBranch"><em class="icon ni ni-plus"></em><span>Create</span></button>
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
                                                            <th class="nk-tb-col"> <span class="sub-text">Branch Name</span></th>

                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Address</span></th>
                                                            <th class="nk-tb-col tb-col-mb"></th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        @foreach($branches as $branch)
                                                    <tr class="nk-tb-item odd" role="row">
                                                            <td class="nk-tb-col">
                                                                <div class="">
                                                                    {{$branch->id}}
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                  
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">

                                                                            {{$branch->name}}
                                                                             <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$branch->address}} </span>
                                                            </td>
                                                            
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                 
                                                                    <li class="nk-tb-action-hidden">
                                                                        
                                                                        <a  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" onclick="deleteItem({{$branch->id}})"  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
<div class="modal fade zoom" tabindex="-1" id="modalBranch">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Create Branch</h5>
            </div>
            <div class="modal-body">
                 <form method="post" action="{{route('store_branch')}}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Branch Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the branch ..">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Address<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" required="" placeholder="Enter the location of the branch ..">
                    </div>
              
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
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
                        text: 'You will not be able to recover this branch!',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#ff7076',
                        cancelButtonColor: '#1C2260',
                        confirmButtonText: 'Yes, delete it!',
                        closeOnConfirm: false
                    }).then((result) => {
                        if(result.value){
                            $.ajax({
                                url: '/branches/delete/'+id,
                                type: "DELETE",
                                data:{ _token: "{{csrf_token()}}" }
                            }).done(function() {

                                swal({
                                    title: "Deleted", 
                                    text: "Branch has been successfully deleted", 
                                    type: "success",
                                    confirmButtonColor: '#6610f2',

                                }).then(function() {
                                    location.href = '/branches';
                                });
                            });

                        }

                       
                    });

                }
                
            </script>



@endsection


