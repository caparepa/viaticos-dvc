<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_usuarios', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            
            $table->integer('id_solicitud')
                    ->unsigned();
            $table->integer('id_solicitante')
                    ->unsigned();
            $table->integer('id_aprobacion')
                    ->unsigned();

            $table->foreign('id_solicitud')
                    ->references('id')
                    ->onDelete('cascade')
                    ->on('solicitudes');
            $table->foreign('id_solicitante')
                    ->references('id')
                    ->onDelete('cascade')
                    ->on('usuarios');
            $table->foreign('id_aprobacion')
                    ->references('id')
                    ->onDelete('cascade')
                    ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('solicitudes_usuarios');
       
    }
}

