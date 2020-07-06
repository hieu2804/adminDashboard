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
    return view('index');
});
// Route::prefix('adminDashboard')->namespace('backend')->group(function(){
// 	route::get('auth_login','loginController@getlogin')->name('login.getlogin');
// 	route::post('auth_login','loginController@postlogin')->name('login.postlogin');
// 	route::get('logout','loginController@getlogout')->name('login.logout');
// });

route::get('auth_login','backend\loginController@getlogin')->name('login.getlogin');
	route::post('auth_login','backend\loginController@postlogin')->name('login.postlogin');
	route::get('logout','backend\loginController@getlogout')->name('login.logout');

route::get('auth_lock','backend\loginController@getlock')->name('login.getlock');
route::post('auth_lock','backend\loginController@postlock')->name('login.postlock');

route::get('auth_register','backend\loginController@getregister') ->name('login.getregister');
route::post('auth_register','backend\loginController@postregister') ->name('login.postregister');