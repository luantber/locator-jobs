<?php

use Illuminate\Database\Seeder;
use App\Trabajo;

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
		/*
		$ubicaciones=array(
		'45.3681,7.7681',
		 '44.9181,7.4855',
	'45.3154,7.3026',
	 '45.4339,7.9517');
        for ($i=1; $i <4 ; $i++) { 
			
        	DB::table('trabajos')->insert(array(
        		'nombre'=> 'trabajo'.$i,
        		'location' => $ubicaciones[$i],
        		'descripcion'=> 'descripcion'.$i,
        		'trabajador_id'=> $i
				));

			//Trabajo::create(array('nombre' => 'trabajo'.$i, 'location' => $ubicaciones[$i],'descripcion'=>'descripcion'.$i,'trabajador_id'=>$i));
		}*/
		
		Trabajo::create(array('nombre' => 'trabajo1', 'location' => '45.4599,7.7774','descripcion'=>'lorensadasdasdada','trabajador_id'=>1));
		Trabajo::create(array('nombre' => 'trabajo2', 'location' => '45.0793,7.3967','descripcion'=>'lorensadasdasdada2','trabajador_id'=>2));
		Trabajo::create(array('nombre' => 'trabajo3', 'location' => '45.4181,7.6697','descripcion'=>'lorensadasdasdada3','trabajador_id'=>3));



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
