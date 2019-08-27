<?php

use Illuminate\Database\Seeder;
Use App\Category;

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
        	'name' => 'Económica',
        	'description' => 'Esta categoría muestra artículos económicos.'
        ));
        Category::create(array(
        	'name' => 'Social',
        	'description' => 'Esta categoría muestra artículos sociales.'
        ));
        Category::create(array(
        	'name' => 'Deportes',
        	'description' => 'Esta categoría muestra artículos deportivos.'
        ));
    }
}
