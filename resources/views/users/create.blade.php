@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Create User</h3>
                                            <div class="nk-block-des text-soft">
                                                <p></p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                 <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">

                                                    <form method="post" action="{{route('store_user')}}">
                                                        @csrf

<div class="row gy-4">
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label" for="exampleInputEmail1">First Name<span class="text-danger" data-children-count="0">*</span></label>
<input type="text" class="form-control" name="fname" required="" placeholder="Enter first name .." value="">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label" for="exampleInputPassword1">Last Name<span class="text-danger" data-children-count="0">*</span></label>
<input type="text" name="lname" class="form-control"  placeholder="Enter last name" autocomplete="off">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label" for="exampleInputEmail1">Other Name</label>
<input type="text" class="form-control" name="mname"  placeholder="Enter any other name .." value="">
</div>
    </div>

</div>
<div class="row gy-4">
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label" for="exampleInputEmail1">Email<span class="text-danger" data-children-count="0">*</span></label>
<input type="text" class="form-control" name="email" required="" placeholder="Enter email.." value="">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label" for="exampleInputEmail1">Phone<span class="text-danger" data-children-count="0">*</span></label>
<input type="text" class="form-control" name="phone" required="" placeholder="Enter phone number" value="">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="0">
<label class="form-label" for="exampleInputEmail1">Alternative Phone</label>
<input type="text" class="form-control" name="alt_phone" placeholder="Enter anothe number.." value="">
</div> 
    </div>

</div>

<div class="row gy-4">
    <div class="col-lg-4">
        <div class="form-group" data-children-count="1">
<label class="form-label " for="exampleInputPassword1">Password<span class="text-danger" data-children-count="0">*</span></label>
<input type="password" class="form-control" name="password" required="" value="" placeholder="Enter dummy password">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="0">
<label class="form-label" for="exampleInputEmail1">NIN</label>
<input type="text" class="form-control" name="nin" placeholder="Enter NIN.." value="">
</div>
    </div>
    <div class="col-lg-4">
        <div class="form-group" data-children-count="0">
<label class="form-label" for="exampleInputEmail1">Address</label>
<input type="text" class="form-control" name="signature" placeholder="Current home location" value="">
</div>
         
    </div>

</div>
<div class="row gy-4">
    <div class="col-lg-4">
        <div class="form-group">
            <label class="form-label">Sex</label>
         <div class="col-lg-12">
            <ul class="custom-control-group g-3 align-center flex-wrap">
                <li>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" checked="" value="Male" name="sex" id="sel-Male">
                        <label class="custom-control-label" for="sel-Male">Male</label>
                    </div>
                </li>
                <li>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="sex" value="Female" id="sel-Female">
                        <label class="custom-control-label" for="sel-Female">Female</label>
                    </div>
                </li>
                
            </ul>
        </div>
        </div>
        
    </div>
    <div class="col-lg-4">
        <div class="form-group">
<label class="form-label" for="default-06">Select Role</label>
<div class="form-control-wrap ">
    <div class="form-control-select">
        <select class="form-control" name ="user_role" required="" id="default-06">
            <option value="">Select </option>
            @foreach($roles as $role)
            <option value="{{$role->code}}">{{$role->name}}</option>
    
            @endforeach

        </select>
    </div>
</div>
</div>

</div>


</div>

<div class="row gy-4">
    <div class="col-lg-12 mt-2">
            <button type="submit" class="btn btn-primary btn-l">Save</button>

    </div>

</div>
</div>
</form>
</div>
</div>
</div>
</div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

@endsection