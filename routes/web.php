<?php

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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home',['status'=>'']);
})->name('home');

Route::get('/clients', "ClientController@index")->name('clients.index');
Route::get('/clients/create', "ClientController@create")->name('clients.create');
Route::get('/clients/edit', "ClientController@edit")->name('clients.edit');
Route::post('/clients/store', "ClientController@store")->name('clients.store');