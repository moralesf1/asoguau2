<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker= Faker::create();

    	$admin_role = DB::table('tipousuario')
                                        ->select('id')
                                        ->where('nombre', 'administrador')
                                        ->first()
                                        ->id;
        $operador_role = DB::table('tipousuario')
                                        ->select('id')
                                        ->where('nombre', 'operador')
                                        ->first()
                                        ->id;
        $veterinario_role = DB::table('tipousuario')
                                        ->select('id')
                                        ->where('nombre', 'veterinario')
                                        ->first()
                                        ->id;       
        $pasante_role = DB::table('tipousuario')
                                        ->select('id')
                                        ->where('nombre', 'pasante')
                                        ->first()
                                        ->id;
        $general_role = DB::table('tipousuario')
                                        ->select('id')
                                        ->where('nombre', 'general')
                                        ->first()
                                        ->id; 
        $estatus_activo= DB::table('estatus')
                                        ->select('id')
                                        ->where('nombre', 'activo')
                                        ->first()
                                        ->id;

        \DB::table('usuario')->insert(array(

            'idtipousuario' => $admin_role,
            'idestatususuario' => $estatus_activo,
            'nombre' => 'Asoguau',
            'apellido' =>'Sistemas2',
            'correo' => 'asoguausistemas2@gmail.com',
            'telefono' => '04121314571',
            'password' => \Hash::make('sistemas2asoguau')

            ));

     	for($i=0; $i<10; $i++){

     		\DB::table('usuario')->insert(array(

        	'idtipousuario' => $faker->randomElement([$operador_role,$veterinario_role,$pasante_role,$general_role]),
        	'idestatususuario' => $estatus_activo,
        	'nombre' => $faker->firstName,
        	'apellido' =>$faker->lastName,
        	'correo' => $faker->unique()->email,
        	'telefono' => '04121314571',
        	'password' => \Hash::make('123456')

        	));	
     	}

         
    }
}
