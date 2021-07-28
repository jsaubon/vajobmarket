@extends('layouts.js-profile-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats pt-4 mt-4 container">
                <div class="row card-deck mb-4">
                    {{-- <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-md-12 text-center">Job Status</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">NONE</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Jobs Taken</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">20</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Profile Rating</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">85%</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item m-0" role="presentation">
                <a class="nav-link title-personal-info mt-0 active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#first-choice" role="tab" aria-controls="home" aria-selected="true">
                    personal
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info mt-0 active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#second-choice" role="tab" aria-controls="profile" aria-selected="false">
                    professional
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info mt-0 active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#third-choice" role="tab" aria-controls="profile" aria-selected="false">
                    skills
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="first-choice" role="tabpanel" aria-labelledby="home-tab">
                <div class="container ">
                    <div class="card p-4 shadow">

                        <div class="container">
                            {{-- personal-info --}}
                            <form class="container" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="title-personal-info " style="margin-top: 0 !important;">Personal Information</h2>
                                    </div>

                                    <div class="col-md-6 my-auto">
                                        <div class="row container px-0" style="margin:0px auto 20px auto;">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="fname" placeholder="First Name">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="mname" placeholder="Middle Name">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="lname" placeholder="Last Name">
                                          </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="profile-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items" id="b-month">
                                            <option>Month</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items" id="b-month">
                                            <option>Date</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items" id="b-month">
                                            <option>Year</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="nationality" placeholder="Nationality">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="address" placeholder="Address">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="Apartment" placeholder="Apartment, Suite, etc.">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="city" placeholder="City">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="state" placeholder="State / Province">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="country" placeholder="Country">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="zip" placeholder="Zip / Postal">
                                          </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control profile-info-forms-items" id="email" placeholder="E-mail Address">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="mobile" placeholder="Mobile Number">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="phone" placeholder="Phone Number">
                                          </div>
                                    </div>
                                </div>

                                {{-- education --}}
                                <h2 class="title-personal-info">Education</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="school" placeholder="Name of School">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control profile-info-forms-items" id="grad-year">
                                            <option>Year Graduated</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="course" placeholder="Course Graduated">
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-auto">
                                    <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                                        <div class="btn-plus"></div>
                                    </div>
                                </div>
                             {{-- references --}}
                                <h2 class="title-personal-info">references</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items" id="social-media">
                                            <option>Social Media / Website</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="url-link" placeholder="Enter URL/Link here">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-auto mb-4">
                                    <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                                        <div class="btn-plus"></div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="second-choice" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow">
                        <form class="container" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="title-personal-info " style="margin-top: 0 !important;">Profession</h2>
                                </div>

                                <div class="col-md-6 my-auto">
                                    <div class="row container px-0" style="margin:0px auto 20px auto;">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" id="job-title" placeholder="Job title">
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items" id="avail">
                                        <option>Availability</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2 p-1">
                                    <select class="form-control profile-info-forms-items " style="font-size:9px !important;" id="rate-month">
                                        <option>Asking Rate/Month</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2 p-1">
                                    <select class="form-control profile-info-forms-items" style="font-size:9px !important;" id="rate-hour">
                                        <option>Asking Rate/Hr</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 ">
                                    <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea p-2 w-100" rows="8" style=" resize: none;"></textarea>
                                </div>
                            </div>

                            {{-- Languages --}}
                            <h2 class="title-personal-info">Languages</h2>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" id="language" placeholder="Select Language">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control profile-info-forms-items" id="written-proficiency">
                                        <option>Written Proficiency</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control profile-info-forms-items" id="oras-proficiency">
                                        <option>Oral Proficiency</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-auto">
                                <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                                    <div class="btn-plus"></div>
                                </div>
                            </div>
                            {{-- Job Experiences --}}
                            <h2 class="title-personal-info">Job Experiences</h2>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" id="jobseeker-company-name" placeholder="Company Name">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" id="job-description" placeholder="Job Description">
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items "  id="rate-month">
                                        <option>From</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items"  id="rate-hour">
                                        <option>Until</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <div class="form-group profile-info-forms-items form-check " style="border:none !important;">
                                        <input type="checkbox" class="form-check-input p-2" id="exampleCheck1">
                                        <label class="form-check-label p-1" for="exampleCheck1">I currently work here</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <textarea placeholder="Write job scope here.."class="jobseeker-textarea p-2 w-100" rows="5" style=" resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="row mx-auto mb-4">
                                <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                                    <div class="btn-plus"></div>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container h-auto ">
                    <div class="card h-auto p-4 shadow">
                        <form class="container" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="title-personal-info " style="margin-top: 0 !important;">list of specialized skills</h2>
                                </div>

                                <div class="col-md-6 my-auto">
                                    <div class="row container px-0" style="margin:0px auto 20px auto;">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            {{-- skill-1 --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control profile-info-forms-items" id="skill-title1">
                                            <option>Title</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items "  id="skill-experience1">
                                        <option>Experience</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items"  id="skill-proficiency1">
                                        <option>Proficiency</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                                </div>
                            </div>

                            {{-- skill-2 --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control profile-info-forms-items" id="skill-title2">
                                            <option>Title</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items "  id="skill-experience2">
                                        <option>Experience</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items"  id="skill-proficiency2">
                                        <option>Proficiency</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                                </div>
                            </div>

                            {{-- skill-3 --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control profile-info-forms-items" id="skill-title3">
                                            <option>Title</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items "  id="skill-experience3">
                                        <option>Experience</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                                <div class="col-md-2 ">
                                    <select class="form-control profile-info-forms-items"  id="skill-proficiency3">
                                        <option>Proficiency</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                                </div>
                            </div>

                            <br>
                            {{-- button --}}
                            <div class="row mx-auto mb-4">
                                <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                                    <div class="btn-plus"></div>
                                </div>
                            </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
