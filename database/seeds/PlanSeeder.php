<?php

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('plan')->insert([
            'nombre' => ,
            'descripcion' => ,
        ]);*/

        DB::table('plan')->insert([
            'nombre' => 'Plan diurno',
            'descripcion' => 'Este plan de entrenamiento está diseñado para aquellas 
                            personas que no pueden disfrutar muchas sesiones de entrenamiento 
                            en ciertas horas, ya sea por motivos personales, laborales o 
                            logísticos, y que solo pueden programar su entrenamiento en 
                            horario matutino y vespertino, tienes acceso en horario de lunes 
                            a viernes de 5:30 am a 5:00 pm. Sábados y domingos de 7:00 am a 12:00 pm.',
        ]);

        DB::table('plan')->insert([
            'nombre' => 'Plan nocturno',
            'descripcion' => 'Este plan de entrenamiento está diseñado para aquellas personas que no pueden disfrutar muchas sesiones de entrenamiento en ciertas horas, ya sea por motivos personales, laborales o logísticos, y que solo pueden programar su entrenamiento en horario nocturno, tienes acceso en horario de lunes a viernes de 4:00 p.m. a 10:00 pm. Sábados y domingos de 12:00 pm a 4:00: pm.',
        ]);
        
        DB::table('plan')->insert([
            'nombre' => 'Plan turista',
            'descripcion' => 'Plan diseñado para todas aquellas personas, empresarios, turistas que vienen por un tiempo limitado a la ciudad y quieren seguir con su rutina de entrenamiento, tienes acceso en horario ilimitado durante 15 días continuos calendario',
        ]);

        DB::table('plan')->insert([
            'nombre' => 'Plan ilimitado',
            'descripcion' => 'Para todos aquellos que no tienen un horario de entrenamiento fijo definitivamente este plan es una buena opción ya que tienes acceso en horario ilimitado.',
        ]);
        
    }
}
