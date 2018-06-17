<?php

use Illuminate\Database\Seeder;

class PlatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platos')->insert([
            [
                'nombre' => 'Lomo saltado',
                'descripcion' => 'Delicioso lomo saltado.',
                'imagenes' => null ,
                'puntaje' => 5 ,
                'user_id' =>  1,
                'categoria_id' => 1
            ],

            [
                'nombre' => 'Arroz con pollo',
                'descripcion' => 'Delicioso arroz con pollo',
                'imagenes' => null ,
                'puntaje' => 5 ,
                'user_id' =>  1,
                'categoria_id' => 1
            ],

            [
                'nombre' => 'Ceviche',
                'descripcion' => 'Delicioso ceviche',
                'imagenes' => null ,
                'puntaje' => 5 ,
                'user_id' =>  1,
                'categoria_id' => 2
            ],

            [
                'nombre' => 'Arroz con mariscos',
                'descripcion' => 'Delicioso arroz con mariscos',
                'imagenes' => null ,
                'puntaje' => 5 ,
                'user_id' =>  1,
                'categoria_id' => 2
            ],

        ]);
    }
}
