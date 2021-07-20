<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('login', 'PassportController@login');
Route::post('register', 'UserController@register');


Route::middleware('auth:api')->group(function () {
    Route::apiResource('User','UserController');
    Route::apiResource('Client','ClientController');
    Route::apiResource('ClientBillingDetail','ClientBillingDetailController');
    Route::apiResource('ClientBusinessInfo','ClientBusinessInfoController');
    Route::apiResource('ClientEmployee','ClientEmployeeController');
    Route::apiResource('ClientJobPost','ClientJobPostController');
    Route::apiResource('ClientJobPostRequiredSkill','ClientJobPostRequiredSkillController');
    Route::apiResource('Comment','CommentController');
    Route::apiResource('CommentLike','CommentLikeController');
    Route::apiResource('EmployeeMonitor','EmployeeMonitorController');
    Route::apiResource('JobSeeker','JobSeekerController');
    Route::apiResource('JobSeekerEducation','JobSeekerEducationController');
    Route::apiResource('JobSeekerExperience','JobSeekerExperienceController');
    Route::apiResource('JobSeekerLanguage','JobSeekerLanguageController');
    Route::apiResource('JobSeekerProfession','JobSeekerProfessionController');
    Route::apiResource('JobSeekerReference','JobSeekerReferenceController');
    Route::apiResource('JobSeekerSpecializedSkill','JobSeekerSpecializedSkillController');
    Route::apiResource('JobType','JobTypeController');
    Route::apiResource('Message','MessageController');
    Route::apiResource('Sector','SectorController');
});


