<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->float('monto',10,2);
            $table->string('descripcion')->nullable();
            $table->unsignedinteger('id_factura');
            $table->timestamps();

            
            
        });
        Schema::table('pago', function(Blueprint $table) {
            $table->foreign('id_factura')
            ->references('id')->on('factura')
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
        Schema::dropIfExists('pago');
    }
}
