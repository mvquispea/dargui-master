<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'title' => 'Importancia de la alimentación durante la pandemia COVID 19 por la nutricionista Vivian Gueller',
            'description' =>'La nutricionista Vivian Gueller nos comenta sobre la importancia de la alimentación durante la pandemia del COVID-19.',
            'url' => 'https://youtu.be/ros5bIDqMJM',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/importancia_de_la_alimentacion.jpg',
        ]);
        Video::create([
            'title' => 'La alimentación en la gestante en tiempos de pandemia por la nutricionista Sara Rosas',
            'description' =>'La docente de la Carrera de Nutrición y Dietética, Sara Rosas, nos habla sobre la alimentación de las gestantes en época de la pandemia.',
            'url' => 'https://youtu.be/VMeHRThV_KE',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/alimentacion_en_gestante.jpg',
        ]);
        Video::create([
            'title' => '¿Por qué es importante realizar ejercicios en cuarentena? por el Mag. Christian De La Torre',
            'description' =>'El director de la Carrera Ciencias de la Actividad Física y el Deporte, Christian De La Torre, nos comenta porqué es importante realizar ejercicios en cuarentena.',
            'url' => 'https://youtu.be/IZZYen3tLBw',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/importante_realizar_ejercicios.jpg',
        ]);
        Video::create([
            'title' => 'La limpieza de manos en tiempos de COVID por Elena Cavada',
            'description' =>'Es importante conocer el tiempo adecuado de lavado de manos. Por ello, Elena Cavada, docente de la Carrera de Ciencias de la Salud en USIL nos brinda consejos sobre cómo realizar una limpieza de manos adecuadamente.',
            'url' => 'https://youtu.be/QRVtuI_L6XA',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/limpieza_de_manos.jpg',
        ]);
        Video::create([
            'title' => 'La automedicación por la Dra. Maria Saravia',
            'description' =>'La Dra María Saravia, directora de la Carrera de Medicina Humana de la USIL, nos comenta los riesgos de la automedicación y el aumento de esta práctica durante la etapa de pandemia.',
            'url' => 'https://youtu.be/PNjT_qwAq9g',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/automedicacion.jpg',
        ]);
        Video::create([
            'title' => 'Manejo de nuestras emociones - Mag. Ana Lorena Elguera',
            'description' =>'La Directora Académica de la Carrera de Psicología de la USIL, Mag. Ana Lorena Elguera, nos comentará sobre el manejo de nuestras emociones durante la pandemia del Covid-19.',
            'url' => 'https://youtu.be/_V37gaF5MTY',
            'autor_id' => 1,
            'image' => '/alertausil/img/multimedia/videos/manejo_emociones.jpg',
        ]);
    }
}
