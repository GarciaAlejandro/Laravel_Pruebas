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
| --------------------
| Configuración de rutas para la página 
| 127.0.0.1:8000/fotografias 
*/

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

/* 
|
| Creación  de una ruta
| Route::get( 'test', function(){ return 'Hola Mundo';}  ); 
|
|Creación de ruta con variable
| * El parámetro de la función se asigna una variable en caso de no poner número (nombre por defecto)
| * El signo vuelve la variable opcional 
| Route::get( 'fotos/{numero?}', function($numero='Sin número'){ 
|    return 'Galería con foto: '.$numero ;
| }) ->where ('numero', '[0-9]+') ;
|
| - Creación de ruta con página creada ('test.php')
|   Opción 1 
|   Route::get ('test',function(){return view('test');});
|   Opción 2 - parametro 1 = '/test' parametro 2 = 'test.php'
|   Route::view('test','test');
*/
Route::get('Novia', 'PagesController@Novia');

Route::get('fotos', 'PagesController@fotos', ['numero' => 10])->name('foto');

Route::get('blog','PagesController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');


