<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10; $i < 30; $i++) { 
            Event::create([
                'title' => 'Evento '.$i,
                'description' => 'Descripción de evento '.$i,
                'autor_id' => 1,
            ]);
        }
    }
}
