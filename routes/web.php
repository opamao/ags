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

Route::get('/', fn() => view('index'));
Route::get('/about', fn() => view('about'));
Route::get('/service', fn() => view('service'));
Route::get('/contact', fn() => view('contact'));
Route::get('/prestation', fn() => view('prestation'));
Route::get('/reference', fn() => view('reference'));
