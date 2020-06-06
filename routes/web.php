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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix' => '{locale?}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function () {
    Route::get('/', function () {
        return view('web.home');
    });
});

// Main Languaje
Route::group(['middleware' => 'setlocale'], function () {

});

Route::group(['prefix' => 'en', 'middleware' => 'setlocale'], function () {
        
});
