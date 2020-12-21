<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $user = $request->user();

    dd($user->HasRole('admin'));
});

// Route::get('/', function () {
//     return view('admin.index');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
