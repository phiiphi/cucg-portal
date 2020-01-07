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

# Pages Route
Route::get('/', 'PagesController@welcome')->name('pages.welcome');
Route::get('/signup', 'PagesController@signup')->name('pages.signup');
Route::get('/login', 'PagesController@login')->name('pages.login');
Route::post('/', 'PagesController@loginstore')->name('pages.loginstore');
Route::get('/home', 'PagesController@home')->name('pages.home');
Route::get('/academicInfo', 'PagesController@academicInfo')->name('pages.courseRegistration.forms.academicInfo');
Route::get('/personalInfo', 'PagesController@personalInfo')->name('pages.courseRegistration.forms.personalInfo');


