@extends('settings.basic')

@section('body-content')

 <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Departments</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($subdepartments)}} Departments</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                      
                                                        <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSubDepartment"><em class="icon ni ni-plus"></em><span>Create</span></button>
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
                                                            <th class="nk-tb-col"> <span class="sub-text">Department Name</span></th>

                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Abbreviation</span></th>
                                                            <th class="nk-tb-col">
                                                                <span>Department</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-mb">

                                                                
                                                            </th>

                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        @foreach($subdepartments as $dept)
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
                                                                    <td class="nk-tb-col tb-col-mb">
                                                                        <span class="tb-amount">{{$dept->department->name}} </span>
                                                                    </td>
                                                                    
                                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                                        <ul class="nk-tb-actions gx-1">
                                                                        
                                                                            <li class="nk-tb-action-hidden">
                                                                                
                                                                                <a  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                                    <em class="icon ni ni-edit-fill"></em>
                                                                                </a>
                                                                            </li>
                                                                            <li class="nk-tb-action-hidden">
                                                                                <a href="#" onclick="deleteItem({{ $dept->id }})"  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
<div class="modal fade zoom" tabindex="-1" id="modalSubDepartment">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Create department</h5>
            </div>
            <div class="modal-body">
                   <form method="post" action="{{route('store_sub_department')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                        <label for="exampleInputPassword1">Select Directorate<span class="text-danger">*</span></label>
                         <select class="select2 form-control" id="department" name="department_id" required="" >
                            <option disabled="" selected="" value="">Select<span class="text-danger">*</span></option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}" >{{$department->name}} ({{$department->abbreviation}})</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the department .." >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Abbreviation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="abbreviation" required="" placeholder="Enter an abbreviation of the department ..">
                    </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                        <label for="exampleInputPassword1">TYPE OF PERSONNEL</label>
                         <select class="select2 form-control" id="department" name="department_id">
                            <option disabled="" selected="" value="">Select</option>
                            
                            
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">NAME OF PERSONNEL</label>
                         <select class="select2 form-control" id="personnel" name="department_id">
                            <option disabled="" selected="" value="">Search</option>
                        </select>
                    </div>
                    
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save</button>
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
                    url: '/sub-departments/delete/'+id,
                    type: "DELETE",
                    data:{ _token: "{{csrf_token()}}" }
                }).done(function() {
                    swal({
                        title: "Deleted", 
                        text: "Department has been successfully deleted", 
                        type: "success",
                        confirmButtonColor: '#6610f2',
                    }).then(function() {
                        location.href = '/sub-departments';
                    });
                });
            }
        });
    }
</script>



@endsection


