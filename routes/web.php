<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
use App\Http\Controllers\PagesController as PagesController;


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

/*Route::get('/', function () {
    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');

*/

/*
Route::get('/',[ComicController::class,'index'])->name('home');

Route::get('/home/{param}', function($param){
    $comics = config('comics');

    $single = '';
    foreach($comics as $key => $comic){
        if($key == $param){
            $single = $comic;
        }
    }

    return view('detail_comic', compact('single'));
})->name('detail_comic');

*/

Route::get('/', [PagesController::class,'index']) ->name('homepage');

Route::get('/CHARACTERS', function () {
    return view('CHARACTERS');
})->name('CHARACTERS');
Route::get('/MOVIE', function () {
    return view('MOVIE');
})->name('MOVIE');

Route::get('/TV', function () {
    return view('TV');
})->name('TV');

Route::get('/GAMES', function () {
    return view('GAMES');
})->name('GAMES');

Route::get('/COLLECTIBLES', function () {
    return view('COLLECTIBLES');
})->name('COLLECTIBLES');

Route::get('/VIDEOS', function () {
    return view('VIDEOS');
})->name('VIDEOS');

Route::get('/FANS', function () {
    return view('FANS');
})->name('FANS');

Route::get('/NEWS', function () {
    return view('NEWS');
})->name('NEWS');

Route::get('/SHOP', function () {
    return view('SHOP');
})->name('SHOP');