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


Route::get('{all?}/{all1?}/{all2?}/{all3?}/{all4?}/{all5?}/{all6?}/{all7?}/{all8?}/{all9?}/{all10?}/{all11?}/{all12?}/{all13?}/{all14?}/{all15?}', function(Request $request){
    return view('react.app');
});
 