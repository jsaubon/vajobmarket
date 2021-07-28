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
    function BusinessProfileCompany(){
        return view('business.business-profile-company');
    }

    function BusinessAllJobPost(){
        return view('business.business-all-job-post');
    }

    function BusinessPostJob(){
        return view('business.business-post-job');
    }

    function BusinessEditJobPost(){
        return view('business.business-edit-job-post');
    }

    function BusinessApplications(){
        return view('business.business-applications');
    }

    function BusinessEmployment(){
        return view('business.business-employment');
    }

    function BusinessMessages(){
        return view('business.business-messages');
    }
    function DashboardBusiness(){
        return view('business.business-dashboard');
    }
    function BusinessInfoSettings(){
        return view('business.business-settings');
    }
}
