<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $role = new \App\Role();
        $role->name = 'Administrators';
        $role->display_name = 'Administrators';
        $role->description = 'Administrators';
        $role->save();

        $manageUsers = new \App\Permission();
        $manageUsers->name = 'manage_users';
        $manageUsers->display_name = 'Manage Users';
        $manageUsers->save();

        $role->perms()->sync([$manageUsers->id]);

        $admin = new \App\Admin();
        $admin->name = 'admin';
        $admin->save();
        $admin->attachRole($role);
    }
}
