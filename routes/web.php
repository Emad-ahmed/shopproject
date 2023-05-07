<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{name?}', function ($name = null) {
    $demo =  "<h2> Hello This Is Demo</h2>";
    $data = compact('name', 'demo');
    return view('home')->with($data);
});
