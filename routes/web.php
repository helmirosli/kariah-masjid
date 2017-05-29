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

Route::get('/memberlist', 'MemberController@index');
Route::get('/memberlist/insert', 'MemberController@insertform');
Route::post('/memberlist/create', 'MemberController@insert');
Route::get('/memberlist/edit/{memberId}', 'MemberController@show');
Route::post('/memberlist/edit/{memberId}', 'MemberController@edit');
Route::get('/memberlist/delete/{memberId}', 'MemberController@delete');
