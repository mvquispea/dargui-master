<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' =>'admin'
        ]);
        Role::create([
            'name' => 'Editor',
            'guard_name' =>'editor'
        ]);
    }
}
