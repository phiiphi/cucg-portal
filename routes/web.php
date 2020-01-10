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

# Frontend Routes
Route::get('/', 'PagesController@starting')->name('pages.starting');
Route::get('/signup', 'PagesController@signup')->name('pages.signup');
Route::get('/login', 'PagesController@login')->name('pages.login');
Route::post('/', 'PagesController@loginstore')->name('pages.loginstore');
Route::get('/home', 'PagesController@home')->name('pages.home');
Route::get('/home/registration', 'CourseRegistrationController@personalInfo')->name('courseRegistration.forms.personalInfo');
Route::get('/home/registration/regdetails', 'CourseRegistrationController@registrationDetails')->name('courseRegistration.forms.registrationDetails');
Route::get('/home/registration/academicinfo', 'CourseRegistrationController@academicInfo')->name('courseRegistration.forms.academicInfo');


#Backend/Admin Routes
Route::get('/admin', 'AdminpagesController@login')->name('admin.login');
Route::get('/admin/index', 'AdminpagesController@index')->name('admin.index');
