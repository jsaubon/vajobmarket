<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SendGrid\Mail\From;
use SendGrid\Mail\To;
use SendGrid\Mail\Mail;
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



Route::post('login', 'Backend\PassportController@login');
Route::post('register', 'Backend\PassportController@register');
Route::get('public_job_posts', 'Backend\ClientJobPostController@index');
Route::get('public_job_seekers', 'Backend\JobSeekerController@index');
Route::get('PublicClientJobPost/{id}', 'Backend\ClientJobPostController@show');
Route::get('PublicJobSeeker/{id}', 'Backend\JobSeekerController@show');
Route::post('visitIncrement', 'Backend\ClientJobPostController@visitIncrement');


Route::middleware('auth:api')->group(function () {
    Route::apiResource('User','Backend\UserController');
    Route::apiResource('Client','Backend\ClientController');
    Route::apiResource('ClientBillingDetail','Backend\ClientBillingDetailController');
    Route::apiResource('ClientBusinessInfo','Backend\ClientBusinessInfoController');
    Route::apiResource('ClientEmployee','Backend\ClientEmployeeController');
    Route::apiResource('ClientJobPost','Backend\ClientJobPostController');
    Route::apiResource('ClientJobPostRequiredSkill','Backend\ClientJobPostRequiredSkillController');
    Route::apiResource('Comment','Backend\CommentController');
    Route::apiResource('CommentLike','Backend\CommentLikeController');
    Route::apiResource('EmployeeMonitor','Backend\EmployeeMonitorController');
    Route::apiResource('JobSeeker','Backend\JobSeekerController');
    Route::apiResource('JobSeekerEducation','Backend\JobSeekerEducationController');
    Route::apiResource('JobSeekerExperience','Backend\JobSeekerExperienceController');
    Route::apiResource('JobSeekerLanguage','Backend\JobSeekerLanguageController');
    Route::apiResource('JobSeekerProfession','Backend\JobSeekerProfessionController');
    Route::apiResource('JobSeekerReference','Backend\JobSeekerReferenceController');
    Route::apiResource('JobSeekerSpecializedSkill','Backend\JobSeekerSpecializedSkillController');
    Route::apiResource('JobType','Backend\JobTypeController');
    Route::apiResource('Message','Backend\MessageController');
    Route::apiResource('Sector','Backend\SectorController');
});

Route::get('test1',function() {

    $email = new Mail();
    $email->setFrom("devsupport@ihrbuddy.com", "Support");
    $email->setSubject("I'm replacing the subject tag");
    $email->addTo(
        "joshuasaubon@gmail.com",
        "Joshua Saubon",
        [
            "subject" => "Subject Test",
            "name" => "Test Joshua",
        ],
        0
    );
    $email->setTemplateId("d-7b75b67cbc7b4a1cbf2f7dfb53115686");
    $sendgrid = new \SendGrid(env('SENDGRID_API_KEY'));
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        dd('Caught exception: '.  $e->getMessage());
    }
});
