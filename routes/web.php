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

Route::get('/', 'FrontendController@index')->name('front.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// APP SETTING 

Route::get('/about/create', 'GeneralSettingsController@aboutCreate')->name('about.create');
Route::post('/about/store', 'GeneralSettingsController@aboutStore')->name('about.store');

//END APP SETTING

// APP FunFact 

Route::get('/funfact/create', 'GeneralSettingsController@funfactCreate')->name('funfact.create');
Route::post('/funfact/store', 'GeneralSettingsController@funfactStore')->name('funfact.store');

//END APP FunFact
// APP FAQ 

Route::get('/faq/create', 'GeneralSettingsController@faqCreate')->name('faq.create');
Route::post('/faq/store', 'GeneralSettingsController@faqStore')->name('faq.store');

//END APP FAQ

// APP jobber 

Route::get('/jobber/create', 'GeneralSettingsController@jobberCreate')->name('jobber.create');
Route::post('/jobber/store', 'GeneralSettingsController@jobberStore')->name('jobber.store');
Route::get('/jobber/index', 'JobberController@index')->name('jobber.index');
Route::get('/jobber/delete/{id}', 'JobberController@destroy')->name('jobber.delete');
Route::get('/jobber/edit/{id}', 'JobberController@edit')->name('jobber.edit');
Route::post('/jobber/update/{id}', 'JobberController@update')->name('jobber.update');

//END APP jobber

// instructor

Route::get('/instructor/index', 'InstructorController@index')->name('instructor.index');
Route::get('/instructor/create', 'InstructorController@create')->name('instructor.create');
Route::post('/instructor/store', 'InstructorController@store')->name('instructor.store');
Route::get('/instructor/delete/{id}', 'InstructorController@destroy')->name('instructor.delete');
Route::get('/instructor/edit/{id}', 'InstructorController@edit')->name('instructor.edit');
Route::post('/instructor/update/{id}', 'InstructorController@update')->name('instructor.update');

//END instructor

// APP Galery 

Route::get('/galery/create', 'GeneralSettingsController@galeryCreate')->name('galery.create');
Route::post('/galery/store', 'GeneralSettingsController@galeryStore')->name('galery.store');

//END APP Galery

// APP Price 

Route::get('/price/create', 'GeneralSettingsController@priceCreate')->name('price.create');
Route::post('/price/store', 'GeneralSettingsController@priceStore')->name('price.store');

//END APP Price
// APP Video 

Route::get('/video/create', 'GeneralSettingsController@vedioCreate')->name('video.create');
Route::post('/video/store', 'GeneralSettingsController@vedioStore')->name('video.store');

//END APP Video

// APP Course Category 

Route::get('/course/create', 'GeneralSettingsController@courseCreate')->name('course.create');
Route::post('/course/store', 'GeneralSettingsController@courseStore')->name('course.store');

//END APP Course Category

// APP Feature  

Route::get('/feature/create', 'GeneralSettingsController@featureCreate')->name('feature.create');
Route::post('/feature/store', 'GeneralSettingsController@featureStore')->name('feature.store');

//END APP Feature 
// APP Feature  

Route::get('/setting/create', 'GeneralSettingsController@settingCreate')->name('setting.create');
Route::post('/setting/store', 'GeneralSettingsController@settingStore')->name('setting.store');

//END APP Feature 
