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

Route::get('/end', function () {
    //return view('welcome');
})->middleware('auth_user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/register/verify/{confirmation_code}','Auth\RegisterController@verify')->name('verify');


Route::group(['middleware' => ['check_user']], function () {
    //
    Route::resource('product','ProductController');

	Route::resource('category','CategoryController');
});

Route::get('/confirmation',function(){


	return view('auth.passwords.confirmation')
	->with('name','Joset Manihuari')
	->with('confirmation_code','assdasdadasdasdasd3we');
});




