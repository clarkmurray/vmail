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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/outbox', 'SentController@index')->name('outbox');

Route::post('/messages', 'MessagesController@store');

Route::get('/star/{message}', 'MessagesController@star');

Route::get('/message/{message}', 'MessagesController@show');

Route::get('/messages/create', 'MessagesController@create');

Route::get('/conversation/{recipient}/{sender}', 'ConversationController@index');

Route::delete('/messages/{message}', 'MessagesController@destroy');
