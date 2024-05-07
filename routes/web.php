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

Route::get('/', function () {
    $comics = config('comics');
    //dd($comics);

    return view('home', compact('comics'));
});

Route::get('/action', function () {
    $comics = config('comics');
    $action_array = $comics[0];
    //dd($action_array);
    return view('action', compact('action_array'));
})->name('action');
