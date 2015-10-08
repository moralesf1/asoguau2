<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idtiponoticia')->unsigned();
            $table->integer('idusuario')->unsigned();
            $table->text('titulo');
            $table->mediumText('descripcion');
            $table->mediumText('resumen');
            $table->dateTime('hora');
            $table->timestamps();

             $table->foreign('idtiponoticia')
                        ->references('id')
                        ->on('tiponoticia')
                        ->onDelete('cascade');


            $table->foreign('idusuario')
                        ->references('id')
                        ->on('usuario')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('noticia');
    }
}
