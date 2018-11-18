<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('rol')->insert([
            'nombre' => 'admin', 
        ]);
        DB::table('rol')->insert([
            'nombre' => 'user', 
        ]);
    }
}
