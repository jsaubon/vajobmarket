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
                            <form class="container" action="" id="js_personal_info">
                                <h2 class="title-personal-info">Personal Information</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control personal-info-forms-items"  placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="middlename" class="form-control personal-info-forms-items" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control personal-info-forms-items"  placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control personal-info-forms-items" name="dob_month">
                                            <option>Month</option>
                                            <?php for ($i=1; $i <= 12; $i++) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control personal-info-forms-items" name="dob_date">
                                            <option>Date</option>
                                            <?php for ($i=1; $i <= 31; $i++) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control personal-info-forms-items" name="dob_year">
                                            <option>Year</option>
                                            <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="nationality"  placeholder="Nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="address1"  placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="address2"  placeholder="Apartment, Suite, etc.">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="city" placeholder="City">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="state" placeholder="State / Province">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="country"  placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="zip" placeholder="Zip / Postal">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input disabled type="email" class="form-control personal-info-forms-items" name="email" placeholder="E-mail Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="mobile_no" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items" name="phone_no"  placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>

                                {{-- education --}}
                                <h2 class="title-personal-info">Education</h2>
                                <hr>

                                <div id="educations_section">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control personal-info-forms-items" name="educations[1][name_of_school]" placeholder="Name of School">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control personal-info-forms-items"  name="educations[1][year_graduated]">
                                                <option>Year Graduated</option>
                                                <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control personal-info-forms-items" name="educations[1][course_graduated]" placeholder="Course Graduated">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row m-auto">
                                    <div class="col-md-12 d-flex justify-content-center p-2 btn-container btn_add_education">
                                        <div class="btn-plus " ></div>
                                    </div>
                                </div>
                                <h2 class="title-personal-info">references</h2>
                                <hr>
                                <div id="references_section">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control personal-info-forms-items" name="references[1][website]">
                                                <option value="Social Media / Website">Social Media / Website</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                                <option value="Twitter">Twitter</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control personal-info-forms-items" name="references[1][link]" placeholder="Enter URL/Link here">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-auto">
                                    <div class="col-md-12 d-flex justify-content-center p-2 btn-container btn_add_reference">
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
                                        <button class="btn btn-primary proceed-btn" type="submit">Proceed Next</button>
                                    </div>
                                    <div class="col-md-2"></div>
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
<script>

if(!token) {
        window.location.href = '/signup';
    } 
$(document).ready(function() {
        $('[name="email"]').val(userdata.email);

        getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
            if(res.success) {
                let jobseeker = res.data;
                Object.keys(jobseeker).map((field, key) => {
                    let element = $('.jobseeker-'+field);
                    if(element.length) {
                        element.html(jobseeker[field]);
                        element.val(jobseeker[field]);
                    }
                });  
            }
        });
        $('#js_personal_info').on('submit', function(e) {
            e.preventDefault();

            let data = $(this).serializeControls();
            console.log('data',data)

            let data_user = {
                id: userdata.id,
                firstname: data.firstname,
                middlename: data.middlename,
                lastname: data.lastname,
                mobile_no: data.mobile_no,
                phone_no: data.phone_no,
            };


            let data_educations = {...data.educations};
            data_educations = Object.values(data_educations); 
            let data_references = {...data.references};
            data_references = Object.values(data_references);
            let data_jobseeker = {...data};
            delete data_jobseeker.firstname;
            delete data_jobseeker.middlename;
            delete data_jobseeker.lastname;
            delete data_jobseeker.mobile_no;
            delete data_jobseeker.phone_no;
            delete data_jobseeker.educations;
            delete data_jobseeker.references;
            data_jobseeker = {...data_jobseeker,user_id: userdata.id , date_of_birth: data_jobseeker.dob_year+'-'+data_jobseeker.dob_month+'-'+data_jobseeker.dob_date};
            delete data_jobseeker.dob_year;
            delete data_jobseeker.dob_month;
            delete data_jobseeker.dob_date;
            console.log('data',data)
            updateData('/api/User/'+data_user.id,data_user, ({data:res}) => {
                if(res.success) {
                    createJobSeeker(data_jobseeker, data_educations, data_references);
                }
            });
            
        });

        function createJobSeeker(data_jobseeker, data_educations, data_references) {
            postData('/api/JobSeeker',data_jobseeker, ({data:res}) => {
                if(res.success) {
                    userdata.jobseeker = res.data;
                    localStorage.userdata = JSON.stringify(userdata);
                    
                    let jobseeker_id = res.data.id;
                    data_educations.map((edu, key) => {
                        data_educations[key]['jobseeker_id'] = jobseeker_id;
                    });
                    
                    data_references.map((edu, key) => {
                        data_references[key]['jobseeker_id'] = jobseeker_id;
                    });

                    data_educations = {
                        jobseeker_id: jobseeker_id,
                        educations: data_educations
                    };
                    
                    data_references = {
                        jobseeker_id: jobseeker_id,
                        references: data_references
                    };

                    createJobSeekerEducations(data_educations,data_references);
                }
            });
        }

        function createJobSeekerEducations(data_educations, data_references) {
            postData('/api/JobSeekerEducation',data_educations, ({data:res}) => {
                if(res.success) {
                    createJobSeekerReferences(data_references);
                }
            });
        }

        function createJobSeekerReferences(data_references) {
            postData('/api/JobSeekerReference',data_references, ({data:res}) => {
                if(res.success) {
                    window.location.href = '/personalDetails';

                }
            });
        }


        $('.btn_add_education').on('click', function() {
            let rows = $('#educations_section').find('.row').length;
            $('#educations_section').append('\
                <div class="row">\
                    <div class="col-md-5">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="educations['+(rows+1)+'][name_of_school]" placeholder="Name of School">\
                        </div>\
                    </div>\
                    <div class="col-md-3">\
                        <select class="form-control personal-info-forms-items"  name="educations['+(rows+1)+'][year_graduated]">\
                            <option>Year Graduated</option>\
                            <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>\
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>\
                            <?php }?>\
                        </select>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="educations['+(rows+1)+'][course_graduated]" placeholder="Course Graduated">\
                        </div>\
                    </div>\
                </div>\
            ');
        });

        $('.btn_add_reference').on('click', function() {
            let rows = $('#references_section').find('.row').length;
            $('#references_section').append('\
                <div class="row">\
                    <div class="col-md-4">\
                        <select class="form-control personal-info-forms-items" name="references['+(rows+1)+'][website]">\
                            <option value="Social Media / Website">Social Media / Website</option>\
                            <option value="Facebook">Facebook</option>\
                            <option value="Instagram">Instagram</option>\
                            <option value="LinkedIn">LinkedIn</option>\
                            <option value="Twitter">Twitter</option>\
                        </select>\
                    </div>\
                    <div class="col-md-8">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="references['+(rows+1)+'][link]" placeholder="Enter URL/Link here">\
                        </div>\
                    </div>\
                </div>\
            ');
        });
    })
</script>
@endsection
