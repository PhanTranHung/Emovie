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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['domain' => 'admin.emovie.com'], function(){

	Route::get('/', function () {
	    return redirect()->route('loginpage');;
	});
	
	Route::group(['middleware' => 'login'], function(){
		Route::get('/login', ['as'=>'loginpage', 'uses'=>'admin@getlogin']);
		Route::post('/login', ['as'=>'loginpage', 'uses'=>'admin@postlogin']);
	});

	Route::group(['middleware' => 'check'], function(){
		Route::get('/home', ['as'=>'homepage', 'uses'=>'admin@home']);
		Route::get('/addmovie', ['as'=>'add', 'uses'=>'admin@add']);
		Route::post('/addmovie', ['as'=>'add', 'uses'=>'admin@upload']);

		Route::get('/categorys/{category}', ['as'=>'catepage', 'uses'=>'admin@category']);
		Route::get('/movie/{name}', ['as'=>'watch', 'uses'=>'admin@watch']);
		Route::get('/logout', ['as'=>'logout', 'uses'=>'admin@logout']);
	});
});

Route::group(['domain' => 'emovie.com'], function(){
	
	Route::get('/', ['as'=>'uhomepage', 'uses'=>'user@home']);
	Route::get('/movie/{name}', ['as'=>'uwatch', 'uses'=>'user@watch']);
	Route::get('/categorys/{category}', ['as'=>'ucate', 'uses'=>'user@cate']);
	Route::get('/search', ['as'=>'usearch', 'uses'=>'user@search']);
});


// Route::get('add', ['as'=>'getadd','uses'=>'modify@getadd']);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
