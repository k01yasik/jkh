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

Route::get('/', 'PageController@home')->name('pages.home');

Route::get('/reports', 'ReportController@index')->name('report.index');

Route::get('/inquiry', 'InquiryController@index')->name('inquiry.index');

Route::get('/appeal', 'AppealController@index')->name('appeal.index');

Auth::routes();