<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Str;
use App\Office;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fname = "Michael";
        $user->lname = "Mumpe";
        $user->mname = "butuks";
        $user->email = "myko@gmail.com";
        $user->phone = "0775787539";
        $user->password = Hash::make('password');
        $user->sex = 1;
        $user->nin = Str::random(15);
       	$user->save();

    }
}
