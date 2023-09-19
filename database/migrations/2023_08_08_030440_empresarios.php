<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empresarios', function (Blueprint $table) {
            $table->bigIncrements('idEmpresario');
            $table->string('nombreEmpresario');
            $table->string('apellidoEmpresario');
     
            //$table->int('edadEmpresario');
            $table->string('generoEmpresario');
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
        //
    }
}
