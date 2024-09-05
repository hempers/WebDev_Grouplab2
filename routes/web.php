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
    // Store the name in the session, default to 'Guest' if no name is provided
    $userName = $name ?: 'Guest';
    session()->flash('user_name', $userName);

    // Redirect back to the home page
    return redirect('/');
});
