<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            "create user",
            "edit user",
            "delete user",
            "view users",
            "create office",
            "edit office",
            "delete office",
            "create document",
            "edit document",
            "delete document",
            "view document",
            "create department",
            "edit department",
            "delete department",
            "view roles",
            "create role",
            "edit role",
            "delete role",
            "view role",
            "create permission",
            "edit permission",
            "delete permission",
            "view permissions"
            ];

            foreach($permissions as $permission){
                Permission::create(["name"=>$permission]);
            }
    }
}
