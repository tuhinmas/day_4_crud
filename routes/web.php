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
Route::get('/jawaban','AnswersController@index');