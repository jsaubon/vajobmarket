@extends('layouts.app')

@section('content')
<style>
    @media screen and (max-width: 780px) {
        .progress-steps {
            display: none !important;
        }

        .w-75 {
            width: 100% !important;
        }

        .container {
            padding: 10px;
        }
    }
</style>
<div class="container-fluid h-auto personal-info">
    <div class="container h-100" style="padding-top: 100px; padding-bottom:10px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class=" w-75 stepper-container">
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
                 {{-- references --}}
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
                    <div class="row" style="padding-top:30px;font-size:0.6em; font-weight:400;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="text-center title-personal-info">ligula, cursus id sagittis eu,
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

<script>
    if(!token) {
        window.location.href = '/signup';
    }

    $(document).ready(function() {
        $('[name="email"]').val(userdata.email);

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

