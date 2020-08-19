<?php

use App\book;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/','AuthController@index')->name('login');
Route::get('/login','AuthController@index');
Route::get('/logout','AuthController@logout');
Route::get('/register','AuthController@register');
Route::post('/postlogin','AuthController@postlogin');
Route::post('/postregister','AuthController@postregister');
Route::get('/home','PagesController@home')->middleware('auth');
Route::resource('category','CategoryController')->middleware('auth');
Route::resource('book','BookController')->middleware('auth');