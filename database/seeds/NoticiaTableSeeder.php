<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker= Faker::create();
        $asoguau_role = DB::table('tiponoticia')
                                        ->select('id')
                                        ->where('nombre', 'Asoguau')
                                        ->first()
                                        ->id;
        $asored_role = DB::table('tiponoticia')
                                        ->select('id')
                                        ->where('nombre', 'Asored')
                                        ->first()
                                        ->id;
        for($i=0; $i<10; $i++){
     		\DB::table('noticia')->insert(array(
        	'idtiponoticia' => $faker->randomElement([$asoguau_role,$asored_role]),
        	'idusuario' => $faker->numberBetween(2, 8) ,
        	'titulo' => $faker->sentence($nbWords = 6),
        	'descripcion' =>$faker->paragraph($nbSentences = 6),
     	   	'resumen' => $faker->paragraph($nbSentences = 3)
        	));	
    	}
	}
}
