<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_custom = Role::where('name', 'customer')->first();
        $role_manager  = Role::where('name', 'admin')->first();

        $custom = new User();
        $custom->name = 'custom Name';
        $custom->email = 'custom@example.com';
        $custom->password = bcrypt('123456');
        $custom->save();
        $custom->roles()->attach($role_custom);
 
        $manager = new User();
        $manager->name = 'Admin Name';
        $manager->email = 'admin@example.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
