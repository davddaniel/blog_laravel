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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', "IndexController@index")->name("home");
//Route::get('/sigle-post', "IndexController@sigle")->name("single-post");


// Rotas para posts
Route::get('/', 'PostController@index');
Route::get('/new-post', 'PostController@create')->name('new-post');
Route::post('/new-post-add', 'PostController@store')->name('new-post-add');
Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
Route::put('/edit/{id}', 'PostController@update')->name('edit');
Route::get('/post/{id}/{slug}', 'PostController@show')->name('single-post');
Route::get('/excluir-post/{id}', 'PostController@destroy')->name('excluir-post');
