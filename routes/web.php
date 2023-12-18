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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/list/all', 'ListController@allData')->name('contact-data');

Route::post('/submit', 'RegisterController@register')->name('register-form');
Route::post('/home/submit', 'ReportController@report')->name('report-form');

Route::post('/login/submit', 'LoginController@login')->name('login-form');