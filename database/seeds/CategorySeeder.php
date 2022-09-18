<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Medicina y Salud',
            'slug' => 'medicina',
            'icon' => '/alertausil/img/icons/expertos.png',
            'orden' => 1,
            'favorite' => true,
        ]);
        Category::create([
            'name' => 'Alimentación y Nutrición',
            'slug' => 'alimentacion',
            'icon' => '/alertausil/img/icons/expertos.png',
            'orden' => 2,
            'favorite' => true,
        ]);
        Category::create([
            'name' => 'Actividad Física para la Salud',
            'slug' => 'actividad',
            'icon' => '/alertausil/img/icons/expertos.png',
            'orden' => 3,
            'favorite' => true,
        ]);
        Category::create([
            'name' => 'Bienestar Emocional',
            'slug' => 'bienestar',
            'icon' => '/alertausil/img/icons/expertos.png',
            'orden' => 4,
            'favorite' => true,
        ]);
        Category::create([
            'name' => 'Artículos Científicos',
            'slug' => 'articulos-cientificos',
            'icon' => '/alertausil/img/icons/expertos.png',
            'orden' => 5,
            'favorite' => false,
        ]);
    }
}
