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

#FRONTEND ROUTES

/* Pages Routes */
Route::get('/', 'PagesController@starting')->name('pages.starting');
Route::get('/signup', 'PagesController@signup')->name('pages.signup');
Route::get('/login', 'PagesController@login')->name('pages.login');
Route::post('/', 'PagesController@loginstore')->name('pages.loginstore');
Route::get('/home', 'PagesController@home')->name('pages.home');
Route::get('/home', 'PagesController@home')->name('pages.home');
Route::resource('course_registrations', 'CourseRegistrationController');
Route::get('/profile','PagesController@profile')->name('pages.profile');



/* Course Registration Routes */
Route::get('/home/registration', 'CourseRegistrationController@personalInfo')->name('courseRegistration.forms.personalInfo');
Route::get('/home/registration/registrationDetails', 'CourseRegistrationController@registrationDetails')->name('courseRegistration.forms.registrationDetails');
Route::get('/home/registration/academicInfo', 'CourseRegistrationController@academicInfo')->name('courseRegistration.forms.academicInfo');

/* Semester Calendar Routes */
Route::get('/semestercalendar', 'semesterscalendar@index')->name('calendar.index');


#END OF FRONTEND ROUTES

#BACKEND/ADMIN ROUTES

/* PAGES */
Route::get('/admin', 'AdminpagesController@login')->name('admin.login');
Route::get('/admin/index', 'AdminpagesController@index')->name('admin.index');

/* Semester Calendar Admin Routes */
Route::get('/admin/semestercalendar', 'SemesterscalenderAdminController@index')->name('admin.calendar.index');
Route::get('/admin/create', 'SemesterscalenderAdminController@create')->name('admin.calendar.create');
Route::post('/admin/store', 'SemesterscalenderAdminController@store')->name('admin.calendar.store');
Route::post('semesterscalendarAdmin/{{id}}', 'SemesterscalenderAdminController@update')->name('admin.calendar.update');
#load activity
Route::get('/load-activities', 'ActivityController@loadActivities')->name('routeLoadActivities');


#END OF BACKEND ROUTES
