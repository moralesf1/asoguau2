<?php

use Illuminate\Database\Seeder;

class TipoNoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('tiponoticia')->insert(array(
        	'nombre' => 'Asoguau'
        	));
        \DB::table('tiponoticia')->insert(array(
        	'nombre' => 'Asored'
        	));	
    }
}
