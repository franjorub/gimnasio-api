<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoCostoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_costo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
            $table->float('costo',10,2);
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

        DB::statement('ALTER TABLE historico_costo ADD CONSTRAINT ARC_SUB CHECK (((id_plan is NULL) AND (id_servicio IS NOT NULL)) OR ((id_plan IS NOT NULL) AND (id_servicio IS NULL)))');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_costo');
    }
}
