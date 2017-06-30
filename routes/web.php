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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/carrera', 'CarreraController');
Route::resource('/usuario', 'UserController');
Route::get('/programa/{rol?}','ProgramaController@index');
Route::resource('/programa', 'ProgramaController',['except'=>'index']);
Route::post('/admin-usuario/asociar-programa','AdminUsuarioController@asociarPrograma');