@extends('settings.basic')

@section('body-content')
 <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Offices</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($offices)}} offices</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                      
                                                        <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalOffice"><em class="icon ni ni-plus"></em><span>Create</span></button>
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
                                                            <th class="nk-tb-col"> <span class="sub-text">Office Name</span></th>

                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Sub Department</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Branch</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Location</span></th>

                                                           

                                                            <th class="nk-tb-col nk-tb-col-tools text-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                                            : activate to sort column ascending">
                                                            </th></tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                        @foreach($offices as $office)
                                                    <tr class="nk-tb-item odd" role="row">
                                                            <td class="nk-tb-col">
                                                                <div class="">
                                                                    {{$office->id}}
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                  
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">

                                                                            {{$office->name}}
                                                                             <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$office->sub_department->name}} </span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>branch</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg" data-order="Email Unverified - Kyc Unverified">
                                                               <span>{{$office->location}}</span>
                                                            </td>
                                                           
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                 
                                                                    <li class="nk-tb-action-hidden">
                                                                        
                                                                        <a href="{{route('edit_office', ['id'=>$office->id])}}" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" onclick="deleteItem({{$office->id}})"  class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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


<div class="modal fade zoom"  id="modalOffice">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Office</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                  <form method="post" action="{{route('store_office')}}">
                    @csrf
                        <input type="hidden" name="id" value="{{$office->id}}">

<div class="row">
    <div class="col-lg-6">
         <div class="form-group">
                            <label for="exampleInputPassword1">Select Sub Department<span class="text-danger">*</span></label>
                         <select class="select2 form-control" data-toggle="select" id="sub-department" name="sub_department_id" required="" >
                            <option disabled="" selected="" value="">Select</option>
                            @foreach($subdepartments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                            
                        </select>
                        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Office Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the office .." >
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Location<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="location" required="" placeholder="Enter a location of the office .." >
                        </div>
    </div>
    <div class="col-lg-6">
         <div class="form-group">
                        <label for="exampleInputPassword1">TYPE OF PERSONNEL</label>
                         <select class="select2 form-control" id="department" name="role_id">
                            <option disabled="" selected="" value="">Select</option>
                            
                            
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">OFFICE PERSONNEL</label>
                         <select class="select2 form-control" id="personnel" name="person_id">
                          <option disabled="" selected="" value="">Search</option>
                           
                            
                        </select>
                        
                    </div>
    </div>
</div>
    
                       
                        
                        <div class="form-group pt-2">
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
        text: 'You will not be able to recover this office!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ff7076',
        cancelButtonColor: '#1C2260',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false
    }).then((result) => {
        if(result.value){
            $.ajax({
                url: '/offices/delete/'+id,
                type: "DELETE",
                data:{ _token: "{{csrf_token()}}" }
            }).done(function() {

                swal({
                    title: "Deleted", 
                    text: "Office has been successfully deleted", 
                    type: "success",
                    confirmButtonColor: '#6610f2',
                }).then(function() {
                    location.href = '/offices';
                });
            });
        }
       
    });
}

</script>



@endsection


