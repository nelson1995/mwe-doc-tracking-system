<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->status = "active";
        $status->save();
        
        $status1 = new Status();
        $status1->status = "inactive";
        $status1->save();    
    }
}
