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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\PageController@index');
Route::get('/about', 'Frontend\AboutController@index');
Route::get('/pricing', 'Frontend\PricingController@index');
Route::get('/jobs', 'Frontend\JobSearchController@index');
Route::get('/posts', 'Frontend\JobPostingController@index');
Route::get('/dashboard', 'Frontend\DashboardController@index');
Route::get('/signup', 'Frontend\SignupController@index');

//jobseeker
Route::get('/jobterms', 'Frontend\JobSearchController@jobterms');
Route::get('/personalInfo', 'Frontend\JobSearchController@personalInfo');
Route::get('/personalDetails', 'Frontend\JobSearchController@personalDetails');
Route::get('/jobseekerSkillset', 'Frontend\JobSearchController@jobseekerSkillset');
Route::get('/jobseekerProfileReview', 'Frontend\JobSearchController@jobseekerProfileReview');
Route::get('/jobseekerFinalize', 'Frontend\JobSearchController@jobseekerFinalize');


//business-owner
Route::get('/business', 'Frontend\BusinessController@index');
Route::get('/businessReview', 'Frontend\BusinessController@businessReview');
Route::get('/businessPersonalInfo', 'Frontend\BusinessController@businessPersonalInfo');
Route::get('/businessInfo', 'Frontend\BusinessController@businessInfo');
Route::get('/BusinessBilling', 'Frontend\BusinessController@BusinessBilling');
Route::get('/BusinessFinalize', 'Frontend\BusinessController@BusinessFinalize');
<<<<<<< HEAD
Route::get('/BusinessProfile', 'Frontend\BusinessController@BusinessProfile');
Route::get('/BusinessProfilePersonal', 'Frontend\BusinessController@BusinessProfilePersonal');

=======
Route::get('/BusinessAllJobPost', 'Frontend\BusinessCOntroller@BusinessAllJobPost');
Route::get('/BusinessPostJob', 'Frontend\BusinessController@BusinessPostJob');
>>>>>>> 69b48005967c007f6995d09d4ff5eb0bb7d81a80
