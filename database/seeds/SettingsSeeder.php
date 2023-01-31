<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\SubDepartment;
use App\Branch;
use App\Office;
use Illuminate\Support\Str;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	$faker = Faker\Factory::create();

    	for($i = 0; $i < 5; $i++){
    		$department = new Department;
    		$department->name = $faker->sentence(3, true);
    		$department->abbreviation = Str::random(3);
    		$department->save();
    	}

    	for($i = 0; $i < 30; $i++){
    		$subdept = new SubDepartment;
    		$subdept->name = $faker->sentence(3, true);
    		$subdept->abbreviation = $faker->word;

    		$dept = Department::all();
    		$subdept->department_id = $dept[rand(0,4)]->id;

    		$subdept->save();
    		
    	}

    	for($i = 0; $i<7; $i++){
    		$branch = new Branch;
    		$branch->name = $faker->sentence(3, true);
    		$branch->address = $faker->sentence(5, true);
    		$branch->save();
    	}

    	for($i = 0; $i < 100; $i++){
    		$office = new Office;
    		$office->name = $faker->sentence(2, true);
    		$office->location = $faker->sentence(5,true);

    		$subdepts = SubDepartment::all();
    		$office->sub_department_id = $subdepts[rand(0,29)]->id;

    		$office->save();
    		
    	}

        
    }
}
