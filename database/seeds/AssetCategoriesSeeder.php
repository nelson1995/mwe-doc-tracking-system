<?php

use App\AssetCategories;
use Illuminate\Database\Seeder;

class AssetCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['IT-devices','Office-ware','land-titles','Fleet'];

        for($i=0;$i<count($categories);$i++){
            $assetCategory1 = new AssetCategories();
            $assetCategory1->asset_category = $categories[$i];
            $assetCategory1->save(); 
        }
    }
}
