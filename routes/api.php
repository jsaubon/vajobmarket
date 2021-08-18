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

    $exp_date = '01/21';
    $cvc = '321';


    $card = [
        'number' => '4242424242424242',
        'exp_month' => '01',
        'exp_year' => '2022',
        'cvc' => $cvc,
    ];


    $stripe = new \Stripe\StripeClient('sk_test_n4PP5wnx5j42xhC9pmzfsefF00GnQvHVlX');
     
    // dd($exp_year,$exp_month);
    // CREATE TOKEN
    $token = $stripe->tokens->create([
        'card' => $card,
    ]);
    // dd($token);
    $token_id = $token->id;
    

    // CREATE CUSTOMER
    $customer = $stripe->customers->create([
        'description' => 'Test Customer',
        'email' => 'test@test.com',
        'source' => $token_id,
    ]);

    dd($customer);
});
