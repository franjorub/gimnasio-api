<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->unsignedinteger('id_contrato');
            $table->unsignedinteger('id_usuario');
            $table->timestamps();

            
            // $table->foreign('id_contrato')
            // ->references('id')->on('contrato')
            // ->onDelete('cascade');

            // $table->foreign('id_usuario')
            // ->references('id')->on('usuario')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
