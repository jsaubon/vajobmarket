<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JobSearchController extends Controller
{
    public function index() {

        $metaData = [
            "title" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, eos.",
            "placeholder" => "What would you like to read today?",
            "tags" => [
                "free",
                "illustration",
                "graphics",
                "ui",
                "interface",
                "iphone",
                "design"
            ],
            "jobPosts" => [
                [
                    "title" => "What is a frontend developer?",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae rerum voluptate officiis qui saepe atque ratione unde nulla ut cumque, hic eius fugit debitis molestiae! Mollitia voluptates libero obcaecati repudiandae assumenda quos maiores id soluta ullam! Veritatis optio repudiandae in facilis voluptatem, dolorum quidem ipsa ipsum accusamus, reprehenderit tempora!",
                    "basicInfo" => [
                        "FULLTIME",
                        "Business Name",
                        "Salary: Negotiable",
                        "Posted: June 25, 2021"
                    ],
                    "btnTxt" => "READ MORE"
                ],
                [
                    "title" => "What is a backend developer?",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae rerum voluptate officiis qui saepe atque ratione unde nulla ut cumque, hic eius fugit debitis molestiae! Mollitia voluptates libero obcaecati repudiandae assumenda quos maiores id soluta ullam! Veritatis optio repudiandae in facilis voluptatem, dolorum quidem ipsa ipsum accusamus, reprehenderit tempora!",
                    "basicInfo" => [
                        "FULLTIME",
                        "Business Name",
                        "Salary: Negotiable",
                        "Posted: June 25, 2021"
                    ],
                    "btnTxt" => "READ MORE"
                ],
                [
                    "title" => "What is a backend developer?",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae rerum voluptate officiis qui saepe atque ratione unde nulla ut cumque, hic eius fugit debitis molestiae! Mollitia voluptates libero obcaecati repudiandae assumenda quos maiores id soluta ullam! Veritatis optio repudiandae in facilis voluptatem, dolorum quidem ipsa ipsum accusamus, reprehenderit tempora!",
                    "basicInfo" => [
                        "FULLTIME",
                        "Business Name",
                        "Salary: Negotiable",
                        "Posted: June 25, 2021"
                    ],
                    "btnTxt" => "READ MORE"
                ],
                [
                    "title" => "What is a backend developer?",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae rerum voluptate officiis qui saepe atque ratione unde nulla ut cumque, hic eius fugit debitis molestiae! Mollitia voluptates libero obcaecati repudiandae assumenda quos maiores id soluta ullam! Veritatis optio repudiandae in facilis voluptatem, dolorum quidem ipsa ipsum accusamus, reprehenderit tempora!",
                    "basicInfo" => [
                        "FULLTIME",
                        "Business Name",
                        "Salary: Negotiable",
                        "Posted: June 25, 2021"
                    ],
                    "btnTxt" => "READ MORE"
                ],
                [
                    "title" => "What is a backend developer?",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae rerum voluptate officiis qui saepe atque ratione unde nulla ut cumque, hic eius fugit debitis molestiae! Mollitia voluptates libero obcaecati repudiandae assumenda quos maiores id soluta ullam! Veritatis optio repudiandae in facilis voluptatem, dolorum quidem ipsa ipsum accusamus, reprehenderit tempora!",
                    "basicInfo" => [
                        "FULLTIME",
                        "Business Name",
                        "Salary: Negotiable",
                        "Posted: June 25, 2021"
                    ],
                    "btnTxt" => "READ MORE"
                ],
            ],
            "candidates" => [
                [
                    "name" => "Jane Doe",
                    "occupation" => "Social Media Manager",
                    "ratings" => "4.5/5",
                    "coverLetter" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deleniti laboriosam possimus rerum numquam aspernatur repellendus, vel laborum, error voluptate ducimus laudantium et corporis voluptates, incidunt temporibus voluptatibus dolor! Voluptas in omnis dolores veritatis commodi iusto numquam, delectus ea aliquid minima atque cupiditate. Adipisci illum quia deleniti eum vel exercitationem.",
                    "btnTxt" => "SEE PROFILE"
                ],
                [
                    "name" => "James Reed",
                    "occupation" => "Content Writer",
                    "ratings" => "4.5/5",
                    "coverLetter" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deleniti laboriosam possimus rerum numquam aspernatur repellendus, vel laborum, error voluptate ducimus laudantium et corporis voluptates, incidunt temporibus voluptatibus dolor! Voluptas in omnis dolores veritatis commodi iusto numquam, delectus ea aliquid minima atque cupiditate. Adipisci illum quia deleniti eum vel exercitationem.",
                    "btnTxt" => "SEE PROFILE"
                ],
                [
                    "name" => "Jane Doe",
                    "occupation" => "Social Media Manager",
                    "ratings" => "4.5/5",
                    "coverLetter" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deleniti laboriosam possimus rerum numquam aspernatur repellendus, vel laborum, error voluptate ducimus laudantium et corporis voluptates, incidunt temporibus voluptatibus dolor! Voluptas in omnis dolores veritatis commodi iusto numquam, delectus ea aliquid minima atque cupiditate. Adipisci illum quia deleniti eum vel exercitationem.",
                    "btnTxt" => "SEE PROFILE"
                ],
                [
                    "name" => "James Reed",
                    "occupation" => "Content Writer",
                    "ratings" => "4.5/5",
                    "coverLetter" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur deleniti laboriosam possimus rerum numquam aspernatur repellendus, vel laborum, error voluptate ducimus laudantium et corporis voluptates, incidunt temporibus voluptatibus dolor! Voluptas in omnis dolores veritatis commodi iusto numquam, delectus ea aliquid minima atque cupiditate. Adipisci illum quia deleniti eum vel exercitationem.",
                    "btnTxt" => "SEE PROFILE"
                ],
            ]
        ];

        return view('jobSearch.jobsearch', $metaData);

    }
    public function jobterms(){
        return view('jobSearch.jobSearchTerm');
    }

    public function personalInfo(){
        return view('jobSearch.jobseeker-personal-info');
    }
    public function personalDetails(){
        return view('jobSearch.jobseeker-personal-details');
    }
    public function jobseekerSkillset(){
        return view('jobSearch.jobseeker-skillset');
    }
    public function jobseekerProfileReview(){
        return view('jobSearch.jobseeker-profile-review');
    }
    public function jobseekerFinalize(){
        return view('jobSearch.jobseeker-finalize');
    }
    public function jobseekerProfile(){
        return view('jobSearch.jobseeker-profile-page');
    }
    public function jobseekerUpdateDetails(){
        return view('jobSearch.jobseeker-update-details');
    }

    public function jobseekerMessages(){
        return view('jobSearch.jobseeker-messages');
    }

    public function jobseekerApplications(){
        return view('jobSearch.jobseeker-applications');
    }

}
