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
Route::post('/loginauth', 'PagesController@loginstore')->name('pages.loginstore');
Route::post('/registerauth', 'PagesController@registerstore')->name('pages.registerstore');
Route::get('/home', 'PagesController@home')->name('pages.home')->middleware('Access');
Route::get('/profile', 'PagesController@profile')->name('pages.profile')->middleware('Access');
Route::get('/logout', 'PagesController@logout')->name('pages.logout');
Route::resource('course_registrations', 'CourseRegistrationController');

/* PHONE VERIFICATION */
Route::get('/verify', 'VerifyController@getVerify')->name('pages.verify');
Route::post('/verified', 'VerifyController@postVerify')->name('pages.verified');

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
// Route::post('/superlogin','LoginController@superLoginValidation')->name('superadmin.login');

/* Semester Calendar Admin Routes */
Route::get('/admin/semestercalendar', 'SemesterscalenderAdminController@index')->name('admin.calendar.index');
Route::get('/admin/create', 'SemesterscalenderAdminController@create')->name('admin.calendar.create');
Route::post('/admin/store', 'SemesterscalenderAdminController@store')->name('admin.calendar.store');
#load activity
Route::get('/load-activities', 'ActivityController@loadActivities')->name('routeLoadActivities');

Route::get('/addcourses','CoursesController@importFile' )->name('courses.add');
Route::post('/import','CoursesController@exportFile' )->name('courses.export');
Route::get('/addsemestercourses', 'CoursesController@createSemesterCourses')->name('semestercourse.add');
Route::post('/processcourse', 'CoursesController@processSemesterCourses')->name('semestercourses.process');

#END OF BACKEND ROUTES
