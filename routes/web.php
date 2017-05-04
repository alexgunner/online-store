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

Route::get('/home', 'HomeController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/products_template', 'HomeController@products_template');

//products routes
//Route::get('products', ['uses' => 'ProductsController@show']);
Route::get('products', function(){
		if (Auth::guest()) {
			return View::make('auth/login');
		}

		return View::make('products');
});

Route::post('products', ['uses' => 'ProductsController@store']);

Route::get('listprod', ['uses' => 'ProductsController@showlist']);

Route::get('contacto', ['uses' => 'HomeController@contact']);

Route::get('admin', ['uses' => 'HomeController@admin']);

//Messages
//Route::get('messages', ['uses' => 'MessagesController@show']);

Route::post('messages', ['uses' => 'MessagesController@store']);

//Profile
Route::get('profile',['uses' => 'ProductsController@showprofile']);
//Search
Route::get('search', ['uses' => 'ProductsController@searchproduct']);

//Route::get('results')
