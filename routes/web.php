<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {
    // Store the name in the session
    session()->flash('user_name', $name);

    // Redirect back to the home page
    return redirect('/');
});
