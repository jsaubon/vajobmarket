<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //
    function index(){
        return view('business.businessTerms');
    }
    function businessReview(){
        return view('business.business-review');
    }
    function businessPersonalInfo(){
        return view('business.business-personal-info');
    }
    function businessInfo(){
        return view('business.business-information');
    }
    function BusinessBilling(){
        return view('business.business-billing');
    }
    function BusinessFinalize(){
        return view('business.business-finalize');
    }
    function BusinessProfile(){
        return view('business.business-profile');
    }
    function BusinessProfilePersonal(){
        return view('business.business-profile-personal');
    }

    function BusinessAllJobPost(){
        return view('business.business-all-job-post');
    }

    function BusinessPostJob(){
        return view('business.business-post-job');
    }

}
