<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTagsTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('tags')->insert(
           array(
                'nombre'=> 'Hogar',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );
        DB::table('tags')->insert(
           array(
                'nombre'=> 'Mecanica',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );
        DB::table('tags')->insert(
           array(
                'nombre'=> 'Servicios',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );

        DB::table('trabajos')->insert(
           array(
                'nombre'=> 'Dental',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );
        DB::table('trabajos')->insert(
           array(
                'nombre'=> 'Taller mecanico',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );
        DB::table('trabajos')->insert(
           array(
                'nombre'=> 'Electricista',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           )
        );

        DB::table('tag_trabajo')->insert(
            array(
                'tag_id'=> '1',
                'trabajo_id'=>'3'
            )
        );
        DB::table('tag_trabajo')->insert(
            array(
                'tag_id'=> '1',
                'trabajo_id'=>'1'
            )
        );
        DB::table('tag_trabajo')->insert(
            array(
                'tag_id'=> '2',
                'trabajo_id'=>'2'
            )
        );
        DB::table('tag_trabajo')->insert(
            array(
                'tag_id'=> '3',
                'trabajo_id'=>'3'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
