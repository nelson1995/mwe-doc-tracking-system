<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;	

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // create permissions
        Permission::create(['name' => 'create document']);
        Permission::create(['name' => 'edit document']);
        Permission::create(['name' => 'delete document']);
    

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Permanent Secretary']);
        $role1->givePermissionTo('create document');
        $role1->givePermissionTo('edit document');
        $role1->givePermissionTo('delete document');

        $role2 = Role::create(['name' => 'Officer']);
        $role2->givePermissionTo('create document');
        $role2->givePermissionTo('edit document');

        // create demo users
        $user = Factory(App\User::class)->create([
            'fname' => 'Mumpe',
            'email' => 'myko@gmail.com',
            'password' => 'password',
            'username' => 'myko22',

        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'first_name' => 'Okello',
            'email' => 'okello@gmail.com',
            'password' => 'mwe123',
            'username' => 'okello',
        ]);
        $user->assignRole($role2);

    }
}
