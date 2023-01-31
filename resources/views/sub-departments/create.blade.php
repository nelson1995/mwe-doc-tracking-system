@extends('layouts.master')

@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('list_sub_departments')}}">SUB DEPARTMENTS</a></li>
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
	            <form method="post" action="{{route('store_sub_department')}}">
	            	@csrf
	            	<input type="hidden" name="id" value="{{$subdepartment->id}}">
	            	<div class="row">
	            		<div class="col-lg-6">
	            			 <div class="form-group">
	                    <label for="exampleInputPassword1">Select Department<span class="text-danger">*</span></label>
	                     <select class="select2 form-control" id="department" name="department_id" required="" >
                            <option disabled="" selected="" value="">Select<span class="text-danger">*</span></option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}" {{$department->id == $subdepartment->department_id ? 'selected' : ''}}>{{$department->name}} ({{$department->abbreviation}})</option>
                            @endforeach
                        </select>
	                    
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Sub Department Name<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the sub department .." value="{{$subdepartment->name}}">
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputPassword1">Abbreviation<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="abbreviation" required="" placeholder="Enter an abbreviation of the sub department .." value="{{$subdepartment->abbreviation}}">
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
	            	  
	             

	                <button type="submit" class="btn btn-primary">Save</button>
	            </form>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#personnel').select2();
    });
</script>

@endsection		