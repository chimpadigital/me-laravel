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
})->name('/');

Route::get('/locale','PageController@locale');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){

	Route::resource('eventos','EventsController')->names([
		'index'=>'events.index',
		'create'=>'events.create',
		'store'=>'events.store',
	]);

});

Route::get('/nosotras', function(){
	return view('site.about');
})->name('about');

Route::get('/servicios', function(){
	return view('site.services');
})->name('service');

Route::get('/cursos', 'PageController@events')->name('events');

Route::get('/cursos/show/{id}', 'PageController@showEvents')->name('events.show.front');

Route::get('/cursos/inscripcion/{id}', 'PageController@EventsInscription')->name('events.inscription.front');

Route::get('/cursos/payments', function(){
	return view('shoping.payment-form');
})->name('events.payments');

Route::post('/cursos/payments', 'PageController@payment')->name('events.payments.set');

Route::get('/user/create', 'PageController@createUserTest');


Route::get('/contacto', function(){
	return view('site.contact');
})->name('contact');
