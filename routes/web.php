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
Route::get('/jobterms', 'Frontend\JobSearchController@jobterms');
Route::get('/personalInfo', 'Frontend\JobSearchController@personalInfo');
Route::get('/personalDetails', 'Frontend\JobSearchController@personalDetails');
Route::get('/business', 'Frontend\BusinessController@index');
