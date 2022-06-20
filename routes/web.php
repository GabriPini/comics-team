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

Route::resource('/admin/characters', 'Admin\CharacterController');

Route::get('/guest/characters', 'Guest\CharacterController@index')->name('characters.index');
Route::get('/guest/characters/{character}', 'Guest\CharacterController@show')->name('characters.show');

Route::get('/', function () {
    $comic_list = config('db');
  return view('comics', compact('comic_list'));
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');


// comic single page
Route::get('/comics/{id}', function ($id) {
    $comic_list = config('db');

    if(is_numeric($id) && ($id < count($comic_list) && $id >= 0)){

        $comic = $comic_list[$id];
        return view('comic', ['comic' => $comic]);
    }

    abort('404');
})->name('comic');
