<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->time('fecha_solicitud');
            $table->string('asunto');
            $table->string('organismo');
            $table->string('area');
            $table->string('ci_rif')
                    ->nullable();
            $table->time('fecha_traslado');
            $table->string('concepto');
            $table->double('monto',15,3);
            $table->string('status');

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
        Schema::drop('solicitudes');
    }

}
