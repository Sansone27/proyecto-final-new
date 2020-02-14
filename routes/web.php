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
Route::get('/socios', 'PagesController@socios')->name('socios');
//Route::get('/detalles/{id}', 'PagesController@detalles')->name('socios.detalles');//

Route::get('/fotos','PagesController@fotos' )->name('fotos');


Route::get('/blog','PagesController@blog')->name('blog');


Route::get('/institucion/{nombre?}','PagesController@institucion')->name('institucion');


Route::get('/login','PagesController@login')->name('login');

Route::get('/jugadores','PagesController@jugadores')->name('jugadores');

//Route::get('/editar/{id_socio?}','PagesController@editar')->name('editar');//

Route::post('/socios','PagesController@crear')->name('crear');

Route::post('/jugador','PagesController@krear')->name('krear');


Route::delete('eliminar/{id?}', 'PagesController@eliminar')->name('socios.eliminar');
Route::delete('eliminar/{id?}', 'PagesController@eliminar')->name('jugadores.eliminar');









