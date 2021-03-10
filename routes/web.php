<?php

use Illuminate\Support\Facades\Route;

Route::get('/double', function () {
    return "Testando Double Page Alter";
});

Route::get('/', function () {
    return 'António Jacinto Home Page Teste';
});


Route::get('/teste', function () {
    return view('teste.teste');
});
