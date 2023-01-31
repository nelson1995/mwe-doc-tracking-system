<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Str;
use App\Office;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        $user = new User;
        $user->fname = "Michael";
        $user->lname = "Mumpe";
        $user->mname = "butuks";
        $user->email = "myko22@gmail.com";
        $user->phone = "0775787539";
        $user->username='myko22';
        $user->password = Hash::make('password');
        $user->sex = 1;
        $user->nin = Str::random(15);
        $user->save();

        for($i = 0; $i < 200; $i++){
        	$user = new User;
        	$user->fname = $faker->firstName;
        	$user->lname = $faker->lastName;
            $user->mname = $faker->firstName;
            $user->username = $faker->userName;
        	$user->email = $faker->email;
        	$user->phone = $faker->phoneNumber;
        	$user->password = Hash::make('password');
        	$user->sex = 1;
        	$user->nin = Str::random(15);
        	$offices = Office::all();
    		$user->office_id = $offices[rand(0,15)]->id;
        	$user->save();
        }
    }
}
