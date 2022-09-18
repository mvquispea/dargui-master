<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Notice;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10; $i < 30; $i++) { 
            Notice::create([
                'title' => 'Noticia '.$i,
                'description' => 'Descripción de noticia '.$i,
                'autor_id' => 1,
            ]);
        }
    }
}
