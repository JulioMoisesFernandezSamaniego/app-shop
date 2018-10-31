<?php
//controladores
Route::get('/','TestController@welcome');

/*Route::get('/prueba',function(){
    return "Hola soy la ruta prueva";
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
