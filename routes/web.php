<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;

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
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('publishers',[PublisherController::class,'allPublishers']);
Route::get('publishers/{id}',[PublisherController::class,'getPublisher']);

Route::get('books',[BookController::class,'getBooks']);
Route::get('books/{id}',[BookController::class,'getBookDetail']);



