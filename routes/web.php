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

Route::get('/hello1', function () {
    return view("hello1");
})->name('hello1');


Route::get('/hello1/bold', function () {
    return '<h1> Hello World</h1>';
});


Route::get('/', function () {
    return view('welcome');
});
