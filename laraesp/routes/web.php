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

// Enrutamiento por get
Route::get('hello', function() {
	return "<h1>Hola Mundo</h2>";
});

// Enrutamiento con cualquier método (get, post, put, delete)
Route::any('user/list', function() {
	$users = App\User::all();
	return dd($users);
});

// Enrutamiento a una vista
Route::view('articles/list', 'articleslist', ['articles' => App\Article::all()]);

// Enrutamiento con Parámetro
Route::get('user/show/{id}', function($id) {
	$user = App\User::find($id);
	return dd($user);
});

// Enrutamiento con Nombre
Route::get('category/list', function() {
	$categories = App\Category::all();
	return dd($categories);
})->name('categorias');

/*----------------------Rutas del-------------------------------*/
/*--------------------------USUARIO---------------------------*/ 

Route::resource('user', 'UserController');