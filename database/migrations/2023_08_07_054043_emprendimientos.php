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
            $table->string('nombreEmprendimiento');
            $table->string('nombreEmprendimiento');
            $table->string('descripcionEmprendimiento');
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
