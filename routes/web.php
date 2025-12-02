<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/personas-fisicas', function () {
    return view('personas-fisicas');  // ← Busca este archivo
});

Route::get('/dni', function () {
    return view('dni');
});

Route::get('/matrimonios', function () {
    return view('matrimonios');
});