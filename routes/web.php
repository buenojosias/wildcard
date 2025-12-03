<?php

use Illuminate\Support\Facades\Route;

Route::domain('{account}.wigreja.com')->group(function () {
    Route::get('/', function ($account) {
        return "Welcome to the profile of {$account}";
    });
});

Route::get('/', function () {
    return view('welcome');
});
