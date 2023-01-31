@extends('settings.basic')

@section('body-content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('list_permissions')}}">Permissions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{Session('title')}}</li>
                </ol>
            </nav>
            <h1 class="m-0">{{Session('title')}}</h1>
        </div>
    </div>
</div>

<div class="container-fluid page__container">
	<div class="card card-form">
	    <div class="row no-gutters">
	        <div class="card-form__body card-body">
                <form method="post" action="{{ route('store_permission') }}">
	            	@csrf
	            	<div class="row">
                        <div class="form-group">
                            <label for="exampleInputPermission">Permission Name<span class="text-danger">*</span></label>
                            <input type="text" id="exampleInputPermission" class="form-control" name="name" required="" placeholder="Enter name of permission .." value="">
                        </div>
	            	</div>
	                <button type="submit" class="btn btn-primary">Save</button>
	            </form>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#sub-department').select2();
        $('#personnel').select2();
    });
</script>
@endsection