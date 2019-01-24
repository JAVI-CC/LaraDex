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

Route::get('/prueba/{name}', 'PruebaController@javi');

/*Route::get('/prueba1', function () {
    return 'Hello world.';
});

Route::get('/name/{name}/lastname/{lastname?}', function ($name, $lastname = null){
   return 'Hola soy '. $name . ' ' . $lastname;
});*/

Route::resource('trainers', 'TrainerController');
Auth::routes();

Route::resource('pokemons', 'PokemonController');

Route::get('/home', 'HomeController@index')->name('home');
