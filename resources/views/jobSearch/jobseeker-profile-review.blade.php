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
                                <label class="mb-0 label-forms text-capitalize">first name</label>
                                <input type="text" disabled name="personal_firstname" class="form-control personal-info-forms-items"  placeholder="First Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">middle name</label>
                                <input type="text" disabled name="personal_middlename" class="form-control personal-info-forms-items" placeholder="Middle Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">last name</label>
                                <input type="text" disabled name="personal_lastname" class="form-control personal-info-forms-items"  placeholder="Last Name">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  disabled name="personal_date_of_birth"  placeholder="Date of Birth">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">nationality</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_nationality"  placeholder="Nationality">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">address</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_address1"  placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">apartment, suite, etc.</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_address2"  placeholder="Apartment, Suite, etc.">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">city</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_city" placeholder="City">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">state / province</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_state" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">country</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_country"  placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_zip" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">email address</label>
                                <input disabled type="email" class="form-control personal-info-forms-items" disabled name="personal_email" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">mobile number</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_mobile_no" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">phone number</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="personal_phone_no"  placeholder="Phone Number">
                              </div>
                        </div>
                    </div>

                    {{-- education --}}
                    <h2 class="title-personal-info">Education</h2>
                    <hr>
                    <div id="educations_section">

                    </div>

                    {{-- references --}}
                    <h2 class="title-personal-info">references</h2>
                    <hr>
                    <div id="references_section">

                    </div>

                    {{-- Profession --}}

                    <h2 class="title-personal-info">Profession</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">job title</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="profession_job_title" placeholder="Job title">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">availability</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="profession_availability" placeholder="Availability">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">rate</label>
                                <input type="text" class="form-control personal-info-forms-items" disabled name="profession_salary" placeholder="Rate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Write your skill Summary here.."  disabled name="profession_skills_summary" class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">
                            </textarea>
                        </div>
                    </div>


                    {{-- Languages --}}
                    <h2 class="title-personal-info">Languages</h2>
                    <hr>
                    <div id="languages_section">
                    </div>
                    {{-- Job Experiences --}}
                    <h2 class="title-personal-info">Job Experiences</h2>
                    <hr>
                    <div id="experiences_section">
                    </div>
                    <h2 class="title-personal-info">List of Specialized Skills</h2>
                    <hr>
                    {{-- skill-1 --}}
                    <div id="skills_section">
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

<script>
 if(!token) {
    window.location.href = '/signup';
}
$(document).ready(function() {
    getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
        if(res.success) {
            let jobseeker_data = res.data;
            let user = jobseeker_data.user;
            let jobseeker_educations = jobseeker_data.jobseeker_educations;
            let jobseeker_experiences = jobseeker_data.jobseeker_experiences;
            let jobseeker_languages = jobseeker_data.jobseeker_languages;
            let jobseeker_profession = jobseeker_data.jobseeker_profession;
            let jobseeker_references = jobseeker_data.jobseeker_references;
            let jobseeker_specialized_skills = jobseeker_data.jobseeker_specialized_skills;
            Object.keys(jobseeker_data).map((field, key) => {
                let input = $('[name="personal_'+field+'"]');
                if(input.length) {
                    input.val(jobseeker_data[field]);
                }
            });

            Object.keys(user).map((field, key) => {
                let input = $('[name="personal_'+field+'"]');
                if(input.length) {
                    input.val(user[field]);
                }
            });

            Object.keys(jobseeker_profession).map((field, key) => {
                let input = $('[name="profession_'+field+'"]');
                if(input.length) {
                    input.val(jobseeker_profession[field]);
                }
            });

            jobseeker_educations.map((edu, key) => {
                $('#educations_section').append('\
                    <div class="row">\
                        <div class="col-md-5">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">name of school</label>\
                                <input type="text" disabled class="form-control personal-info-forms-items"  value="'+edu.name_of_school+'" placeholder="Name of School">\
                            </div>\
                        </div>\
                        <div class="col-md-3">\
                            <label class="mb-0 label-forms text-capitalize">year graduated</label>\
                            <select class="form-control personal-info-forms-items" disabled >\
                                <option>'+edu.year_graduated+'</option>\
                            </select>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">course graduated</label>\
                                <input type="text" disabled class="form-control personal-info-forms-items" value="'+edu.course_graduated+'" placeholder="Course Graduated">\
                            </div>\
                        </div>\
                    </div>\
                ');
            });

            jobseeker_references.map((reference, key) => {
                $('#references_section').append('\
                    <div class="row">\
                        <div class="col-md-4">\
                            <label class="mb-0 label-forms text-capitalize">social media / website</label>\
                            <select disabled class="form-control personal-info-forms-items" i>\
                                <option>'+reference.website+'</option>\
                            </select>\
                        </div>\
                        <div class="col-md-8">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">URL / Link</label>\
                                <input type="text" disabled class="form-control personal-info-forms-items"  value="'+reference.link+'" placeholder="Enter URL/Link here">\
                            </div>\
                        </div>\
                    </div>\
                ');
            });


            jobseeker_languages.map((language, key) => {
                $('#languages_section').append('\
                    <div class="row">\
                        <div class="col-md-4">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">languange</label>\
                                <input type="text" disabled class="form-control personal-info-forms-items" value="'+language.language+'" placeholder="Select Language">\
                            </div>\
                        </div>\
                        <div class="col-md-4">\
                            <label class="mb-0 label-forms text-capitalize">written proficency</label>\
                            <select disabled class="form-control personal-info-forms-items"  >\
                                <option>'+language.written_proficiency+'</option>\
                            </select>\
                        </div>\
                        <div class="col-md-4">\
                            <label class="mb-0 label-forms text-capitalize">oral proficiency</label>\
                            <select disabled class="form-control personal-info-forms-items"  >\
                                <option>'+language.oral_proficiency+'</option>\
                            </select>\
                        </div>\
                    </div>\
                ');
            });

            jobseeker_experiences.map((experience, key) => {
                $('#experiences_section').append('\
                    <div class="row">\
                        <div class="col-md-4">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">company name</label>\
                                <input disabled type="text" class="form-control personal-info-forms-items" value="'+experience.company_name+'" placeholder="Company Name">\
                              </div>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group">\
                                <label class="mb-0 label-forms text-capitalize">job description</label>\
                                <input disabled type="text" class="form-control personal-info-forms-items" value="'+experience.job_description+'" placeholder="Job Description">\
                              </div>\
                        </div>\
                        <div class="col-md-2">\
                            <label class="mb-0 label-forms text-capitalize">from</label>\
                            <select disabled class="form-control personal-info-forms-items "  >\
                                <option>'+experience.from_date+'</option>\
                              </select>\
                        </div>\
                        <div class="col-md-2">\
                            <label class="mb-0 label-forms text-capitalize">until</label>\
                            <select disabled class="form-control personal-info-forms-items" >\
                                <option>'+experience.to_date+'</option>\
                              </select>\
                        </div>\
                    </div>\
                    <div class="row">\
                        <div class="col-md-12 ">\
                            <textarea disabled placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">'+experience.job_scope+'</textarea>\
                        </div>\
                    </div>\
                ');
            });

            jobseeker_specialized_skills.map((skill, key) => {
                $('#skills_section').append(''+
                    '<div class="row">'+
                        '<div class="col-md-6">'+
                            '<div class="form-group">'+
                                '<div class="form-group">'+
                                    '<label class="mb-0 label-forms text-capitalize">title</label>'+
                                    '<input disabled type="text" class="form-control personal-info-forms-items" value="'+skill.title+'" placeholder="Title">'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-2">'+

                        '</div>'+
                        '<div class="col-md-2 ">'+
                            '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">experience</label>'+
                                '<input disabled type="text" class="form-control personal-info-forms-items" value="'+skill.experience+'" placeholder="Experience">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-2 ">'+
                            '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">proficiency</label>'+
                                '<input disabled type="text" class="form-control personal-info-forms-items" value="'+skill.proficiency+'" placeholder="Proficiency">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row">'+
                        '<div class="col-md-12 ">'+
                            '<textarea placeholder="Write your skill Summary here.."class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">'+skill.description+''+
                            '</textarea>'+
                        '</div>'+
                    '</div>'
                );
            });



        }
    });
});
</script>
@endsection

