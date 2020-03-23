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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'TaskController@index');


Route::get('/top', 'TaskController@top_login');
Route::get('/mypage', 'TaskController@mypage');
Route::get('/edit/{task_id}','TaskController@edit');
Route::get('/task/create',function(){
    return view('create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
