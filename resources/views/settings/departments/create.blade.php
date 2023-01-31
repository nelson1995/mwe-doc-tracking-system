@extends('layouts.master')

@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('list_departments')}}">DEPARTMENTS</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{Session('title')}}</li>
                </ol>
            </nav> -->
            <h1 class="m-0">{{Session('title')}}</h1>
        </div>
    </div>
</div>

<div class="container-fluid page__container">
	<div class="card card-form">
	    <div class="row no-gutters">
	      
	        <div class="col-lg-6 card-form__body card-body">
	            <form method="post" action="{{route('store_department')}}">
	            	@csrf
	            	<input type="hidden" name="id" value="{{$department->id}}">
	                <div class="form-group">
	                    <label for="exampleInputEmail1">Department Name<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="name" required="" placeholder="Enter name of the department .." value="{{$department->name}}">
	                </div>
	                <div class="form-group">
	                    <label for="exampleInputPassword1">Abbreviation<span class="text-danger">*</span></label>
	                    <input type="text" class="form-control" name="abbreviation" required="" placeholder="Enter an abbreviation of the department .." value="{{$department->abbreviation}}">
	                </div>
	                <button type="submit" class="btn btn-primary">Save</button>
	            </form>
	        </div>
	    </div>
	</div>
</div>
@endsection		