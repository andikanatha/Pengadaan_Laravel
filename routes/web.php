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


Route::get('/', 'App\Http\Controllers\Home@index');
Route::get('/registrasi', 'App\Http\Controllers\Registrasi@index');
Route::post('/simpanRegistrasi', 'App\Http\Controllers\Registrasi@registrasi');
