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
    $comics= config ('comics');
    return view('home', compact('comics'));
})->name('home');

Route::get('/characters', function () {
    
    return ('characters');
})->name('characters');

Route::get('/comics', function () {
    
    return ('comics');
})->name('comics');

Route::get('/movies', function () {
    
    return ('movies');
})->name('movies');

Route::get('/tv', function () {
    
    return ('tv');
})->name('tv');

Route::get('/games', function () {
    
    return ('games');
})->name('games');

Route::get('/collectibles', function () {
    
    return ('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    
    return ('videos');
})->name('videos');

Route::get('/fans', function () {
    
    return ('fans');
})->name('fans');

Route::get('/news', function () {
    
    return ('news');
})->name('news');

Route::get('/shop', function () {
    
    return ('shop');
})->name('shop');
