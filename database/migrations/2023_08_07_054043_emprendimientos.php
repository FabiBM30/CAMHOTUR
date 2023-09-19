<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Emprendimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emprendimientos', function (Blueprint $table) {
            $table->bigIncrements('idEmprendimiento');
            $table->bigInteger('id_Distrito')->unsigned();
            $table->string('nombreEmprendimiento');
            $table->string('tipo_emprendimiento');
            $table->string('descripcionEmprendimiento');
            $table->timestamps();





//llave foranea de distritos
            $table->foreign('id_Distrito')->references('id')->on('distritos');

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
