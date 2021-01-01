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

// Route::get('/', 'LeaderController@index')->name('index');
// Route::get('/createLeader', 'LeaderController@create')->name('leader.create');
// Route::post('/storeLeader', 'LeaderController@store')->name('leader.store');
Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/register', 'HomeController@register')->name('leader.register');
Route::post('/store', 'UserController@store')->name('leader.store');

Auth::routes();