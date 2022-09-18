<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'lastname' =>'Admin',
            'email' => 'root@root.com',
            'password' => bcrypt('alertausil123'),
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Víctor',
            'lastname' =>'Vega',
            'email' => 'vvega@usil.edu.pe',
            'password' => bcrypt('alertausil123'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Junior',
            'lastname' =>'Casana',
            'email' => 'jcasana@usil.edu.pe',
            'password' => bcrypt('alertausil123'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Luis Alberto',
            'lastname' =>'Chávez',
            'email' => 'lchavezr@usil.edu.pe',
            'password' => bcrypt('alertausil123'),
            'role_id' => 2,
        ]);
    }
}
