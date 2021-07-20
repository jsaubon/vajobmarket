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



Route::post('login', 'Backend/PassportController@login');
Route::post('register', 'Backend/PassportController@register');
Route::get('public_job_posts', 'Backend/ClientJobPostController@index');


Route::middleware('auth:api')->group(function () {
    Route::apiResource('User','Backend/UserController');
    Route::apiResource('Client','Backend/ClientController');
    Route::apiResource('ClientBillingDetail','Backend/ClientBillingDetailsController');
    Route::apiResource('ClientBusinessInfo','Backend/ClientBusinessInfoController');
    Route::apiResource('ClientEmployee','Backend/ClientEmployeeController');
    Route::apiResource('ClientJobPost','Backend/ClientJobPostController');
    Route::apiResource('ClientJobPostRequiredSkill','Backend/ClientJobPostRequiredSkillController');
    Route::apiResource('Comment','Backend/CommentController');
    Route::apiResource('CommentLike','Backend/CommentLikeController');
    Route::apiResource('EmployeeMonitor','Backend/EmployeeMonitorController');
    Route::apiResource('JobSeeker','Backend/JobSeekerController');
    Route::apiResource('JobSeekerEducation','Backend/JobSeekerEducationController');
    Route::apiResource('JobSeekerExperience','Backend/JobSeekerExperienceController');
    Route::apiResource('JobSeekerLanguage','Backend/JobSeekerLanguageController');
    Route::apiResource('JobSeekerProfession','Backend/JobSeekerProfessionController');
    Route::apiResource('JobSeekerReference','Backend/JobSeekerReferenceController');
    Route::apiResource('JobSeekerSpecializedSkill','Backend/JobSeekerSpecializedSkillController');
    Route::apiResource('JobType','Backend/JobTypeController');
    Route::apiResource('Message','Backend/MessageController');
    Route::apiResource('Sector','Backend/SectorController');
});


