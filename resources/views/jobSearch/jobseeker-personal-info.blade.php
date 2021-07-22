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
                    <div class="shape shape-active">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    personal information
                    <div class="line1"></div>
                </li>
                <li>
                    <div class="shape">
                        <div class="dot "></div>
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
                {{-- personal-info --}}

                <form class="container" action="">
                    <h2 class="title-personal-info">Personal Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="fname" placeholder="First Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="mname" placeholder="Middle Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="lname" placeholder="Last Name">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="b-month">
                                <option>Month</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="b-month">
                                <option>Date</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="b-month">
                                <option>Year</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="nationality" placeholder="Nationality">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="address" placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="Apartment" placeholder="Apartment, Suite, etc.">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="city" placeholder="City">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="state" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="country" placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="zip" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control personal-info-forms-items" id="email" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="mobile" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="phone" placeholder="Phone Number">
                              </div>
                        </div>
                    </div>

                    {{-- education --}}
                    <h2 class="title-personal-info">Education</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="school" placeholder="Name of School">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control personal-info-forms-items" id="grad-year">
                                <option>Year Graduated</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="course" placeholder="Course Graduated">
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
                            <select class="form-control personal-info-forms-items" id="social-media">
                                <option>Social Media / Website</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" id="url-link" placeholder="Enter URL/Link here">
                            </div>
                        </div>
                    </div>
                    <div class="row m-auto">
                        <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                            <div class="btn-plus"></div>
                        </div>
                    </div>


                    {{-- proceed and back buttons --}}
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
                        <div class="col-md-8 d-flex justify-content-center">
                            <a class="btn mr-2 btn-light back-btn" href="/jobterms">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/personalDetails">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>

     </div>
</div>

@endsection

