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
}
