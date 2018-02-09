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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'pages_controller@getWelcome');

Route::get('contact', 'pages_controller@getContact')->middleware('user2NoContact');

Route::get('about', 'pages_controller@getAbout');

Route::resource('posts', 'PostController');


//the 'except' gets rid of the create function.
Route::resource('categories', 'CategoryController', ['except' => ['create']]) ;

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index' ]);

Route::get('{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']) -> where('slug', '[\w\d\-\_]+');















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
