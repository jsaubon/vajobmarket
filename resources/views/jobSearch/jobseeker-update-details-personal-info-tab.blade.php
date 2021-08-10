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
                                            <label class="mb-0 label-forms text-capitalize">first name</label>
                                            <input type="text" name="firstname" class="form-control profile-info-forms-items"  placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">middle name</label>
                                            <input type="text" name="middlename" class="form-control profile-info-forms-items" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">last name</label>
                                            <input type="text" name="lastname" class="form-control profile-info-forms-items"  placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="profile-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="mb-0 label-forms text-capitalize">month</label>
                                        <select class="form-control profile-info-forms-items" name="dob_month">
                                            <option>Month</option>
                                            <?php for ($i=1; $i <= 12; $i++) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="mb-0 label-forms text-capitalize">date</label>
                                        <select class="form-control profile-info-forms-items" name="dob_date">
                                            <option>Date</option>
                                            <?php for ($i=1; $i <= 31; $i++) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="mb-0 label-forms text-capitalize">year</label>
                                        <select class="form-control profile-info-forms-items" name="dob_year">
                                            <option>Year</option>
                                            <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">nationality</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="nationality"  placeholder="Nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">address</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="address1"  placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">Apartment, suite, etc</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="address2"  placeholder="Apartment, Suite, etc.">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">city</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="city" placeholder="City">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">state / province</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="state" placeholder="State / Province">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">country</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="country"  placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="zip" placeholder="Zip / Postal">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">email address</label>
                                            <input disabled type="email" class="form-control profile-info-forms-items" name="email" placeholder="E-mail Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">mobile number</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="mobile_no" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">phone number</label>
                                            <input type="text" class="form-control profile-info-forms-items" name="phone_no"  placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>

                                {{-- education --}}
                                <h2 class="title-personal-info">Education</h2>
                                <hr>

                                <div class="educations_container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">name of school</label>
                                                <input type="text" class="form-control personal-info-forms-items" name="educations[1][name_of_school]" placeholder="Name of School">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0 label-forms text-capitalize">year graduated</label>
                                            <select class="form-control personal-info-forms-items"  name="educations[1][year_graduated]">
                                                <option>Year Graduated</option>
                                                <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">course graduated</label>
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
                                <div class="references_container">
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
                                        <!-- <a class="btn mr-2 btn-light back-btn" href="/jobterms">Back</a> -->
                                        <button class="btn btn-primary proceed-btn" type="submit">Update</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<script>


$(document).ready(function() {
        $('[name="email"]').val(userdata.email);

        // getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
        //     if(res.success) {
        //         let jobseeker = res.data;
        //         Object.keys(jobseeker).map((field, key) => {
        //             let element = $('.jobseeker-'+field);
        //             if(element.length) {
        //                 element.html(jobseeker[field]);
        //                 element.val(jobseeker[field]);
        //             }
        //         });  
        //     }
        // });
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
            // console.log('data_user',data_user);
            // console.log('data_jobseeker',data_jobseeker);
            // console.log('data_educations',data_educations);
            // console.log('data_references',data_references);



            updateData('/api/User/'+data_user.id,data_user, ({data:res}) => {
                if(res.success) {
                    createJobSeeker(data_jobseeker, data_educations, data_references);
                }
            });
            
        });

        function createJobSeeker(data_jobseeker, data_educations, data_references) {
            postData('/api/JobSeeker',data_jobseeker, ({data:res}) => {
                if(res.success) {
                    // userdata.jobseeker = res.data;
                    // localStorage.userdata = JSON.stringify(userdata);
                    
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
            console.log('data_educations',data_educations)
            postData('/api/JobSeekerEducation',data_educations, ({data:res}) => {
                if(res.success) {
                    createJobSeekerReferences(data_references);
                }
            });
        }

        function createJobSeekerReferences(data_references) {
            postData('/api/JobSeekerReference',data_references, ({data:res}) => {
                if(res.success) {
                    // window.location.href = '/personalDetails';
                    alert('Personal Information Successfully Saved');
                    location.reload();
                }
            });
        }


        $('body').on('click','.btn_add_education', function() {
            let rows = $('.educations_container').find('.row').length;
            $('.educations_container').append('\
                <div class="row">\
                    <div class="col-md-5">\
                        <div class="form-group">\
                            <label class="mb-0 label-forms text-capitalize">name of school</label>\
                            <input type="text" class="form-control personal-info-forms-items" name="educations['+(rows+1)+'][name_of_school]" placeholder="Name of School">\
                        </div>\
                    </div>\
                    <div class="col-md-3">\
                        <label class="mb-0 label-forms text-capitalize">year graduated</label>\
                        <select class="form-control personal-info-forms-items"  name="educations['+(rows+1)+'][year_graduated]">\
                            <option>Year Graduated</option>\
                            <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>\
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>\
                            <?php }?>\
                        </select>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group">\
                            <label class="mb-0 label-forms text-capitalize">course graduated</label>\
                            <input type="text" class="form-control personal-info-forms-items" name="educations['+(rows+1)+'][course_graduated]" placeholder="Course Graduated">\
                        </div>\
                    </div>\
                </div>\
            ');
        });

        $('body').on('click','.btn_add_reference', function() {
            let rows = $('.references_container').find('.row').length;
            $('.references_container').append('\
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