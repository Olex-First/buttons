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
//ч
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('button');
})->name('home');
Route::get('/form', function () {
    return view('button-form');
})->name('creat-button');

Route::post('/form/make',
    '\App\Http\Controllers\ButtonController@submit'
)->name('create-form');


Route::get('/',
    '\App\Http\Controllers\ButtonController@allData'
)->name('home');

Route::get('/{id}',
    '\App\Http\Controllers\ButtonController@showOneMeal'
)->name('one-meal');

Route::get('/{id}/delete',
    '\App\Http\Controllers\ButtonController@deleteMessage'
)->name('contact-delete');
