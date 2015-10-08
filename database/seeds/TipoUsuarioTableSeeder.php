<?php

use Illuminate\Database\Seeder;
class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipousuario')->insert(array(
        	'nombre' => 'administrador'
        	));	

        \DB::table('tipousuario')->insert(array(
        	'nombre' => 'operador'
        	));
        \DB::table('tipousuario')->insert(array(
        	'nombre' => 'veterinario'
        	));
        \DB::table('tipousuario')->insert(array(
        	'nombre' => 'pasante'
        	));
        \DB::table('tipousuario')->insert(array(
        	'nombre' => 'general'
        	));
    }
}
