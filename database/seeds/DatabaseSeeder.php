<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0; $i <5 ; $i++) { 
	        DB::table('users')->insert([
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('secret'),
	            'nombre' => 'nombre'.$i,
	          	            'telefono' =>str_random(9),
	            'monto' => 9898,
	            'foto' => 'foto'.$i,
	        ]);
        }
        

        for ($i=1; $i <4 ; $i++) { 
        	
        	DB::table('trabajadors')->insert([
        		'user_id' => $i,
        		'dni' => 27876543,
        		'descripcion' => 'des',
        		]);
        }

        for ($i=1; $i <20 ; $i++) { 

        	DB::table('tags')->insert([
        		'nombre' => 'tag'.$i,

        		]);
        }

        for ($i=1; $i <4 ; $i++) { 
        	DB::table('trabajos')->insert([
        		'nombre'=> 'trabajo'.$i,
        		'ubicacion' => 'ubicacion'.$i,
        		'descripcion'=> 'descripcion'.$i,
        		'trabajador_id'=> $i,

        		]);
        }

        for ($i=1; $i <6 ; $i++) { 
        	DB::table('calificacions')->insert([
        		'user_id' => $i,
        		'trabajo_id' => 1,
        		'calificacion' => $i,
        		]);
        }
        for ($i=1; $i <4 ; $i++) { 
        	DB::table('fotos')->insert([
        		'url' => 'url'.$i.'.jpg',
        		'trabajo_id' => $i,
        		]);
        }

        for ($i=1; $i <4 ; $i++) { 
        	DB::table('tag_trabajador')->insert([
        		'tag_id' => $i,
        		'trabajador_id' => $i,
        		]);
        }

        for ($i=1; $i <4 ; $i++) { 
        	DB::table('tag_trabajo')->insert([
        		'tag_id' => $i,
        		'trabajo_id' => $i,
        		]);
        }
/*
        */



    }
}