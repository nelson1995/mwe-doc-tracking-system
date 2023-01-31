<?php

namespace App\Http\Controllers;

use App\User;
use App\Asset;
use App\Status;
use App\Department;
use App\AssetCategories;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Spatie\TemporaryDirectory\TemporaryDirectory;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session(['title'=>'Assets']);
        $assets = Asset::get();
        return view('assets.index')->with(["assets"=>$assets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session(['title'=>'Create Asset']);
        $statuses = Status::query()->get();
        $assetCategories = AssetCategories::query()->get();
        $departments = Department::query()->get();
        $users = User::query()->get();

        return response()->json([
            'users'=>$users,
            'departments'=>$departments,
            'assetCategories'=>$assetCategories,
            'statuses'=>$statuses,   
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asset = new Asset();
        $asset->asset_name = $request->asset_name;
        $asset->model_name = $request->model;
        $asset->serial_number = $request->serial_number;
        $asset->date_acquired = $request->date_acquired;
        $asset->warranty_date = $request->warranty_date;
        $asset->cost_of_asset = $request->cost;
        $asset->location_of_asset = $request->location;
        $asset->latitude = $request->latitude;
        $asset->longitude = $request->longitude;
        $asset->asset_description = $request->asset_descrp;
        $asset->asset_category_id = $request->asset_category[0];
        $asset->user_id = $request->user[0];
        $asset->department_id = $request->department[0];
        $asset->status_id = $request->status[0];

        $temporaryDirectory = (new TemporaryDirectory())->name($asset->asset_name)->location('storage/')->create();

        $qrPath = 'storage/'.$asset->asset_name.'/qrcode.png';
        $qrCode = QrCode::size(100)->format('png')->generate($asset->asset_name,$qrPath);
        $asset->qr_code = base64_encode($qrCode);
        $asset->save();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $asset->addMediaFromRequest('image')->toMediaCollection('assets_images');
        }

        $asset->addMedia($qrPath)->toMediaCollection('qr_codes','qr-code');

        if(!$asset){
            return redirect()->withErrors("Failed to update record");
        }

        $temporaryDirectory->delete();
        
        return redirect()->route('list_assets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showAssetDetails($id)
    {
        Session(['title'=>'Asset Details']);
        $asset = Asset::query()->where('id',$id)
        ->with('department')
        ->with('status')
        ->with('user')
        ->with('assetCategories')
        ->first();

        return view('assets.showAssetDetails')->with(["asset"=>$asset]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Session(['title'=>'Edit Asset']);
        $asset = Asset::query()->where('id',$id)
        ->with('department')
        ->with('status')
        ->with('user')
        ->with('assetCategories')
        ->first();
        $assetImage = $asset->getAssetsImage();
        $statuses = Status::query()->get();
        $assetCategories = AssetCategories::query()->get();
        $departments = Department::query()->get();
        $users = User::query()->get();
        
        return response()->json([
            'asset'=>$asset,
            'assetImage'=>$assetImage,
            'users'=>$users,
            'departments'=>$departments,
            'assetCategories'=>$assetCategories,
            'statuses'=>$statuses,   
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $asset = Asset::query()->where('id',$request->id)->first();
        $asset->asset_name = $request->asset_name;
        $asset->model_name = $request->model;
        $asset->serial_number = $request->serial_number;
        $asset->date_acquired = $request->date_acquired;
        $asset->warranty_date = $request->warranty_date;
        $asset->cost_of_asset = $request->cost;
        $asset->location_of_asset = $request->location;
        $asset->latitude = $request->latitude;
        $asset->longitude = $request->longitude;
        $asset->asset_description = $request->asset_descrp;
        $asset->asset_category_id = $request->asset_category[0];
        $asset->user_id = $request->user[0];
        $asset->department_id = $request->department[0];
        $asset->status_id = $request->status[0];

        $temporaryDirectory = (new TemporaryDirectory())->name($asset->asset_name)->location('storage/')->create();
        $imageName = 'qrcode.png';
        $qrPath = 'storage/'.$asset->asset_name.'/'.$imageName;
        QrCode::size(100)->format('png')->generate($asset->asset_name,$qrPath);
        $asset->save();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $asset->addMediaFromRequest('image')->toMediaCollection('assets_images','uploads');
        }
        $asset->addMedia($qrPath)->toMediaCollection('qr_codes','qr-code');

        if(!$asset){
            return redirect()->withErrors("Failed to update record");
        }

        $temporaryDirectory->delete();

        return redirect()->route('list_assets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Asset::query()->where('id',$id)->delete();
        if(!$result){
            return response()->json(['error'=>'Failed to delete asset!']);
        }
        return response()->json(['success'=>'Deleted Asset.']);
    }
}
