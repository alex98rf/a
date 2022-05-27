<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('propietario');
            $table->string('marca');
            $table->string('modelo');
            $table->decimal('precio', 5, 2);
            $table->date('ahno');
            $table->date('ultima_fecha_matriculacion');
            $table->decimal('codigo_promocion',5,2);

            $table->unsignedBigInteger('customers_id')->unique()->nullable();

            $table->foreign('customers_id')
                ->references('id')
                ->on('customers')
                ->onDelete('set null')
                ->onUpdate('cascade');
                
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
        Schema::dropIfExists('cars');
    }
}
