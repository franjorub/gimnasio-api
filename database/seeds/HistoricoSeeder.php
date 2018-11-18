<?php

use Illuminate\Database\Seeder;

class HistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 200,
            'id_plan' => 1,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 400,
            'id_plan' => 2,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 500,
            'id_plan' => 3,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 600,
            'id_plan' => 4,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 600,
            'id_servicio' => 1,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 300,
            'id_servicio' => 2,
        ]);
        DB::table('historico_costo')->insert([
            'fecha_inicio' => NOW() ,
            'costo' => 400,
            'id_servicio' => 3,
        ]);

    }
}
