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
Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/fetaure/details/{title}', 'FrontendController@fetaureDetails')->name('fetaure.detials');
Route::get('/categorycourse/details/{category}', 'FrontendController@categoryCourseDetails')->name('categorycourse.detials');
Route::get('/fornt/login', 'FrontendController@logIN')->name('front.login');
Route::get('/fornt/register', 'FrontendController@register')->name('front.register');
Route::post('/profile/update', 'FrontendController@profileUpdate')->name('profile.update');
Route::post('/password/change', 'FrontendController@passwordUpdate')->name('password.change');
Route::post('/contact/store', 'FrontendController@contactInfoStore')->name('contact.store');
Route::get('/dashboard', 'HomeController@frontIndex')->name('dashboard');
Route::get('/check/out/{id}', 'HomeController@checkOut')->name('check.out');
Route::post('/checkOut/store', 'HomeController@checkOutStore')->name('checkout.store');
Route::get('/download/url/{id}', 'HomeController@downloadPath')->name('download.url');
Route::get('/student/download/url/{id}', 'HomeController@downloadPathStudent')->name('student.download.url');

//Document User
Route::post('/student/document/store', 'HomeController@documentStore')->name('student.document.store');


Route::middleware(['web', 'user'])->group(function () {
   Route::get('/home', 'HomeController@index')->name('home');

   // APP SETTING

Route::get('/about/create', 'GeneralSettingsController@aboutCreate')->name('about.create');
Route::post('/about/store', 'GeneralSettingsController@aboutStore')->name('about.store');
//mesaages
Route::get('/user/messages', 'GeneralSettingsController@userMessages')->name('user.messages');
Route::get('/message/delete/{id}', 'GeneralSettingsController@messageDelete')->name('message.delete');

//Studeent Show
Route::get('/students/create', 'GeneralSettingsController@studentCreate')->name('students.create');
Route::post('/students/store', 'GeneralSettingsController@studentStore')->name('students.store');
Route::get('/all/students', 'GeneralSettingsController@allStudents')->name('all.students');
Route::get('/usser/delete/{id}', 'GeneralSettingsController@userDelete')->name('user.delete');



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

Route::get('/testimonial/create', 'GeneralSettingsController@jobberCreate')->name('testimonial.create');
Route::post('/testimonial/store', 'GeneralSettingsController@jobberStore')->name('testimonial.store');
Route::get('/testimonial/index', 'JobberController@index')->name('testimonial.index');
Route::get('/testimonial/delete/{id}', 'JobberController@destroy')->name('testimonial.delete');
Route::get('/testimonial/edit/{id}', 'JobberController@edit')->name('testimonial.edit');
Route::post('/testimonial/update/{id}', 'JobberController@update')->name('testimonial.update');

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

// APP Course Enrollmant

Route::get('/courses/create', 'CourseEnrollController@create')->name('courses.create');
Route::post('/courses/store', 'CourseEnrollController@store')->name('courses.store');
Route::get('/courses/index', 'CourseEnrollController@index')->name('courses.index');
Route::get('/courses/delete/{id}', 'CourseEnrollController@destroy')->name('courses.delete');
Route::get('/courses/edit/{id}', 'CourseEnrollController@edit')->name('courses.edit');
Route::post('/coursess/update/{id}', 'CourseEnrollController@update')->name('courses.update');

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

Route::get('/document/create', 'GeneralSettingsController@documentCreate')->name('document.create');
Route::post('/document/store', 'GeneralSettingsController@documentStore')->name('document.store');
Route::get('/document/index', 'GeneralSettingsController@documentIndex')->name('document.index');
Route::get('/document/edit/{id}', 'GeneralSettingsController@documentEdit')->name('document.edit');
Route::post('/document/update/{id}', 'GeneralSettingsController@documentUpdate')->name('document.update');
Route::get('/document/delete/{id}', 'GeneralSettingsController@documentDelete')->name('document.delete');
// Route::get('/download/{Attachment}', 'GeneralSettingsController@download')->name('download');


//END APP Feature

//Enrollmanr Details

Route::get('/enrollment/details', 'GeneralSettingsController@enrollmentDetailsIndex')->name('enrollment.details');
Route::get('/enrollment/delete/{id}', 'GeneralSettingsController@enrollmentDetailsDelete')->name('enrollment.delete');
//END DEATAILS
//offers Details

Route::get('/offers/create', 'GeneralSettingsController@offersCreate')->name('offers.create');
Route::get('/offers/index', 'GeneralSettingsController@offersIndex')->name('offers.index');
Route::post('/offers/store', 'GeneralSettingsController@offersStore')->name('offers.store');
Route::get('/offers/delete/{id}', 'GeneralSettingsController@offersDelete')->name('offers.delete');
Route::get('/offers/edit/{id}', 'GeneralSettingsController@offersEdit')->name('offers.edit');
Route::post('/offers/update/{id}', 'GeneralSettingsController@offersUpdate')->name('offers.update');
//end offers DEATAILS


   });
Auth::routes();




