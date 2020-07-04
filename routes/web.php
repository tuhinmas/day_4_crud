<?php

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



Route::get('/pertanyaan', 'QuestionsController@index')->name('home');
Route::get('/pertanyaan/create','QuestionsController@create');
Route::post('/pertanyaan','QuestionsController@store');
Route::get('/jawaban/{pertanyaan_id}','QuestionsController@show');
Route::post('/jawaban/{pertanyaan_id}','AnswersController@store');

Route::get('/pertanyaan/{pertanyaan_id}/edit','QuestionsController@edit');
Route::put('/pertanyaan/{pertanyaan_id}','QuestionsController@update');