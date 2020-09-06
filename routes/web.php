<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'RedirectController@homepage') -> name('homepage');
Route::get('/part', 'RedirectController@part')-> name('part');
Route::get('/parts', 'RedirectController@parts')-> name('parts');
Route::get('/about', 'RedirectController@about')-> name('about');
Route::get('/reviews', 'RedirectController@reviews')-> name('review');
Route::get('/getModels','DatabaseController@getCarModels')->name('getModels');
Route::post('/about','FunctionController@send')->name('sendMail');
Route::post('/review','DatabaseController@addReview')->name('addReview');
Route::get('/search', 'DatabaseController@search')->name('search');
