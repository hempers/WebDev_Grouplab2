<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/user/{name?}', function ($name = null) {
    // Remove any non-alphabetic characters from the input
    $userName = preg_replace('/[^a-zA-Z]/', '', $name);

    // If the input is empty after removing non-alphabetic characters, default to 'Guest'
    $userName = $userName ?: 'Guest';

    // Store the name in the session
    session()->flash('user_name', $userName);

    // Redirect back to the home page
    return redirect('/');
});
