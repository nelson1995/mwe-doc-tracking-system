@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">{{ 'Assets List' }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><button type="button" class="btn btn-primary" data-target="#modalCreateAsset" data-toggle="modal" onclick="getItems()"><em class="icon ni ni-plus"></em><span>Create Asset</span> </button></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <table class="datatable-init table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Asset Name</th>
                                            <th>Asset Image</th>
                                            <th>Model Name</th>
                                            <th>Serial Number</th>
                                            <th>Managed by</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($assets as $asset)
                                            <tr>
                                                <td>{{$asset->asset_name}}</td>
                                                <td class="d-flex justify-content-center"><img class="w-50 h-50" src="{{ $asset->getAssetsImage() === '' ? '': $asset->getAssetsImage() }}" /></td>
                                                <td>{{$asset->model_name}}</td>
                                                <td>{{$asset->serial_number}}</td>
                                                <td>{{$asset->user->fname.' '.$asset->user->lname}}</td>
                                                <td><a href="{{ route('show_asset_details',$asset->id) }}" class="btn btn-sm btn-info">{{'Asset details'}}</a></td>
                                                <td>{{$asset->status->status}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEditAsset" onclick="getAssetById({{ $asset->id }})">{{'Edit'}}</a>
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <button  data-id = "{{ $asset->id }}" onclick="deleteAsset({{ $asset->id }})"  class="btn btn-sm btn-danger">{{'delete'}}</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalCreateAsset">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Create Asset</h5>
            </div>
            <div class="modal-body">
                 <form method="POST" action="{{ route('store_asset') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Asset Name<span class="text-danger"></span></label>
                                <input type="text"  class="form-control" name="asset_name" required="required" value="" placeholder="Enter name of the asset ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Model name<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="model"  value="" required="required" placeholder="Enter the model name ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Serial number<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="serial_number" value="" required="required" placeholder="Enter serial number ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">User<span class="text-danger"></span></label>
                                <select name="user[]" id="user1" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                    </div>

                    <div class="row g-gs">
                        <div class="col-md-6"><h6><p>Asset details</p></h6></div>
                    </div>

                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Status<span class="text-danger"></span></label>
                                <select name="status[]" id="status1" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Asset Category<span class="text-danger"></span></label>
                                <select name="asset_category[]" id="assetCategory1" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
              
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Cost of asset<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="cost"  value="" placeholder="Enter the cost of asset">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Date acquired<span class="text-danger"></span></label>
                                <input type="date" class="form-control" name="date_acquired"  value="" required="required" placeholder="Enter the date acquired ..">
                            </div>
                        </div>
                     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Warranty Date<span class="text-danger"></span></label>
                                <input type="date" class="form-control" name="warranty_date"  value=""  placeholder="Enter the warranty date ..">
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="item form-group d-flex justify-content-center">
                                    <img class="w-50 h-50 p-3" style="border-radius:5%;" id="image1"/>
                                </div>
                                <div class="item form-group d-flex justify-content-center">
                                    <input type="file"  id="fileUpload1" name="image" onChange="previewImage1()" style="display: none;"/>
                                    <button type="button" onclick="uploadBtn1()" class="btn btn-primary btn-sm col-5" >Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-gs">
                        <div class="col-md-6"><h6><p>Location details</p></h6></div>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Location of asset<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="location" value=""  placeholder="Enter location of asset ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Department<span class="text-danger"></span></label>
                                <select name="department[]" id="department1" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Latitude<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="latitude" value=""  placeholder="Latitude...">
                            </div>
                        </div>
                        <div class = col-md-6>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Longitude<span class="text-danger"></span></label>
                                <input type="text" class="form-control" name="longitude" value=""  placeholder="Longitude...">
                            </div>
                        </div>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-6"><p></p></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Asset description<span class="text-danger">*</span></label>
                        <textarea class="form-control" name="asset_descrp" required="required" value="" placeholder="Describe asset .."></textarea>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalEditAsset">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Asset</h5>
            </div>
            <div class="modal-body">
                 <form method="POST" action="{{ route('update_asset') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id"/>
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Asset Name<span class="text-danger"></span></label>
                                <input type="text" id="asset-name" class="form-control" name="asset_name" required="required" value="" placeholder="Enter name of the asset ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Model name<span class="text-danger"></span></label>
                                <input type="text" id="model-name"  class="form-control" name="model"  value="" required="required" placeholder="Enter the model name ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Serial number<span class="text-danger"></span></label>
                                <input type="text" id="serial-number" class="form-control" name="serial_number" value="" required="required" placeholder="Enter serial number ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">User<span class="text-danger"></span></label>
                                <select name="user[]" id="user" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                    </div>

                    <div class="row g-gs">
                        <div class="col-md-6"><h6><p>Asset details</p></h6></div>
                    </div>

                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Status<span class="text-danger"></span></label>
                                <select name="status[]" id="status" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Asset Category<span class="text-danger"></span></label>
                                <select name="asset_category[]" id="asset_category" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
              
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Cost of asset<span class="text-danger"></span></label>
                                <input type="text" id="cost" class="form-control" name="cost"  value="" placeholder="Enter the cost of asset">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Date acquired<span class="text-danger"></span></label>
                                <input type="date" id="date-acquired"  class="form-control" name="date_acquired"  value="" required="required" placeholder="Enter the date acquired ..">
                            </div>
                        </div>
                     
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Warranty Date<span class="text-danger"></span></label>
                                <input type="date" id="warranty-date" class="form-control" name="warranty_date"  value=""  placeholder="Enter the warranty date ..">
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="item form-group d-flex justify-content-center">
                                    <img class="w-50 h-50 p-3" style="border-radius:5%;" id="image"/>
                                </div>
                                <div class="item form-group d-flex justify-content-center">
                                    <input type="file"  id="fileUpload" name="image" onChange="previewImage()" style="display: none;"/>
                                    <button type="button" id="upload" onclick="uploadBtn()" class="btn btn-primary btn-sm col-5" >Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-gs">
                        <div class="col-md-6"><h6><p>Location details</p></h6></div>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Location of asset<span class="text-danger"></span></label>
                                <input type="text" id="location" class="form-control" name="location" value=""  placeholder="Enter location of asset ..">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Department<span class="text-danger"></span></label>
                                <select name="department[]" id="department2" class="form-control" required>
                                    <option value='0'></option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Latitude<span class="text-danger"></span></label>
                                <input type="text" id="latitude" class="form-control" name="latitude" value=""  placeholder="Latitude...">
                            </div>
                        </div>
                        <div class = col-md-6>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Longitude<span class="text-danger"></span></label>
                                <input type="text" id="longitude" class="form-control" name="longitude" value=""  placeholder="Longitude...">
                            </div>
                        </div>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-6"><p></p></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Asset description<span class="text-danger">*</span></label>
                        <textarea  id="asset-descrp" class="form-control" name="asset_descrp" required="required" value="" placeholder="Describe asset .."></textarea>
                    </div>
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>   
        </div>
    </div>
</div>

    <script>
        function deleteAsset(id){
            let token = $("meta[name='csrf-token']").attr("content");
            let url = '/asset/delete/'+id;
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                url:url,
                type:'DELETE',
                dataType:"JSON",
                cache:false,
                data:{
                    id:id,
                    _token:token
                },
                success: function(response){
                    console.log(response.message);
                    Swal.fire(
                    'Done!',
                    'Asset deleted successfully!',
                    'success'
                    ).then(function(){
                        location.href="{{route('list_assets')}}"
                    })
                },
                error: function(xhr) {
                console.log(xhr.responseText);
                }
                });
            } else {
                Swal.fire(
                    'Info!',
                    'Cancelled .',
                    'error'
                )}
            });
        }

        function getAssetById(id){
            let token = $("meta[name='csrf-token']").attr("content");
            let url = '/asset/edit/'+id;
            $('select').empty(); //clear previous option values
            $.ajax({
                url:url,
                type:'GET',
                cache:false,
                dataType:"JSON",
                data:{
                    id:id,
                },
                success: function(response){
                    console.log(response.message);
                    $('#id').val(response.asset.id);
                    $('#asset-name').val(response.asset.asset_name);
                    $('#model-name').val(response.asset.model_name);
                    $('#serial-number').val(response.asset.serial_number);

                    $('#date-acquired').val(response.asset.date_acquired);
                    $('#warranty-date').val(response.asset.warranty_date);
                    $('#cost').val(response.asset.cost_of_asset);
                    $('#latitude').val(response.asset.latitude);
                    $('#longitude').val(response.asset.longitude);
                    $('#location').val(response.asset.location_of_asset);
                    $('#asset-descrp').val(response.asset.asset_description);
                    $('#image').attr("src",response.assetImage);
                    
                    // populate select option value for departments
                    let dept = response.departments;
                    let deptId = response.asset.department.id;
                    for(let i=0; i<dept.length;i++){
                        let id = dept[i].id;
                        let departmentName = dept[i].name;
                        if(deptId == id){
                            let option ="<option value='"+id+"' selected>"+departmentName+"</option>";
                            $('#department2').append(option);
                        }else{
                            let option ="<option value='"+id+"'>"+departmentName+"</option>";
                            $('#department2').append(option);
                        }
                    }

                    // populate select option value for users
                    let user = response.users;
                    let userId = response.asset.user.id;
                    for(let x=0; x<user.length;x++){
                        let id = user[x].id;
                        let fname = user[x].fname;
                        let lname = user[x].lname;
                        if(userId == id){
                            let option ="<option value='"+id+"' selected>"+fname+' '+ lname +"</option>";
                            $('#user').append(option);
                        }else{
                            let option ="<option value='"+id+"'>"+fname+' '+ lname +"</option>";
                            $('#user').append(option);
                        }
                    }

                    // populate select option value for asset categories
                    let assetCategories = response.assetCategories;
                    let assetCategoryId = response.asset.asset_categories.id;
                    for(let x=0; x<assetCategories.length;x++){
                        let id = assetCategories[x].id;
                        let assetCategory = assetCategories[x].asset_category;
                        if(assetCategoryId == id){
                            let option ="<option value='"+id+"' selected>"+assetCategory +"</option>";
                            $('#asset_category').append(option);
                        }else{
                            let option ="<option value='"+id+"'>"+assetCategory+"</option>";
                            $('#asset_category').append(option);
                        }
                    }

                    // populate select option value for asset status
                    let statuses = response.statuses;
                    let statusId = response.asset.status.id;
                    for(let x=0; x<statuses.length;x++){
                        let id = statuses[x].id;
                        let status = statuses[x].status;
                        if(statusId == id){
                            let option ="<option value='"+id+"' selected>"+status+"</option>";
                            $('#status').append(option);
                        }else{
                            let option ="<option value='"+id+"'>"+status+"</option>";
                            $('#status').append(option);
                        }
                    }
                },
                error: function(xhr) {
                console.log(xhr.responseText);
                }
            });
        }

        function uploadBtn(){
            $('#fileUpload').trigger('click');
        }
        function previewImage(){
            const image = document.getElementById('image');
            const file = document.getElementById('fileUpload').files[0];
            const reader = new FileReader();

            reader.addEventListener("load",(event)=>{
                image.src = event.target.result;
                console.log("logs "+event.target.result);
            },false);

            if(file){
                reader.readAsDataURL(file);
            }
        }

        function uploadBtn1(){
            $('#fileUpload1').trigger('click');
        }
        function previewImage1(){
            const image = document.getElementById('image1');
            const file = document.getElementById('fileUpload1').files[0];
            const reader = new FileReader();

            reader.addEventListener("load",(event)=>{
                image.src = event.target.result;
                console.log("logs "+event.target.result);
            },false);

            if(file){
                reader.readAsDataURL(file);
            }
        }
        
        // get values for select fields in create asset modal
        function getItems(){
            let token = $("meta[name='csrf-token']").attr("content");
            let url = '/asset/create';
            $('select').empty(); //clear previous option values
            $.ajax({
                url:url,
                type:'GET',
                cache:false,
                dataType:"JSON",
                data:{
                    _token:token
                },
                success: function(response){
                    console.log(response.message);
                    
                    // populate select option value for departments
                    let dept = response.departments;
                    for(let i=0; i<dept.length;i++){
                        let id = dept[i].id;
                        let departmentName = dept[i].name;
                        let option ="<option value='"+id+"'>"+departmentName+"</option>";
                        $('#department1').append(option);
                    }

                    // populate select option value for users
                    let user = response.users;
                    for(let x=0; x<user.length;x++){
                        let id = user[x].id;
                        let fname = user[x].fname;
                        let lname = user[x].lname;
                        let option ="<option value='"+id+"'>"+fname+' '+ lname +"</option>";
                        $('#user1').append(option);
                    }

                    // populate select option value for asset categories
                    let assetCategories = response.assetCategories;
                    for(let x=0; x<assetCategories.length;x++){
                        let id = assetCategories[x].id;
                        let assetCategory = assetCategories[x].asset_category;
                        let option ="<option value='"+id+"'>"+assetCategory+"</option>";
                        $('#assetCategory1').append(option);
                    }

                    // populate select option value for asset status
                    let statuses = response.statuses;
                    for(let x=0; x<statuses.length;x++){
                        let id = statuses[x].id;
                        let status = statuses[x].status;
                        let option ="<option value='"+id+"'>"+status+"</option>";
                        $('#status1').append(option);
                    }
                },
                error: function(xhr) {
                console.log(xhr.responseText);
                }
            });
        }
    </script>

@endsection
