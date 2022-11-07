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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'TopController@index')->name('index');
// Route::post('/show', 'TopController@show')->name('show');
// Route::get('/', [TopController::class, 'index'])->name('index');
// Route::get('/', [TopController::class, 'show'])->name('show');
Route::get('/','App\Http\Controllers\TopController@index');
Route::post('/show', 'App\Http\Controllers\TopController@show')->name('show');

Route::namespace('App\Http\Controllers')->name('www.')->group(function () {
    Route::get('/register/index', 'RegisterController@index')->name('register.index');
    Route::post('/register/complete', 'RegisterController@complete')->name('register.complete');
    Route::get('/login/index', 'LoginController@index')->name('login.index');
    Route::post('/login/complete', 'LoginController@complete')->name('login.complete');


    Route::middleware('auth:www')->group(function () {

    });
});
Route::namespace('App\Http\Controllers')->name('matsuo.')->group(function () {
    Route::get('/matsuo/login/index', 'MatsuoController@index')->name('login.index');

    Route::post('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
    Route::get('/matsuo/question/list', 'MatsuoController@list')->name('question.list');

    Route::post('/matsuo/question/input', 'MatsuoController@input')->name('question.input');
    Route::get('/matsuo/question/input', 'MatsuoController@input')->name('question.input');

    Route::post('/matsuo/question/store', 'MatsuoController@store')->name('question.store');
    // Route::middleware('auth:www')->group(function () {
    //     Route::post('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
    //     Route::get('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
    // });
});

Route::namespace('App\Http\Controllers\Api')->name('api.')->group(function () {
    Route::get('/api/register/index', 'RegisterController@index')->name('register.index');
    Route::post('/api/register/complete', 'RegisterController@complete')->name('register.complete');
    Route::get('/api/login/index', 'LoginController@index')->name('login.index');
    Route::post('/api/login/complete', 'LoginController@complete')->name('login.complete');
    Route::middleware('auth:www')->group(function () {

    });
});
