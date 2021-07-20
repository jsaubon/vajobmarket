<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index() {
        $metaData = [
            "checkList" => [
                "UNLIMITED JOB POSTING",
                "Job Displayed for 30 Days",
                "Weekly Featured Job Ads",
                "Email and Chat Support 24/7 Unlimited Download",
                "Candidate Resume to PDFQuick VA Skilled Matching",
                "Access to Exclusive Facebook Community",
                "LEARN MORE ABOUT THE ADVANTAGES"
            ]
        ];

        return view('pricing.index', $metaData);
    }
}
