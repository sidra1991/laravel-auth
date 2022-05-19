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

Route::get('/', 'Admin\pressController@index');

//pagina momentanea devo capire ancora delle cose
Route::get('/acedi', function () {
    return view('acedi');
});

//    per ricordare mela dimentico sempre
//    Route::get('/', function () {
//        return view('welcome');
//    });
