<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

// TODO: refactor to a controller, because of route caching
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::livewire('/lessons/{lesson}', 'lesson-show')->layout('layouts.app');

//Route::get('/home', 'HomeController@index')->name('home');
Route::livewire('home', 'series-list');
