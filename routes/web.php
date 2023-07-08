<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

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
    return view('welcome');
});

Route::get('home', 'HomeController@home')->name('home');
Route::get('about', 'AboutController@about')->name('about');
Route::get('blog', 'BlogController@blog')->name('blog');
Route::get('contact', 'ContactController@contact')->name('contact');
Route::get('cart', 'CartController@cart')->name('cart');
Route::get('books', 'BookController@books')->name('books');
Route::get('view-book/{id}', 'BookController@viewBook')->name('view.book');
Route::get('account', 'AccountController@account')->name('account');
Route::get('search', 'SearchController@search')->name('search');
