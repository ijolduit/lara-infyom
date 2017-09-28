<?php

use App\Role;
use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Role();
        $owner->name = 'owner';
        $owner->display_name = 'Project Owner';
        $owner->description = 'Project Owner';
        $owner->save();

        $owner = new Role();
        $owner->name = 'admin';
        $owner->display_name = 'Project Admin';
        $owner->description = 'Project Admin';
        $owner->save();
    }
}
