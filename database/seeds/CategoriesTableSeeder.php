<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre'  => 'Criollo', 'slug' => str_slug('criollo','-') , 'icono' => 'http://download.seaicons.com/download/i88133/icons8/ios7/icons8-ios7-food-vegetarian-food.ico'],
            ['nombre'  => 'Marina', 'slug' => str_slug('marina','-') , 'icono' => 'http://download.seaicons.com/download/i88133/icons8/ios7/icons8-ios7-food-vegetarian-food.ico']
        ]);
    }
}
