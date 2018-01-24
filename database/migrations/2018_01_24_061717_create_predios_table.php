<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFin')->unsigned();
            $table->string('nombrePredio', 30);
            $table->integer('numLote');
            $table->decimal('superficie', 10,2);
            $table->string('tipIrrigacion', 20);
            $table->string('tipRiego', 20);
            $table->text('observaciones')->nullable();

            $table->timestamps();

            $table->foreign('idFin')->references('id')->on('fincas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predios');
    }
}
