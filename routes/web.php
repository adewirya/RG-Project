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
// Route::get('/', 'HomeController@index')->name('homepage');
// Route::get('/register', 'HomeController@register')->name('leader.register');
// Route::post('/store', 'UserController@store')->name('leader.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('index');

Route::group(['middleware'  => ['auth','admin']], function() {
	// you can use "/admin" instead of "/dashboard"
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});
	// below is used for adding the users.
	Route::get('/role-register','Admin\DashboardController@registered');
	//below route for edit the users detail and update.
	Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
	//update button route
	Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
	//delete route
	Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

});

Auth::routes();