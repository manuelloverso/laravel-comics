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
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $comic = config('comics')[$id];
    //dd($action_array);
    return view('comic', compact('comic'));
})->name('comic');
