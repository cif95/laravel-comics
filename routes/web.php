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
    $headerLinks = config('headerNavbar');
    $menuItems = config('menu');
    $footerNavbar = config('footerNavbar');
    return view('guest.home', [
        'headerLinks' => $headerLinks,
        'menuItems' => $menuItems,
        'footerNav' => $footerNavbar
    ]);
})->name('guest-home');


Route::get('/comics', function () {
    $headerLinks = config('headerNavbar');
    $comicsCard = config('comics');
    $menuItems = config('menu');
    $footerNavbar = config('footerNavbar');
    return view('guest.comics',  [ 
        'headerLinks' => $headerLinks,
        'comicsCard' => $comicsCard,
        'menuItems' => $menuItems,
        'footerNav' => $footerNavbar
        ] );
})->name('guest-comics');


