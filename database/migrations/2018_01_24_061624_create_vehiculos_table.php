<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTipoV')->unsigned();
            $table->integer('idFinca')->unsigned();
            $table->string('Marca', 25);
            $table->string('Combustible', 8)->nullable();
            $table->string('Rendimiento', 25)->nullable();
            $table->integer('ModeloVeh');
            $table->integer('Adepreciacion')->nullable();
            $table->decimal('ValorActVeh', 12,2)->nullable();

            $table->timestamps();

            $table->foreign('idTipoV')->references('id')->on('tipsvehiculos');
            $table->foreign('idFinca')->references('id')->on('fincas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}