@extends('layouts.master')

@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('list_offices')}}">OFFICES</a></li>
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
	              <form method="post" action="{{route('store_office')}}">
	            	@csrf
	            	<input type="hidden" name="id" value="{{$office->id}}">
	            	<div class="row">
	            		<div class="col-lg-6">
	            			 <div class="form-group select2">
	                    <label for="exampleInputPassword1">Select Sub Department<span class="text-danger">*</span></label>
	                     <select class="select2 form-control" data-toggle="select" id="sub-department" name="sub_department_id" required="" >
                            <option disabled="" selected="" value="">Select</option>
                            @foreach($subdepartments as $department)
                                <option value="{{$department->id}}" {{$department->id == $office->sub_department_id ? 'selected' : ''}}>{{$department->name}}</option>
                            @endforeach
                            
                        </select>
	                    
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Office Name<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the office .." value="{{$office->name}}">
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputPassword1">Location<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="location" required="" placeholder="Enter a location of the office .." value="{{$office->location}}">
	                </div>
	            		</div>
	            		<div class="col-lg-6">
	            			<div class="form-group">
	                    <label for="exampleInputPassword1">BRANCH<span class="text-danger">*</span></label>
	                     <select class="select2 form-control" id="branch" name="branch_id" required="">
                            <option disabled="" selected="" value="">Select</option>
                            @foreach($branches as $branch)
                                <option value="{{$branch->id}}" {{$branch->id == $office->branch_id ? 'selected' : ''}}>{{$branch->name}}</option>
                            @endforeach
                            
                        </select>
	                    
	                </div>
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