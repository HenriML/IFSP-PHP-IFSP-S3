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


Route::get('home', function () {
    return view('mdb.home');
});


Route::get('cont', function () {
    return view('mdb.contato');
});

Route::get('prod', function () {
    return view('mdb.produto');
});

Route::get('quemso', function () {
    return view('mdb.quemso');
});

Route::get('loc', function () {
    return view('mdb.local');
});
