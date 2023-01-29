<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', 'ContactController@index');

//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('confirm');

//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('send');