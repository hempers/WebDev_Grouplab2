<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/user/{name?}', function ($name = null) {
    $userName = preg_replace('/[^a-zA-Z]/', '', $name);

    $userName = $userName ?: 'Guest';

    $userName = ucfirst(strtolower($userName));

    session()->flash('user_name', $userName);

    return redirect('/');
});
