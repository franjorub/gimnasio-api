<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_servicios', function (Blueprint $table) {
           
            $table->unsignedinteger('id_plan')->nullable();
            $table->unsignedinteger('id_servicio')->nullable();
            $table->timestamps();

            
            
        });
        DB::statement('ALTER TABLE plan_servicios  ADD PRIMARY KEY (id_plan, id_servicio);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_servicios');
    }
}
