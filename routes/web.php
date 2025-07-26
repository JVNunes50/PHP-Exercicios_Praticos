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

Route::get('/banco/teste', function () {
    return view('teste');
});

Route::post('/requisicao', function () {
    return "Essa seria uma requisao via POST";
});

Route::put('/requisicao', function () {
    return "Essa seria uma requisao via PUT";
});

Route::delete('/requisicao', function () {
    return "Essa seria uma requisao via DELETE";
});