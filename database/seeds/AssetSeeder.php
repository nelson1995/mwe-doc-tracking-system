<?php

use App\User;
use App\Asset;
use App\Status;
use App\Department;
use App\AssetCategories;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assetCategories = AssetCategories::get();
        $status = Status::get();
        $locations = ['luzira','Ntinda','kampala','Mengo'];
        $department = Department::get();
        $user = User::get();
        $randomStatus=0;
        $randomUser=0;
        $randomDept=0;
        $randomAssetCategory=0;
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
            $asset = new Asset();
            $asset->asset_name = $faker->firstName;
            $asset->model_name = $faker->lastName;
            $asset->serial_number = '55ABS244';
            $asset->cost_of_asset = 5544000;
            $asset->date_acquired = Carbon::now();
            $asset->warranty_date = Carbon::now();
            $asset->asset_description = $faker->text;
            $asset->latitude = $faker->latitude;
            $asset->longitude = $faker->longitude;
            $asset->user_id = $user[rand($randomUser,5)]->id;
            $asset->department_id = $department[rand($randomDept,3)]->id;
            $asset->status_id = $status[rand($randomStatus,1)]->id;
            $asset->asset_category_id = $assetCategories[rand($randomAssetCategory,3)]->id;
            $asset->save();
        }

    }
}
