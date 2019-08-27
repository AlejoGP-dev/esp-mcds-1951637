<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
        	'name' => 'Polarización',
        	'content' => 'El país se encuentra polarizado',
        	'user_id' => 2,
        	'category_id' => 2
        ));
        Article::create(array(
        	'name' => 'Sube el dolar',
        	'content' => 'El dolar está a $3.600 pesos',
        	'user_id' => 2,
        	'category_id' => 1
        ));
        Article::create(array(
        	'name' => 'Egan, campeón en Francia',
        	'content' => 'Primer latinoamericano en ganar el Tour de Francia',
        	'user_id' => 2,
        	'category_id' => 3
        ));
    }
}
