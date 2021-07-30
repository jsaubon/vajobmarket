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


                <form class="container" action="#" id="js_personal_detail">
                    <h2 class="title-personal-info">Profession</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="job_title" placeholder="Job title">
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="availability" placeholder="Availability">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="salary" placeholder="Asking Rate/Hr or Rate/Month">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea p-2 w-100" name="skills_summary" rows="8" style=" resize: none;"></textarea>
                        </div>
                    </div>

                    {{-- Languages --}}
                    <h2 class="title-personal-info">Languages</h2>
                    <hr>
                    <div id="languages_section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control personal-info-forms-items" name="languages[1][language]" placeholder="Language">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control personal-info-forms-items" name="languages[1][written_proficiency]">
                                    <option>Written Proficiency</option>
                                    <option>Beginner</option>
                                    <option>Advanced</option>
                                    <option>Expert</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control personal-info-forms-items" name="languages[1][oral_proficiency]">
                                    <option>Oral Proficiency</option>
                                    <option>Beginner</option>
                                    <option>Advanced</option>
                                    <option>Expert</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row m-auto">
                        <div class="col-md-12 d-flex justify-content-center p-2 btn-container btn_add_language">
                            <div class="btn-plus"></div>
                        </div>
                    </div>
                    {{-- Job Experiences --}}
                    <h2 class="title-personal-info">Job Experiences</h2>
                    <hr>
                    <div id="experiences_section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control personal-info-forms-items" name="experiences[1][company_name]" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control personal-info-forms-items" name="experiences[1][job_description]" placeholder="Job Description">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="date" class="form-control personal-info-forms-items" name="experiences[1][from_date]" placeholder="From Date">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="date" class="form-control personal-info-forms-items" name="experiences[1][to_date]" placeholder="To Date">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                                    <input type="checkbox" class="form-check-input p-2" name="exampleCheck1">
                                    <label class="form-check-label p-1" for="exampleCheck1">I currently work here</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea placeholder="Write job scope here.."class="jobseeker-textarea p-2 w-100" name="experiences[1][job_scope]" rows="5" style=" resize: none;"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row m-auto">
                        <div class="col-md-12 d-flex justify-content-center p-2 btn-container btn_add_experience" >
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
                        <div class="col-md-8  d-flex justify-content-center">
                            <a class="btn btn-light mr-2 back-btn" href="/personalInfo">Back</a>
                            <button class="btn btn-primary proceed-btn"  type="submit">Proceed Next</button>
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

        $('#js_personal_detail').on('submit', function(e) {
            e.preventDefault();

            let data = $(this).serializeControls();
            console.log('data',data)

            let data_profession = {
                ...data, jobseeker_id: userdata.jobseeker.id
            };




            let data_languages = {...data.languages};
            data_languages = Object.values(data_languages);
            let data_experiences = {...data.experiences};
            data_experiences = Object.values(data_experiences);


            let jobseeker_id = userdata.jobseeker.id;
            data_languages.map((edu, key) => {
                data_languages[key]['jobseeker_id'] = jobseeker_id;
            });

            data_experiences.map((edu, key) => {
                data_experiences[key]['jobseeker_id'] = jobseeker_id;
            });

            data_languages = {
                jobseeker_id: jobseeker_id,
                languages: data_languages
            };

            data_experiences = {
                jobseeker_id: jobseeker_id,
                experiences: data_experiences
            };

            delete data_profession.languages;
            delete data_profession.experiences;

            console.log(data_profession);
            console.log(data_languages);
            console.log(data_experiences);

            postData('/api/JobSeekerProfession',data_profession, ({data:res}) => {
                if(res.success) {
                    createJobSeekerLanguages(data_languages, data_experiences);
                }
            });

        });

        function createJobSeekerLanguages(data_languages, data_experiences) {
            postData('/api/JobSeekerLanguage',data_languages, ({data:res}) => {
                if(res.success) {
                    createJobSeekerExperiences(data_experiences);
                }
            });
        }

        function createJobSeekerExperiences(data_experiences) {
            postData('/api/JobSeekerExperience',data_experiences, ({data:res}) => {
                if(res.success) {
                    window.location.href = '/jobseekerSkillset';
                }
            });
        }




        $('.btn_add_language').on('click', function() {
            let rows = $('#languages_section').find('.row').length;
            $('#languages_section').append('\
                <div class="row">\
                    <div class="col-md-4">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="languages['+(rows+1)+'][language]" placeholder="Select Language">\
                        </div>\
                    </div>\
                    <div class="col-md-4">\
                        <select class="form-control personal-info-forms-items" name="languages['+(rows+1)+'][written_proficiency]">\
                            <option>Written Proficiency</option>\
                            <option>Beginner</option>\
                            <option>Advanced</option>\
                            <option>Expert</option>\
                        </select>\
                    </div>\
                    <div class="col-md-4">\
                        <select class="form-control personal-info-forms-items" name="languages['+(rows+1)+'][oral_proficiency]">\
                            <option>Oral Proficiency</option>\
                            <option>Beginner</option>\
                            <option>Advanced</option>\
                            <option>Expert</option>\
                        </select>\
                    </div>\
                </div>\
            ');
        });


        $('.btn_add_experience').on('click', function() {
            let rows = $('#experiences_section').find('.row').length;
            $('#experiences_section').append('\
                <div class="row">\
                    <div class="col-md-4">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="experiences['+(rows+1)+'][company_name]" placeholder="Company Name">\
                        </div>\
                    </div>\
                    <div class="col-md-4">\
                        <div class="form-group">\
                            <input type="text" class="form-control personal-info-forms-items" name="experiences['+(rows+1)+'][job_description]" placeholder="Job Description">\
                        </div>\
                    </div>\
                    <div class="col-md-2">\
                        <div class="form-group">\
                            <input type="date" class="form-control personal-info-forms-items" name="experiences['+(rows+1)+'][from_date]" placeholder="From Date">\
                        </div>\
                    </div>\
                    <div class="col-md-2">\
                        <div class="form-group">\
                            <input type="date" class="form-control personal-info-forms-items" name="experiences['+(rows+1)+'][to_date]" placeholder="To Date">\
                        </div>\
                    </div>\
                </div>\
                <div class="row">\
                    <div class="col-md-12 ">\
                        <textarea placeholder="Write job scope here.."class="jobseeker-textarea p-2 w-100" name="experiences['+(rows+1)+'][job_scope]" rows="5" style=" resize: none;"></textarea>\
                    </div>\
                </div>\
            ');
        });
    });

</script>


@endsection

