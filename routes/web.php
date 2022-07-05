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

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('Admin')
    ->prefix('Admin')
    ->group(function() {
        Route::get('/', 'Admin\HomeController@index')->name('index');
    });

// Rotta admin senza middleware
// Route::get('/admin', 'Admin\HomeController@index')->name('index');
