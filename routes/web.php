<?php

// Estaticas
Route::view('/', 'index');
Route::view('/quienes-somos', 'quienes-somos');
Route::view('/aavv', 'aavv');
Route::view('/servicios', 'servicios');
Route::view('/destinos', 'destinos');
Route::view('/contacto', 'contacto');

// Dinamicas
Route::get('blog', 'BlogController@index');
Route::get('/noticia/{slug}', 'BlogController@detail');
Route::post('/enviar-mensaje', 'ContactoController@enviarMail');
Route::post('/nueva-suscripcion', 'ContactoController@nuevaSuscripcion');

/*ADMIN*/
Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return view('auth.login');
 });
 

// BLOG
Route::get('/admin', 'HomeController@index');
Route::get('/admin/blog', 'HomeController@listBlog');
Route::view('/admin/blog/nueva-noticia', 'admin.nueva-noticia');
Route::post('/admin/blog/guardar-noticia', 'HomeController@saveNews');
Route::get('/admin/blog/eliminar-noticia/{id}', 'HomeController@deleteNews');
Route::get('/admin/blog/editar-noticia/{id}', 'HomeController@editNews');
Route::post('/admin/blog/actualizar-noticia', 'HomeController@updateNews');

// SUSCRIPTORES
Route::get('/admin/suscriptores', 'SuscriptoresController@listSuscriptores');
Route::get('/admin/suscriptores/descargar-listado', 'SuscriptoresController@descargarListado');

// Politicas
Route::view('/aviso-legal', 'politicas.aviso-legal');
Route::view('/politicas-de-privacidad-de-datos', 'politicas.politicas-de-privacidad-de-datos');
Route::view('/politica-de-cookies', 'politicas.politicas-cookies');