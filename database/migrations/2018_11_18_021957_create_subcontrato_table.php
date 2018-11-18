<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcontratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcontrato', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
            $table->unsignedinteger('id_contrato');
            $table->unsignedinteger('id_plan')->nullable();
            $table->unsignedinteger('id_servicio')->nullable();
            $table->timestamps();

            $table->foreign('id_contrato')
            ->references('id')->on('contrato')
            ->onDelete('cascade');

            $table->foreign('id_plan')
            ->references('id')->on('plan')
            ->onDelete('cascade');

            $table->foreign('id_servicio')
            ->references('id')->on('servicio')
            ->onDelete('cascade');

        });

        DB::statement('ALTER TABLE SUBCONTRATO ADD CONSTRAINT ARC_SUB CHECK (((id_plan is NULL) AND (id_servicio IS NOT NULL)) OR ((id_plan IS NOT NULL) AND (id_servicio IS NULL)))');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcontrato');
    }
}
