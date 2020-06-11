<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::middleware(['auth:sanctum'])->group(function () { 
     Route::get('users', function () {
        return auth()->user();
     });
     Route::get('get-main-data', 'Api\HomeController@index');
     Route::get('get-profile-data', 'Api\HomeController@profile');

     Route::get('expenses', 'Api\ExpenseController@index');
     Route::post('expenses/store', 'Api\ExpenseController@store');
     Route::post('expenses/{id}/update', 'Api\ExpenseController@update');
     Route::post('expenses/{id}/destroy', 'Api\ExpenseController@destroy');

     Route::get('incomes', 'Api\IncomeController@index');
     Route::post('incomes/store', 'Api\IncomeController@store');
     Route::post('incomes/{id}/update', 'Api\IncomeController@update');
     Route::post('incomes/{id}/destroy', 'Api\IncomeController@destroy');

     Route::get('goal', 'Api\GoalController@getGoal');
     Route::post('goal', 'Api\GoalController@credit');
});
