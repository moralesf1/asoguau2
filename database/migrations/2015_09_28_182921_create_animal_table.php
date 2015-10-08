<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('idespecie')->unsigned();
            $table->integer('idestatususuario')->unsigned();
            $table->string('nombre');
            $table->mediumText('comentario');
            $table->timestamps();

            $table->foreign('idespecie')
                        ->references('id')
                        ->on('especie')
                        ->onDelete('cascade');


            $table->foreign('idestatususuario')
                        ->references('id')
                        ->on('estatus')
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
        Schema::drop('animal');
    }
}
