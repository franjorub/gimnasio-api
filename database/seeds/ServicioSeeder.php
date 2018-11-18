<?php

use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('servicio')->insert([
            'nombre' => ,
            'descripcion' => ,
        ]);*/

        DB::table('servicio')->insert([
            'nombre' => 'Personal Trainer',
            'descripcion' => 'Puedes adquirir el servicio de personal Trainer para lograr tus objetivos a corto plazo, este plan tiene 20 sesiones personalizadas de entrenamiento durante mes para ti, donde tendrás a disposición el entrenador supervisando y guiándote mientras ejecutas los movimientos y rutinas de acuerdo al objetivo que desees lograr.',
        ]);
        DB::table('servicio')->insert([
            'nombre' => 'Crossfit',
            'descripcion' => 'Clases de Crossfit',
        ]);
        DB::table('servicio')->insert([
            'nombre' => 'T.R.X',
            'descripcion' => 'Clases de T.R.X',
        ]);
    }
}
