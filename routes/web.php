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
    $comicsCards = config('comics');
    $menuItems = config('menu');
    $footerNavbar = config('footerNavbar');
    return view('guest.comics',  [ 
        'headerLinks' => $headerLinks,
        'comicsCards' => $comicsCards,
        'menuItems' => $menuItems,
        'footerNav' => $footerNavbar
        ] );
})->name('guest-comics');


Route::get('/comics/{i}', function ($i) {
    $headerLinks = config('headerNavbar');
    $comicsCards = config('comics');
    $menuItems = config('menu');
    $footerNavbar = config('footerNavbar');

    if ( $i >= 0 && $i < count($comicsCards) && is_numeric($i) ) {
        return view('guest.comics-detail',  [ 
            'headerLinks' => $headerLinks,
            'comicsCard' => $comicsCards[$i],
            'menuItems' => $menuItems,
            'footerNav' => $footerNavbar
            ] );
    } else {
        abort(404);
    }
})->name('guest-comics-detail');


Route::get('/news', function () {
    $headerLinks = config('headerNavbar');
    $newsCards = config('news');
    $menuItems = config('menu');
    $footerNavbar = config('footerNavbar');
    return view('guest.news',  [ 
        'headerLinks' => $headerLinks,
        'newsCards' => $newsCards,
        'menuItems' => $menuItems,
        'footerNav' => $footerNavbar
        ] );
})->name('guest-news');


