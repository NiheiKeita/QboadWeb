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
Route::post('/show', 'App\Http\Controllers\Web\TopController@show')->name('show');

Route::namespace('App\Http\Controllers\Web')->name('www.')->group(function () {
    Route::match(['get', 'post'], '/','TopController@index')->name('top');

    Route::match(['get', 'post'], '/register/input', 'RegisterController@input')->name('register.input');
    Route::post('/register/complete', 'RegisterController@complete')->name('register.complete');
    Route::match(['get', 'post'], '/login/index', 'LoginController@index')->name('login.index');
    Route::post('/login/complete', 'LoginController@complete')->name('login.complete');
    Route::match(['get', 'post'],'/logout', 'LoginController@logout')->name('logout');

    Route::middleware('auth:pro')->group(function () {

        Route::match(['get', 'post'],'/question/index', 'QuestionController@index')->name('question.index');
        Route::match(['get', 'post'],'/question/create', 'QuestionController@create')->name('question.create');
        Route::post('/question/store', 'QuestionController@store')->name('question.store');
        Route::match(['get', 'post'],'/question/solve/{id}', 'QuestionController@solve')->name('question.solve');

        Route::match(['get', 'post'],'/serch/index', 'SerchController@index')->name('serch.index');

        Route::match(['get', 'post'],'/information/index', 'InformationController@index')->name('information.index');
        Route::match(['get', 'post'],'/information/detail/{id}', 'InformationController@detail')->name('information.detail');

        Route::match(['get', 'post'],'/account/index', 'AccountController@index')->name('account.index');

    });
});
// Route::namespace('App\Http\Controllers')->name('matsuo.')->group(function () {
//     Route::get('/matsuo/login/index', 'MatsuoController@index')->name('login.index');

//     Route::post('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
//     Route::get('/matsuo/question/list', 'MatsuoController@list')->name('question.list');

//     Route::post('/matsuo/question/input', 'MatsuoController@input')->name('question.input');
//     Route::get('/matsuo/question/input', 'MatsuoController@input')->name('question.input');

//     Route::post('/matsuo/question/store', 'MatsuoController@store')->name('question.store');
//     // Route::middleware('auth:www')->group(function () {
//     //     Route::post('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
//     //     Route::get('/matsuo/question/list', 'MatsuoController@list')->name('question.list');
//     // });
// });

Route::namespace('App\Http\Controllers\Api')->name('api.')->group(function () {
    Route::get('/api/register/index', 'RegisterController@index');
    Route::post('/api/register/complete', 'RegisterController@complete');
    Route::get('/api/login/index', 'LoginController@index');
    Route::post('/api/login/complete', 'LoginController@complete');

    Route::middleware('auth:pro')->group(function () {

    });
});
