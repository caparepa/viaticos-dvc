<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono')
                    ->nullable();
            $table->string('email')
                    ->unique();
            $table->string('password');
            $table->string('ci_rif');
            $table->string('cargo');
            $table->string('rol');
            $table->string('status');
            $table->rememberToken();
            $table->timestamp('last_login')
                    ->nullable();
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
        Schema::drop('usuarios');
    }


}
