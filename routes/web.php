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

Route::group([
    'middleware' => ['web'],
    'prefix' => '/',
], function () {
    Route::get('', 'HomeController@index')->name('home');
    Route::get('app/', 'HomeController@app')->name('app1');
    Route::get('app2/', 'HomeController@app')->name('app2');
});
