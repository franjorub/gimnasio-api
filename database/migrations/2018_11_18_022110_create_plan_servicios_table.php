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

            $table->foreign('id_plan')
            ->references('id')->on('plan')
            ->onDelete('cascade');

            $table->foreign('id_servicio')
            ->references('id')->on('servicio')
            ->onDelete('cascade');

        });
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
