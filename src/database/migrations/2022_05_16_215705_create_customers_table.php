<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->integer('numero');
            $table->string('direccion');
            $table->string('ciudad');
            $table->char('codigopostal', 5);
            $table->string('pais');
            $table->string('municipio');
            $table->string('titular_tarjeta');
            $table->string('numero_tarjeta');
            $table->integer('mes_expiracion_tarjeta');
            $table->integer('anho_expiracion_tarjeta');
            $table->integer('cvv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
