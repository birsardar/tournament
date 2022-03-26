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

Auth::routes(['reset' => false,
            'register' => false
            ]);
Route::prefix('api/user')->group(function () {

Route::get('slide', 'Api\SliderController@index'); //slider 

Route::post('register', 'Api\HomeController@register');

});

Route::namespace('Admin')->prefix('home')->name('admin.')->middleware(['admin','auth'])->group(function(){
    Route::get('', 'HomeController@index')->name('home');
});