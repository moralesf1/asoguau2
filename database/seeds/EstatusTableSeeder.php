<?php

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estatus')->insert(array(
        	'nombre' => 'activo'
        	));	

        \DB::table('estatus')->insert(array(
        	'nombre' => 'inactivo'
        	));
    }
}
