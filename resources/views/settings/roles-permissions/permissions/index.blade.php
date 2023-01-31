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
                                                <h4 class="nk-block-title">Permissions</h4>
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
                                                            <li><button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalPermission"><em class="icon ni ni-plus"></em><span>Create</span></button></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .toggle-wrap -->
                                            </div><!-- .nk-block-head-content -->
                                                <table class="datatable-init table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Permission</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($permissions as $permission)
                                                            <tr>
                                                                <td>{{ $permission->name }}</td>
                                                                <td>
                                                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalPermissionEdit" onclick="getPermissionById({{ $permission->id }})">Edit</button>
                                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                                    <button class="btn btn-sm btn-danger"  data-id="{{ $permission->id }}" data-token="{{ csrf_token() }}"  onclick="deletePermission({{$permission->id}})" >Delete</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->

    <div class="modal fade zoom" tabindex="-1" id="modalPermission">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Permission</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('store_permission') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permission Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="permission" value="" required="" placeholder="Enter name of permission .." >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </form>
                </div>            
            </div>
        </div>
    </div>

    <div class="modal fade zoom" tabindex="-1" id="modalPermissionEdit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Permission</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('update_permission') }}">
                        @csrf
                        <input type="hidden" id="permission-id" name="id" value="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permission Name<span class="text-danger">*</span></label>
                            <input type="text" id="permission-name" class="form-control" name="permission" value="" required="" placeholder="Enter name of permission .." >
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

    function getPermissionById(id){
        var url = "/permissions/edit/"+id;
        $.ajax({
            url:url,
            type:'GET',
            dataType:'JSON',
            data:{
                id:id
            },
            success: function(response){
                console.log(response);
                var permissionName = response.permission.name;
                var permissionId = response.permission.id;
                // console.log(permissionName);
                $('#permission-name').val(permissionName);
                $('#permission-id').val(permissionId);
            },
            error: function(xhr){
                console.log(xhr);
            }
        })
    }

    function deletePermission(id){
        
        var token = $("meta[name='csrf-token']").attr("content");
        var url = "/permissions/delete/"+id;

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
            dataType:'JSON',
            data:{
                id:id,
                _token:token
            },
            success: function(response){
                console.log(response.message);
                Swal.fire(
                'Done!',
                'Permission deleted successfully!',
                'success'
                ).then(function(){
                    location.href="{{ route('list_permissions')}}"
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

</script>

@endsection