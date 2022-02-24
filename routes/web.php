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
Route::get('/listingsedit/{listing_id}', 'App\Http\Controllers\ListingsController@edit');

//リスト更新処理
Route::post('/listing/edit','App\Http\Controllers\ListingsController@update');

//リスト削除処理
Route::get('/listingsdelete/{listing_id}', 'App\Http\Controllers\ListingsController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//カード新規画面
Route::get('listing/{listing_id}/card/new', 'App\Http\Controllers\CardsController@new')->name('new_card');

//カード新規処理
Route::post('/listing/{listing_id}/card', 'App\Http\Controllers\CardsController@store');

//カード詳細画面
Route::get('listing/{listing_id}/card/{card_id}', 'App\Http\Controllers\CardsController@show');

//カード編集画面
Route::get('listing/{listing_id}/card/{card_id}/edit', 'App\Http\Controllers\CardsController@edit');

//カード更新処理
Route::post('/card/edit', 'App\Http\Controllers\CardsController@update');

//カード削除処理
Route::get('listing/{listing_id}/card/{card_id}/delete', 'App\Http\Controllers\CardsController@destroy');
