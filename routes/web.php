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

use App\Mail\ContactMessageCreated;

Route::name('root_path')->get('/','PagesController@home');
Route::name('about_path')->get('/about','PagesController@about');
Route::name('contact_path')->get('/contact','ContactsController@create');

Route::get('/test-email',function(){
	return new ContactMessageCreated('ibrahim','konateibrahim126@gmail.com','je vous aime');
});

//Controller POST for page contact
Route::name('contact_path')->post('/contact','ContactsController@store');
