@extends('settings.basic')
@section('body-content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Roles</h4>
                                                <div class="nk-block-des">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                            <div class="nk-block-head-content">
                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                        <ul class="nk-block-tools g-3">
                                                            <li><button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalCreateRole"><em class="icon ni ni-plus"></em><span>Create</span></button></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .toggle-wrap -->
                                            </div><!-- .nk-block-head-content -->
                                                <table class="datatable-init table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Role</th>
                                                            <th>Permissions</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($roles as $role)
                                                            <tr>
                                                                <td>{{$role->name}}</td>
                                                                <td style="white-space:normal;">
                                                                    @foreach($role->permissions as $key => $item)
                                                                        <span class="badge badge-pill badge-info">{{$item->name}}</span>
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEditRole" onclick="getRole({{ $role->id }})">{{'Edit '.$role->id}}</a>
                                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                                    <button class="btn btn-sm btn-danger" href="#" data-id="{{$role->id}}" data-token="{{ csrf_token() }}" onclick="deleteRole({{$role->id}})">Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->

<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalCreateRole">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Create Role</h5>
            </div>
            <div class="modal-body">
                 <form method="post" action="{{route('store_role')}}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Role Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="role" required="required" placeholder="Enter name of the role ..">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Code<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="code" required="required" placeholder="Enter the code ..">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Rank<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="rank" required="required" placeholder="Enter rank ..">
                    </div>
                    <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                        <label for="permissions">{{ trans('cruds.role.fields.permissions') }}*
                            <span class="btn btn-info btn-sm select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-sm deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                    <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple" required>
                                        @foreach($permissions as $id=>$permissions)
                                            <option value="{{$permissions->id}}" {{ in_array($id,old('permissions', [])) || isset($role) && $role->permissions->contains($id) ? 'selected' : '' }}>{{ $permissions->name }}</option>
                                        @endforeach
                                    </select>                            
                            @if($errors->has('permissions'))
                                <p class="help-block">
                                    {{ $errors->first('permissions') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.role.fields.permissions_helper') }}
                            </p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Content Code -->
<div class="modal fade zoom" tabindex="-1" id="modalEditRole">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Role</h5>
            </div>
            <div class="modal-body">
                 <form method="POST" action="{{ route('update_role') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$role->id}}"/>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Role Name<span class="text-danger">*</span></label>
                        <input type="text" id="role-name" class="form-control" name="role" required="required" value="" placeholder="Enter name of the role ..">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Code<span class="text-danger">*</span></label>
                        <input type="text" id="role-code"  class="form-control" name="code"  value="" required="required" placeholder="Enter the code ..">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Rank<span class="text-danger">*</span></label>
                        <input type="text" id="role-rank" class="form-control" name="rank" value="" required="required" placeholder="Enter rank ..">
                    </div>
                    <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                        <label for="permissions">{{ trans('cruds.role.fields.permissions') }}*
                            <span class="btn btn-info btn-sm select-all">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-sm deselect-all">{{ trans('global.deselect_all') }}</span></label>
                                <select name="permissions[]" id="permissions2" class="form-control select2" multiple="multiple" required>
                                    <option value='0'></option>
                                </select>                              
                            @if($errors->has('permissions'))
                                <p class="help-block">
                                    {{ $errors->first('permissions') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.role.fields.permissions_helper') }}
                            </p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<style>
   .select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline;
    list-style: none;
    padding: 0;
    white-space: normal;
    }
</style>

<script type="text/javascript">
    jQuery(document).ready(function(){
        $("#datatable").DataTable({
            columnDefs: [{ orderable: false, targets: [3] }],
            responsive:true,
        });
    });
    jQuery(document).ready(function(){
        // select all permissions button
        $('.select-all').click(function(){
            $('#permissions').find('option').prop('selected',true).trigger('change')
            $('#permissions2').find('option').prop('selected',true).trigger('change')
        });
        // deselect all permissions
        $('.deselect-all').click(function(){
            $('#permissions').find('option').prop('selected',false).trigger('change');
            $('#permissions2').find('option').prop('selected',false).trigger('change');
        });
        // display create role modal
        $('#permissions').select2({
            dropdownParent : $('#modalCreateRole')
        });
        // display edit role modal
        $('#permissions2').select2({
            dropdownParent : $('#modalEditRole')
        });
    });

    function deleteRole(id){
        
        var token = $("meta[name='csrf-token']").attr("content");
        var url = "/roles/delete/"+id;

        console.log("id "+id);
        console.log("token "+token);
        console.log("url "+url);
        
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
            data:{
                id:id,
                _token:token
            },
            success: function(response){
                console.log(response.message);
                Swal.fire(
                'Done!',
                'Role deleted successfully!',
                'success'
                ).then(function(){
                    location.href="{{ route('list_roles')}}"
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

    function getRole(id){
        
        var token = $("meta[name='csrf-token']").attr("content");
        var url = "/roles/edit/"+id;

        console.log("id "+id);
        console.log("token "+token);
        console.log("url "+url);
        
        $('select').empty(); //clear previous option values
        $.ajax({
            url:url,
            type:'GET',
            dataType:"JSON",
            data:{
                id:id,
            },
            success: function(response){
                // console.log(response)
                $('#role-name').val(response.role.name)
                $('#role-code').val(response.role.code)
                $('#role-rank').val(response.role.rank)
                // console.log(response.role.permissions)

                let data = response.permissions;
                for(let i=0;i<data.length;i++){
                    let id = data[i].id;
                    let name = data[i].name;
                    for(let j=0;j<response.role.permissions.length;j++){
                        let rolePermissionId = response.role.permissions[j].id;
                        let rolePermissionName = response.role.permissions[j].name;
                        if(rolePermissionId == id){
                            let option = "<option value='"+id+"' selected>"+rolePermissionName+"</option>";
                            $('#permissions2').append(option);
                        }else{
                            let option = "<option value='"+id+"'>"+name+"</option>";
                            $('#permissions2').append(option);
                        }
                    }
                }
            },
            error: function(xhr) {
            console.log(xhr.responseText);
            }
            });   
    }
</script>
@endsection