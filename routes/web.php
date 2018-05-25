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
Route::get('element', function () {
    return view('jquerytutorials/elementselector');
});
Route::get('class', function () {
    return view('jquerytutorials/classselector');
});
Route::get('attribute', function () {
    return view('jquerytutorials/attributeselector');
});
Route::get('caseselector', function () {
    return view('jquerytutorials/caseinsensitiveattrsel');
});
Route::get('eachfunction', function () {
    return view('jquerytutorials/eachfunction');
});
Route::get('methodchain', function () {
    return view('jquerytutorials/methodchaining');
});
Route::get('json', function () {
    return view('jquerytutorials/json');
});
Route::get('jsonmultiple', function () {
    return view('jquerytutorials/jsonmultiple');
});
Route::get('jsonobject', function () {
    return view('jquerytutorials/jsonobjecttostring');
});
Route::get('map', function () {
    return view('jquerytutorials/mapmethod');
});
Route::get('changeevent', function () {
    return view('jquerytutorials/changeevent');
});
Route::get('mouseevent', function () {
    return view('jquerytutorials/mouseevent');
});
Route::get('scrollevent', function () {
    return view('jquerytutorials/scrollevent');
});
Route::get('image', function () {
    return view('jquerytutorials/imagegallery');
});
Route::get('optimage', function () {
    return view('jquerytutorials/optimiseimggall');
});
Route::get('howapp', function () {
    return view('passwordcomponent/howapp');
});

