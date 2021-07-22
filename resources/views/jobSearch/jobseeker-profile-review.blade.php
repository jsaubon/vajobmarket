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
                    <div class="shape ">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    professional details
                    <div class="line2 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape " >
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    skill sets
                    <div class="line3 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape shape-active">
                        <div class="dot dot-active"></div>
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
                            <select class="form-control personal-info-forms-items" id="b-month-review">
                                <option>Month</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="b-date-review">
                                <option>Date</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" id="b-year-review">
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

                    {{-- Profession --}}

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
                            <select class="form-control personal-info-forms-items " style="font-size:9px !important;" id="rate-month-review">
                                <option>Asking Rate/Month</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 p-1">
                            <select class="form-control personal-info-forms-items" style="font-size:9px !important;" id="rate-hour-review">
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
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                            </textarea>
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
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                            </textarea>
                        </div>
                    </div>
                    <h2 class="title-personal-info">List of Specialized Skills</h2>
                    <hr>
                    {{-- skill-1 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title1">
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
                            <select class="form-control personal-info-forms-items "  id="skill-experience1">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency1">
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
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                            </textarea>
                        </div>
                    </div>

                    {{-- skill-2 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title2">
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
                            <select class="form-control personal-info-forms-items "  id="skill-experience2">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency2">
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
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="5" style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                            </textarea>
                        </div>
                    </div>

                    {{-- skill-3 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title3">
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
                            <select class="form-control personal-info-forms-items "  id="skill-experience3">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency3">
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
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="5" style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                            </textarea>
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
                            <a class="btn mr-2 btn-light back-btn" href="/jobseekerSkillset">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/jobseekerFinalize">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </form>
            </div>
        </div>

     </div>
</div>

@endsection

