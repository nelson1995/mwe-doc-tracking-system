<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 = new Role;
       $role1->name='PERMANENT SECRETARY';
       $role1->code='PS';
       $role1->rank=1;
       $role1-> save();

       $role2 = new Role;
       $role2->name='UNDER SECRETARY';
       $role2->code='US';
       $role2->rank=2;
       $role2-> save();

       $role3 = new Role;
       $role3->name='DIRECTOR';
       $role3->code='DIR';
       $role3->rank=3;
       $role3-> save();

       $role4 = new Role;
       $role4->name='COMMISSIONER';
       $role4->code='COM';
       $role4->rank=4;
       $role4-> save();

       $role5 = new Role;
       $role5->name='ASSISTANT COMMISSIONER';
       $role5->code='AG';
       $role5->rank=5;
       $role5-> save();

       $role6 = new Role;
       $role6->name='OFFICER';
       $role6->code='OFC';
       $role6->rank=6;
       $role6-> save();

    }
}
