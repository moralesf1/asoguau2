<?php

use Illuminate\Database\Seeder;

class EspecieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('especie')->insert(array(
        	'nombre' => 'Canino'
        	));	

        \DB::table('especie')->insert(array(
        	'nombre' => 'Felino'
        	));	
    
        \DB::table('especie')->insert(array(
        	'nombre' => 'Ave'
        	));
    }
}
