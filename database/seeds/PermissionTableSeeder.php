<?php

use App\Permission;
use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createUser = new Permission();
        $createUser->name = 'create-user';
        $createUser->display_name = 'Create User';
        $createUser->description = 'Create New User';
        $createUser->save();

        $editUser = new Permission();
        $editUser->name = 'edit-user';
        $editUser->display_name = 'Edit User';
        $editUser->description = 'Edit User';
        $editUser->save();
    }
}
