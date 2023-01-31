@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Users List</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total {{count($users)}} users</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        
                                                        <li><a href="{{route('create_user')}}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Create</span> </a></li>
                                                        
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
                                                            <th class="nk-tb-col"> <span class="sub-text">Full Name</span></th>

                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                             <td class="nk-tb-col tb-col-md">
                                                                <span>Position</span>
                                                            </td>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Sex</span></th>

                                                            <th class="nk-tb-col tb-col-lg"> <span class="sub-text">NIN</span></th>

                                                            <th class="nk-tb-col nk-tb-col-tools text-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                                            : activate to sort column ascending">
                                                            </th></tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $array = array('bg-danger', 'bg-success', 'bg-info', 'bg-primary'); @endphp
                                                        @foreach($users as $user)
                                                    <tr class="nk-tb-item odd" role="row">
                                                            <td class="nk-tb-col">
                                                                <div class="">
                                                                    {{$user->id}}
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-avatar {{$array[array_rand($array)]}} d-none d-sm-flex">
                                                                        <span>{{$user->lname[0].$user->fname[0]}}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{$user->fullname()}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span class="tb-amount">{{$user->email}} </span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{$user->phone}}</span>
                                                            </td>
                                                             <td class="nk-tb-col tb-col-md">
                                                                <span>{{$user->getRoleNames()->get(0)}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg" data-order="Email Unverified - Kyc Unverified">
                                                               <span>{{$user->sex}}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg">
                                                                <span>{{$user->nin}}</span>
                                                            </td>
                                                           
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                                            <em class="icon ni ni-eye-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Suspend">
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
                                </div>
                            </div>
                        </div>
                    </div>

<script type="text/javascript">
    
       jQuery(document).ready(function(){
        $("#datatable").DataTable({
            columnDefs: [{ orderable: false, targets: [4] }],
        });
    });
</script>

@endsection