<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {

        $metaData = [
            "services" => [
                [
                    "title" => "Job Postings",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
                [
                    "title" => "Professional Hiring",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
                [
                    "title" => "Client Liason",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
                [
                    "title" => "Permanent Staffing",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
                [
                    "title" => "Payroll Management",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
                [
                    "title" => "Premium Support",
                    "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos expedita tenetur officiis rem quae, praesentium voluptas. Enim?",
                    "link" => "#jobPostings"
                ],
            ]
        ];

        return view('about.index', $metaData);
    }
}
