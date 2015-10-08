<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker= Faker::create();

    	$canino_role = DB::table('especie')
                                        ->select('id')
                                        ->where('nombre', 'Canino')
                                        ->first()
                                        ->id;

        $felino_role = DB::table('especie')
                                        ->select('id')
                                        ->where('nombre', 'Felino')
                                        ->first()
                                        ->id;
        $ave_role = DB::table('especie')
                                        ->select('id')
                                        ->where('nombre', 'Ave')
                                        ->first()
                                        ->id;       

    	$estatus_activo= DB::table('estatus')
                                        ->select('id')
                                        ->where('nombre', 'activo')
                                        ->first()
                                        ->id;
     	for($i=0; $i<10; $i++){

     		\DB::table('animal')->insert(array(
        	'idespecie' => $faker->randomElement([$canino_role,$felino_role,$ave_role]),
        	'idestatususuario' => $estatus_activo,
        	'nombre' => $faker->firstName,
        	'comentario'=>$faker->paragraph($nbSentences = 3)
        	));	
     	}
    }
}
