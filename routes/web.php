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
Route::get('/', 'MainController@index')->name('index');
Route::post('/contacto', 'MainController@message');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/course-s', 'MainController@scourse')->name('course-s');
Route::get('/courses', 'MainController@courses')->name('courses');
Route::get('/events', 'MainController@events')->name('events');
Route::get('/gallery', 'MainController@gallery')->name('gallery');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/teachers', 'MainController@teachers')->name('teachers');
Route::get('/404', 'MainController@cuatro')->name('404');
Route::resource('message', 'MessagesController');