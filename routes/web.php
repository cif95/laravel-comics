<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $headerLinks = config('navbar');
    return view('guest.home', ['headerLinks' => $headerLinks]);
})->name('guest-home');


Route::get('/comics', function () {
    $headerLinks = config('navbar');
    $comicsCard = config('comics');
    return view('guest.comics',  [ "comicsCard" => $comicsCard, 'headerLinks' => $headerLinks ] );
})->name('guest-comics');


