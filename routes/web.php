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

//リスト一覧画面
Route::get('/','App\Http\Controllers\ListingsController@index');

//リスト新規画面
Route::get('/new', 'App\Http\Controllers\ListingsController@new')->name('new');

//リスト新規処理
Route::post('/listings','App\Http\Controllers\ListingsController@store');

//リスト更新画面
Route::get('/listingsedit/{listing_id}', 'App\Http\ControllersListings\Controller@edit');

//リスト更新処理
Route::post('/listing/edit','App\Http\ControllersListings\Controller@update');

//リスト削除処理
Route::get('/listingsdelete/{listing_id}', 'App\Http\ControllersListings\Controller@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
