<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes(['register' => false]);

Route::post('/projects', 'App\HTTP\Controllers\ProjectController@store')->middleware('auth');
Route::get('/projects/{project}', 'App\HTTP\Controllers\ProjectController@show');
Route::get('/projects', 'App\HTTP\Controllers\ProjectController@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
