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

Route::get('/','App\Http\Controllers\EventController@home');

Route::get('/dashboard', 'App\Http\Controllers\EventController@crud')->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/tambah', function () {
    return view('add_event');
})->middleware(['auth'])->name('add_event');
Route::post('/dashboard/create', 'App\Http\Controllers\EventController@create')->middleware(['auth']);
Route::get('/dashboard/{id}/edit', 'App\Http\Controllers\EventController@edit')->middleware(['auth']);
Route::post('/dashboard/{id}/edit', 'App\Http\Controllers\EventController@update')->middleware(['auth']);
Route::get('/dashboard/{id}/delete', 'App\Http\Controllers\EventController@delete')->middleware(['auth']);
Route::post('/welcome/create', 'App\Http\Controllers\PesertaController@create');
Route::get('/welcome/{id}/daftar', 'App\Http\Controllers\PesertaController@daftar');
Route::get('/dashboard/{id}/peserta', 'App\Http\Controllers\PesertaController@crud')->middleware(['auth']);
require __DIR__.'/auth.php';
