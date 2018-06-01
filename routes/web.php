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

Route::name('root_path')->get('/','PagesController@home');
Route::name('about_path')->get('/about','PagesController@about');
Route::name('contact_path')->get('/contact','ContactsController@create');
