<div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
    <div class="container h-auto ">
        <div class="card h-auto p-4 shadow">
        <form class="container" action="#" id="js_skills">
                <h2 class="title-personal-info">List of Specialized Skills</h2>
                <hr>
                {{-- skill-1 --}}
                <div class="skills_container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control profile-info-forms-items" name="skills[1][title]" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control profile-info-forms-items" name="skills[1][experience]" placeholder="Experience">
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  name="skills[1][proficiency]">
                                <option>Proficiency</option>
                                <option>Beginner</option>
                                <option>Advanced</option>
                                <option>Expert</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" name="skills[1][description]" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                        </div>
                    </div>
                </div>

                <br>
                {{-- button --}}
                <div class="row m-auto">
                    <div class="col-md-12 d-flex justify-content-center p-2 btn-container btn_add_skill">
                        <div class="btn-plus"></div>
                    </div>
                </div>


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
                        <button class="btn btn-primary proceed-btn" type="submit">Update</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>    

        </div>
    </div>
</div>                
    

<script>
    $(document).ready(function() {
        $('[name="email"]').val(userdata.email);

        $('#js_skills').on('submit', function(e) {
            e.preventDefault();

            let data = $(this).serializeControls();


            let data_skills = {...data.skills};
            data_skills = Object.values(data_skills);


            let jobseeker_id = userdata.jobseeker.id;
            data_skills.map((edu, key) => {
                data_skills[key]['jobseeker_id'] = jobseeker_id;
            });

            data_skills = {
                jobseeker_id: jobseeker_id,
                skills: data_skills
            };

            console.log(data_skills)

            postData('/api/JobSeekerSpecializedSkill',data_skills, ({data:res}) => {
                if(res.success) {
                    // window.location.href = '/jobseekerProfileReview';
                    alert('Specialized Skills Successfully Saved');
                    location.reload();
                }
            });

        });



        $('body').on('click','.btn_add_skill', function() {
            let rows = $('.skills_container').find('.row').length;
            $('.skills_container').append('\
                <div class="row">\
                    <div class="col-md-8">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="skills['+(rows+1)+'][title]" placeholder="Title">\
                        </div>\
                    </div>\
                    <div class="col-md-2">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="skills['+(rows+1)+'][experience]" placeholder="Experience">\
                        </div>\
                    </div>\
                    <div class="col-md-2 ">\
                        <select class="form-control personal-info-forms-items"  name="skills['+(rows+1)+'][proficiency]">\
                            <option>Proficiency</option>\
                            <option>Beginner</option>\
                            <option>Advanced</option>\
                            <option>Expert</option>\
                        </select>\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="col-md-12 ">\
                        <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" name="skills['+(rows+1)+'][description]" rows="2" style=" resize: none; min-height:50px !important;"></textarea>\
                    </div>\
                </div>\
            ');
        });


    });
</script>