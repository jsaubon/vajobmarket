@extends('layouts.app')

@section('content')
<div class="container-fluid h-auto personal-info">
    <div class="container h-100" style="padding-top: 100px; padding-bottom:10px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="container w-75 stepper-container">
            <ul class="d-flex justify-content-around  progress-steps">
                <li class="text-active">
                    <div class="shape ">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    personal information
                    <div class="line1 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape shape-active">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    professional details
                    <div class="line2"></div>
                </li>
                <li>
                    <div class="shape" >
                        <div class="dot"></div>
                    </div>
                    <br>
                    skill sets
                    <div class="line3"></div>
                </li>
                <li>
                    <div class="shape">
                        <div class="dot"></div>
                    </div>
                    <br>
                    profile review
                </li>
            </ul>
        </div>
        <div class="container w-75 d-flex justify-content-center">
            <div class="container">


                <form class="container" action="">
                    <h2 class="title-personal-info">Profession</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="job-title" placeholder="Job title">
                              </div>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="avail">
                                <option>Availability</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 p-1">
                            <select class="form-control personal-info-forms-items " style="font-size:9px !important;" id="rate-month">
                                <option>Asking Rate/Month</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 p-1">
                            <select class="form-control personal-info-forms-items" style="font-size:9px !important;" id="rate-hour">
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
                                <input type="text" class="form-control personal-info-forms-items" id="language" placeholder="Select Language">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items" id="written-proficiency">
                                <option>Written Proficiency</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items" id="oras-proficiency">
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
                                <input type="text" class="form-control personal-info-forms-items" id="jobseeker-company-name" placeholder="Company Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="job-description" placeholder="Job Description">
                              </div>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items "  id="rate-month">
                                <option>From</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items"  id="rate-hour">
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
                            <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
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
                    <div class="row m-auto">
                        <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                            <div class="btn-plus"></div>
                        </div>
                    </div>



                    <div class="row" style="padding-top:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="text-center">ligula, cursus id sagittis eu,
                                volutpat id sapien. Cras scelerisque
                                ullamcorper tellus, sed efficitur odio iaculis a.
                                Pellentesque habitant morbi tristique senectus
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row" style="margin-bottom:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8  d-flex justify-content-center">
                            <a class="btn btn-light mr-2 back-btn" href="/personalInfo">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/jobseekerSkillset">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>

     </div>
</div>

@endsection

