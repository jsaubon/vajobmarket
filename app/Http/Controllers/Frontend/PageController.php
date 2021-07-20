<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $metaData = [
            "front" => [
                "title" => "YOUR GO-TO PARTNER IN HIRING THE BEST VIRTUAL ASSISTANTS",
                "body" => "The leading marketplace in helping entrepreneurs in finding great talents to scale their business that offers the most affordable rates. Hire your Virtual Assistant today!",
                "btnTxt" => "CLICK HERE TO FIND OUT HOW"
            ],
            "subs" => [
                "title" => "Handpicked candidates with great potentials",
                "body" => "With our skilled Virtual Assistants on our marketplace, any business can takle a wide range of projects. From graphic designing to SEO blogging, name it all. We got you covered!",
                "btnTxt" => "START YOUR HIRING PROCESS NOW",
                "cardTitle" => "SUBSCRIBE TO OUR PREMIUM PACKAGE AND HIRE YOUR OWN VIRTUAL STAFF",
                "cardSubtitle" => "PRO ENTREPRENEUR PACKAGE",
                "cardBody" => "We'll help you find your skilled virtual staff to scale your business.",
                "learnBtn" => "LEARN MORE ABOUT THE ADVANTAGES",
                "checkList" => [
                    "UNLIMITED JOB POSTING",
                    "Job Displayed for 30 Days",
                    "Weekly Featured Job Ads",
                    "Email and Chat Support 24/7 Unlimited Download",
                    "Candidate Resume to PDFQuick VA Skilled Matching",
                    "Access to Exclusive Facebook Community",
                    "LEARN MORE ABOUT THE ADVANTAGES"
                ]
            ],
            "media" => [
                "title" => "Upskill your Virtual Assistants to their full potential",
                "btnTitle" => "WATCH THE VIDEO AND FIND OUT HOW"
            ],
            "careers" => [
                "title" => "Specialized Careers",
                "btnTitle" => "FIND OUT MORE",
                "careers" => [
                    "Social Media Manager",
                    "Content Writer",
                    "Credit Repair Assistant",
                    "Executive Assistant",
                    "Appointment Setter",
                    "Digital Marketing Specialist"
                ]
            ],
            "teams" => [
                "title" => "Our Top Remote Workers",
                "body" => "Be with only the best. Meet our top performing Virtual Assistants, see how they love working remotely and how they will help you level up your business!",
                "btnTxt" => "FIND OUT MORE",
                "workers" => [
                    [
                        "img" => "https://i.ibb.co/L1xT86W/profileworkers.jpg",
                        "name" => "Name Surname",
                        "ratings" => "start ratings -----"
                    ],
                    [
                        "img" => "https://i.ibb.co/L1xT86W/profileworkers.jpg",
                        "name" => "Name Surname",
                        "ratings" => "start ratings -----"
                    ],
                    [
                        "img" => "https://i.ibb.co/L1xT86W/profileworkers.jpg",
                        "name" => "Name Surname",
                        "ratings" => "start ratings -----"
                    ],
                    [
                        "img" => "https://i.ibb.co/L1xT86W/profileworkers.jpg",
                        "name" => "Name Surname",
                        "ratings" => "start ratings -----"
                    ],
                ]
            ],
            "testimonials" => [
                [
                    "img" => "https://i.ibb.co/HBZZmxS/testimonial.jpg",
                    "title" => "Our Top ReWill Hiring a Virtual Assistant Help You Survive This Crisis?",
                    "body" => "The pandemic had make this year a tough year for all of us. As everyone stays at home on lockdown, so are businesses. But as business owners, we're also just humans that worry about our own family and want to tak care of them, but how do we do such, without pausing our business?",
                    "seemore" => "#seemore",
                    "metaData" => [
                        "timelapse" => "hr ago",
                        "likes" => 45,
                        "seen" => 100,
                        "share" => "Share"
                    ],
                    "user" => [
                        "img" => "https://i.ibb.co/L1xT86W/profileworkers.jpg",
                        "name" => "Name Surname",
                        "job" => "Author / Content Writer"
                    ]
                ]
            ]
        ];

        return view('welcome', $metaData);
    }
}
