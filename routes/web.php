<?php
use Illuminate\Http\Request;

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
    return view('index');
})->name('/');

Route::get('/bienvenido', function () {
	$events = App::call('App\Http\Controllers\EventsController@getNextEvents');
    return view('welcome')->with('events', $events);
})->name('welcome');

Route::get('/change-country/{code}','PageController@locale')->name('country');

Auth::routes();

Route::get('/register', function () {
    return redirect()->route('/');
})->name('register');

Route::post('/register', function () {
    return redirect()->route('/');
})->name('register');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){

	Route::resource('eventos','EventsController')->names([
		'index'=>'events.index',
		'create'=>'events.create',
		'store'=>'events.store',
		'edit'=>'events.edit',
		'update'=>'events.update',
		'destroy'=>'events.destroy',
	]);

	Route::resource('/administrar-blog','PostController')->names([
		'index'=>'admin.post.index',
		'show'=>'admin.post.show',
		'create'=>'admin.post.create',
		'store'=>'admin.post.store',
		'update'=>'admin.post.update',
		'edit'=>'admin.post.edit',
		'destroy'=>'admin.post.destroy',
	]);

	Route::resource('/administrar-categorias','CategoryController')->names([
		'index'=>'admin.category.index',
		'create'=>'admin.category.create',
		'store'=>'admin.category.store',
		'update'=>'admin.category.update',
		'edit'=>'admin.category.edit',
		'destroy'=>'admin.category.destroy',
	]);

	Route::post('upload-img-ajax','PostController@ajaxImg')->name('img.store');

});

Route::get('/blog', 'PageController@blogIndex' )->name('blog');

Route::get('blog/notes/{id}', 'PageController@blogShow')->name('notes');

Route::get('/nosotras', function(){
	return view('site.about');
})->name('about');

Route::get('/servicios', function(){
	return view('site.services');
})->name('service');

Route::get('/cursos/{country_code?}', 'PageController@events')->name('events');

Route::get('/cursos/show/{id}', 'PageController@showEvents')->name('events.show.front');

Route::get('/cursos/inscripcion/{id}', 'PageController@EventsInscription')->name('events.inscription.front');

Route::resource('inscripcion','InscriptionController')->names([
	'store'=>'store.inscription',
])->only('store');


Route::get('/cursos/payments','PaymentController@show')->name('events.payments');

Route::post('/cursos/payments', 'PageController@payment')->name('events.payments.set');

Route::post('/cursos/sendEmail', 'PageController@sendEmail')->name('send.email.contact');


/*MercadoPago redirects*/
Route::get('/thanks', 'PageController@thanks');
Route::get('/pending', 'PageController@pending');
Route::get('/failure', 'PageController@failure');
/*----*/

Route::get('/contact', function(){
	return view('site.contact');
})->name('contact');
