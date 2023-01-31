@extends('layouts.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">{{session('title')}}</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Allow users to configure tracks for documents</p>
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

                                                    <form method="post" action="{{route('store_track')}}">
@csrf
    <input type="hidden" name="items" id="track-items" />

<div class="row gy-4">
<div class="col-lg-6">
<input type="hidden" name="id" value="{{$track->id}}">
<div class="form-group">
<label class="form-label" for="exampleInputEmail1">Track Name<span class="text-danger">*</span></label>
<input type="text" class="form-control" name="name" required="" placeholder="Enter name .." value="{{$track->name}}">
</div>
<!-- <div class="form-group">
<label for="exampleInputEmail1">Created By<span class="text-danger">*</span></label>
<input type="text" class="form-control" name="name" required="" placeholder="Enter the fullnames.." value="{{$track->created_by}}">
</div> -->
<div class="form-group">
<label class="form-label " for="exampleInputPassword1">Date Created<span class="text-danger">*</span></label>
<input type="date" class="form-control" name="date" required="" value="{{$track->date}}">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-label" for="exampleInputPassword1">Add Offices<span class="text-danger">*</span></label>

<input type="text" name="item_name" class="form-control" id="autocomplete" placeholder="Type to Add Office" />
</div>
<div class="input-group item-container">
<ul id="items">
    @if(isset($items))
        @foreach($items as $item)
            <li class="item success" data-id="{{$item->id}}" id="item-{{$item->id}}">{{$item->name}} <i class="mdi mdi-delete remove-item" data-id="{{$item->id}}" attr-title="{{$item->title}}"></i></li>
        @endforeach
    @endif
</ul>
</div>
</div>

<div class="col-lg-6">
    <button type="submit" class="btn btn-primary">Save</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.datepicker').datepicker();
        var el = document.getElementById('items');
        var sortable = Sortable.create(el, {
            onUpdate: function (evt) {                
                refreshItems();
            }
        });

        refreshItems();

        $('body').on('click', 'ul#items li .remove-item', function(){
            title = $(this).attr('attr-title');
            id = $(this).attr('data-id');
            $('#item-' + id).remove();
            refreshItems();
        });

        $('#autocomplete').devbridgeAutocomplete({
            serviceUrl: APP_URL + '/offices/search',
            paramName: 's',
            onSelect: function(suggestion){
                     console.log(suggestion);

                addItem(suggestion);
                $('#autocomplete').val('');
            }
        });

        function addItem(suggestion){
            /*var exists = false;
            $('#items li').each(function(i){
                id = $(this).attr('data-id');
                if(id == suggestion.data.id){
                    exists = true;
                    return;
                }
            });*/

            $('#items').append('<li class="item item-' + suggestion.data.type + '" id="item-' + suggestion.data.id + '" data-id="' + suggestion.data.id + '">' + suggestion.value + '<i class="mdi mdi-delete remove-item" data-id="' + suggestion.data.id + '" attr-title="' + suggestion.value + '"></i></li>');

            refreshItems();
        }

        function refreshItems(){
            var items = '';
            var order = sortable.toArray();
            $.each(order, function(i, t){
                items += t + ',';
            });

            $('#track-items').val(items);
            console.log(items);
        }
    });
</script>
                                              
@endsection