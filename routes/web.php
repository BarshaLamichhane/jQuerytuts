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

Route::get('/', function () {
    return view('welcome');
});
Route::get('password', function () {
    return view('passwordcomponent/passwordmain');
});
Route::get('ready', function () {
    return view('jquerytutorials/readyfunction');
});
Route::get('window', function () {
    return view('jquerytutorials/windowfunctionwithidselector');
});
Route::get('selector', function () {
    return view('jquerytutorials/elementselector');
});
