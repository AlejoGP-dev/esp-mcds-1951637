<?php

use Illuminate\Database\Seeder;


use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(array(
        	'name' => 'Economica',
        	'description' => 'Esta categoria muestra articulos economicos.'
        ));

        Category::create(array(
        	'name' => 'Economica',
        	'description' => 'Esta categoria muestra articulos sociales.'
        ));

        Category::create(array(
        	'name' => 'Economica',
        	'description' => 'Esta categoria muestra articulos deportivos.'
        ));
    }
}
