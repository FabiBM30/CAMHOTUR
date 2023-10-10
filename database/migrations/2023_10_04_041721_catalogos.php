<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Catalogos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('catalogos', function (Blueprint $table) {
            $table->bigIncrements('idCatalogos');
            $table->string('nombreCatalogos');
            $table->bigInteger('id_Empre')->unsigned();
            $table->string('cantidad');
            $table->string('estado');
            $table->string('foto');
            $table->timestamps();

                // Clave foránea
                $table->foreign('id_Empre')->references('idEmprendimiento')->on('emprendimientos');
       
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
