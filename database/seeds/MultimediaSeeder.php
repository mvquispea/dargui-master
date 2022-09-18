<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Multimedia;

class MultimediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Multimedia::create([
            'name' => 'Videos',
            'slug' => 'videos',
            'icon' => null,
            'orden' => 1,
            'favorite'=> true,
        ]);
        Multimedia::create([
            'name' => 'Fotos',
            'slug' => 'fotos',
            'icon' => null,
            'orden' => 2,
            'favorite'=> false,
        ]);
        Multimedia::create([
            'name' => 'Podcast',
            'slug' => 'podcast',
            'icon' => null,
            'orden' => 3,
            'favorite'=> false,
        ]);
        Multimedia::create([
            'name' => 'Infografías',
            'slug' => 'infografias',
            'icon' => null,
            'orden' => 4,
            'favorite'=> true,
        ]);
    }
}
