<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipsvehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipsvehiculos', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('idmarc')->unsigned();
            $table->string('nomTipo');

            $table->timestamps();

            $table->foreign('idmarc')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipsvehiculos');
    }
}
