<?php

use Illuminate\Support\Facades\Route;

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

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');


Route::get('/', function () {
    return view('inicio');
});

Route::get('sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('menu', function () {
    return view('menu');
});

Route::group(array('prefix' => 'admin'), function()
{
	Route::get('/', function()
{
	return view::make('admin.dashboard');
});

	Route::get('posts', function()
{
	return view::make('admin.posts');
});

	Route::get('posts/create', function()
{
	return view::make('admin.posts/create');
});

});

Route::get('login', function(){
	return view::make('login');
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('/', function(){
	return view::make('admin.dashboard');
});
});

/*Route::get('login', function()
{
	return view::make('login');
});

Route::post('login', function()
{
	//validate process login
	//if successful, redirect
	return Redirect::to('menu');
});
*/
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Route::get('posts/create', function(){
		return view::make('admin.posts-create');
});
	Route::get('posts/create', function()
	{
		//add the post to the database
		//$post=new Post;
		//$post->title = Input::get('title');
		//more stuff here
		//$post->save();

		//create a sucess message
		Session::flash('message', 'Successfully created post!');

		//redirect
		return Redirect::to('admin/posts/create');
	});

});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

Route::get('/burgers', 'BurgerController@index');
Route::get('/create', 'BurgerController@create');
Route::post('/create', 'BurgerController@store');
Route::get('/edit', 'BurgerController@edit');
Route::post('/edit', 'BurgerController@edit');
Route::get('/burgers/{burgerid}', 'BurgerController@show');




