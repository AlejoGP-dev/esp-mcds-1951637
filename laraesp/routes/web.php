<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Enrutamiento con cualquier metodo(get/post/put/delete)
Route::any('user/list', function(){
	$users = App\User::all();
	return dd($users);
});

//Enrutamiento a una vista
Route::view('articles/list', 'articleslist',['articles' => App\Article::all()]);

//Enrutamiento con parametro
Route::get('user/show/{id}', function($id){
	$user = App\User::find($id);
	return dd($user);
});

//Enrutamiento con nombre
Route::get('category/list', function(){
	$categories = App\Category::all();
	return dd($categories);
})->name('categorias');


/*---------------------------------------------------------------*/
/*Users*/
Route::resource('users', 'UserController');
