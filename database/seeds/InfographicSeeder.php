<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Infographic;

class InfographicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Infographic::create([
            'title' => 'La alimentación como aliado de nuestro Sistema Inmunológico',
            'file' => '/alertausil/files/infografia/alimentacion_y_sistema_inmune.jpg',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Circuito de ejercicios',
            'file' => '/alertausil/files/infografia/Circuito_de_ejercicios.pdf',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => '¿Cómo evitar infectarme de Covid 19?',
            'file' => '/alertausil/files/infografia/Como_evitar_infectarme_de_Covid19.pdf',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => '¿Estás por salir de casa?',
            'file' => '/alertausil/files/infografia/Estas_por_salir_de_casa.pdf',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Lavado de manos',
            'file' => '/alertausil/files/infografia/Lavado_de_manos_alerta_usil.pdf',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Medidas de Higiene Coronavirus',
            'file' => '/alertausil/files/infografia/MEDIDAS_DE_HIGIENE_CORONAVIRUS.pdf',
            'autor_id' => 1,
            'created_at' => '2021-03-31 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Somos una familia y debemos cuidarnos',
            'file' => '/alertausil/files/infografia/Somos_una_familia_y_debemos_cuidarnos.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-03 16:37:33',
        ]);
        Infographic::create([
            'title' => 'Hábitos saludables',
            'file' => '/alertausil/files/infografia/Habitos-saludables-marzo-2021.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-03 16:38:33',
        ]);
        Infographic::create([
            'title' => 'Recomendaciones nutricionales saludables para la cuarentena',
            'file' => '/alertausil/files/infografia/Recomendaciones-nutricionales-saludables-marzo-2021.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-03 16:39:33',
        ]);
        Infographic::create([
            'title' => '4 Aliados naturales de la Felicidad',
            'file' => '/alertausil/files/infografia/4_Aliados_naturales_de_la_Felicidad.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-03 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Vitamina C y complementos saludables para el almuerzo',
            'file' => '/alertausil/files/infografia/Vitamica_C_y_complementos_saludables_para_el_almuerzo.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-04 17:39:33',
        ]);
        Infographic::create([
            'title' => 'Obesidad y covid-19',
            'file' => '/alertausil/files/infografia/La_obesidad_aumenta_el_riesgo_de_enfermedades_por_covid.pdf',
            'autor_id' => 1,
            'created_at' => '2021-04-05 17:39:33',
        ]);
        
    }
}
