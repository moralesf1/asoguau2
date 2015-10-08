<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtipousuario')->unsigned();
			$table->foreign('idtipousuario')->references('id')->on('tipousuario');
			$table->integer('idestatususuario')->unsigned();
			$table->foreign('idestatususuario')->references('id')->on('estatus')->default(1);
			$table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
			$table->softDeletes();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}
