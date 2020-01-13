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


/*
Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';

});
*/

Route::get('/', 'PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/menu','PagesController@menu');
Route::get('/inventory','InventoryController@inventory');
Route::get('/reservation','PagesController@reservation');
Route::get('/ims_help','PagesController@ims_help');

Route::get('/ims_help_form','PostsController@ims_help_form');

Route::get('/login','LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Route::resource('post', 'PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/showUsers', 'UserController@showUsers');

Route::get('/home', 'DashboardController@dashboard');
/** 
Route::get('key', function(){
    if (Gate::allow('key-only', Auth::user())){  
        return view('key');
    }else{
        return 'You are not authorised';
    }
});
*/


Route::get('item', 'UserController@user');













Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
