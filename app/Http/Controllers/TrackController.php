<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Office;
use App\OfficeTrack;

class TrackController extends Controller
{
    public function index()
    {
    	Session(['title'=>'Tracks']);
    	$tracks = Track::get();
    	return view('tracks.index')->with(['tracks'=>$tracks]);
    }

     public function create()
    {
    	Session(['title'=>'Create Track']);
    	$track = new Track;
    	$offices = Office::get();
    	return view('tracks.create')->with(['track'=>$track, 'offices'=>$offices]);
    }

    public function store(Request $request){
    	if($request->id){
            $track = Track::find($request->id);

            //First delete all previous items
        	TrackOffice::where('track_id', $track->id)->delete();
        }else{
            $track = new Track();
        }

        $items = explode(',', substr($request->items, 0, -1)); //Remove last comma before exploding

        $track->name = $request->name;
        $track->date = $request->date;
        $track->status = "new";
        $track->user_id = 1;
        $track->item_count = count($items);
        $track->save();

        for($i = 0; $i < count($items); $i++){
        	$item_id = intval($items[$i]);
        	if($item_id){
        		$item = new OfficeTrack;
	        	$item->track_id = $track->id;
	        	$item->office_id = $item_id;
	        	$item->sequence = $i;
	        	$item->save();
        	}
        }

        return redirect('tracks');
    }

    public function show($id){
        $track = Track::find($id);
        return view('tracks.show')->with(['track'=>$track]);
    }
}
