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
                    <div class="shape shape-active" >
                        <div class="dot dot-active"></div>
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
                {{-- Profession --}}

                <form class="container" action="#" id="js_skills">
                    <h2 class="title-personal-info">List of Specialized Skills</h2>
                    <hr>
                    {{-- skill-1 --}}
                    <div id="skills_section">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="mb-0 label-forms text-capitalize">title</label>
                                    <input type="text" class="form-control personal-info-forms-items" name="skills[1][title]" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="mb-0 label-forms text-capitalize">experience</label>
                                    <input type="text" class="form-control personal-info-forms-items" name="skills[1][experience]" placeholder="Experience">
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <label class="mb-0 label-forms text-capitalize">proficiency</label>
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
                            <a class="btn btn-light mr-2 back-btn" href="/personalDetails">Back</a>
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
                    window.location.href = '/jobseekerProfileReview';
                }
            });

        });



        $('.btn_add_skill').on('click', function() {
            let rows = $('#skills_section').find('.row').length;
            $('#skills_section').append('\
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
@endsection

