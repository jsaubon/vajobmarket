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

Route::get('/', 'PageController@index');
Route::get('/about', 'AboutController@index');
Route::get('/pricing', 'PricingController@index');
Route::get('/jobs', 'JobSearchController@index');
Route::get('/posts', 'JobPostingController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/signup', 'SignupController@index');