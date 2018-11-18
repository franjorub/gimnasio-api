<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->float('monto_inscripcion',10,2);
            $table->unsignedinteger('id_cliente');
            $table->unsignedinteger('id_plan');
            $table->timestamps();


            $table->foreign('id_cliente')
            ->references('id')->on('cliente')
            ->onDelete('cascade');
            $table->foreign('id_plan')
            ->references('id')->on('plan')
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
        Schema::dropIfExists('contrato');
    }
}
