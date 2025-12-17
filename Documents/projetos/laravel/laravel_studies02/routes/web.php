<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    echo 'blade layouts';
});

Route::view('/home', 'home');