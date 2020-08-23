<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@index')->name('login');
    Route::post('register', 'Auth\RegisterController@register');
});




Route::group(['middleware' => 'auth:sanctum'], function () {

    // Route::get('/test', function (Request $request) {    
    //     if (Gate::check('foo', $request->user())) {
    //         dd('ok');
    //     }else {
    //         dd('terminate');
    //     }
    // });


    Route::get('/companies', 'Api\Modules\Companies@index');
    Route::post('/companies', 'Api\Modules\Companies@store');
    Route::patch('/companies/{id}', 'Api\Modules\Companies@update');
});