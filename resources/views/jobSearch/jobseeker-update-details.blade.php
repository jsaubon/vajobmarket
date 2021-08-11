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
            @include('jobSearch.jobseeker-update-details-personal-info-tab')
            {{-- second --}}
            @include('jobSearch.jobseeker-update-details-profession-tab')
            {{-- third --}}
            @include('jobSearch.jobseeker-update-details-skills-tab')
        </div>
    </div>


<script>
let comments;
let comments_current_page = 0;

$(document).ready(function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let jobseeker_id = urlParams.get('jobseeker_id');
    if(!jobseeker_id) {
        if(token) {
            jobseeker_id = userdata.jobseeker.id;
        } else {
            window.location.href = '/';
        }
    }

    if(token) {
        if(userdata.jobseeker.id == jobseeker_id) {
            $('.btn-edit').removeClass('hide');
        }
    }
    if(jobseeker_id) {
        getData('/api/PublicJobSeeker/'+jobseeker_id, ({data:res}) => {
            if(res.success) {
                console.log(res);
                let jobseeker_data = res.data;
                let user = jobseeker_data.user;
                let jobseeker_profession = jobseeker_data.jobseeker_profession;
                console.log('jobseeker_profession',jobseeker_profession)
                let client_employees = jobseeker_data.client_employees;


                $('.jobseeker-fullname').html(user.firstname+' '+user.lastname);
                $('.jobseeker-jobs_taken').html(client_employees.filter(p => p.status == 'Hired').length);
                $('.jobseeker-job_status').html(client_employees.filter(p => p.status == 'Hired').length > 0 ? 'Employed' : 'None');


                if(jobseeker_data.jobseeker_photo) {
                    $('.jobseeker-jobseeker_photo').attr('src',jobseeker_data.jobseeker_photo);
                    $('.logo-container').find('img').removeClass('hide');
                    $('.logo-container').find('img').attr('src','/storage/'+jobseeker_data.jobseeker_photo);
                }


                Object.keys(jobseeker_data).map((field, key) => {
                    let element = $('[name="'+field+'"]');
                    if(element.length) {
                        element.html(jobseeker_data[field]);
                        element.val(jobseeker_data[field]);
                    }
                });  
                Object.keys(user).map((field, key) => {
                    let element = $('[name="'+field+'"]');
                    if(element.length) {
                        element.html(user[field]);
                        element.val(user[field]);
                    }
                });
                
                Object.keys(jobseeker_profession).map((field, key) => {
                    let element = $('[name="'+field+'"]');
                    if(element.length) {
                        element.html(jobseeker_profession[field]);
                        element.val(jobseeker_profession[field]);
                    }

                    element = $('.jobseeker_profession-'+field);
                    if(element.length) {
                        element.html(jobseeker_profession[field]);
                    }
                });

                let educations = jobseeker_data.jobseeker_educations;
                $('.educations_container').empty();
                educations.map((education, key) => {
                    $('.educations_container').append(
                        '<div class="row">'+
                            '<div class="col-md-5">'+
                                '<div class="form-group">'+
                                    '  <label class="mb-0 label-forms text-capitalize">name of school</label>'+
                                    '<input type="hidden" class="form-control profile-info-forms-items" name="educations['+(key+1)+'][id]" value="'+education.id+'">'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="educations['+(key+1)+'][name_of_school]" value="'+education.name_of_school+'" placeholder="Name of School">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                                '  <label class="mb-0 label-forms text-capitalize">year graduated</label>'+
                                '<input type="text" class="form-control profile-info-forms-items" name="educations['+(key+1)+'][year_graduated]" value="'+education.year_graduated+'" placeholder="Year Graduated">'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '  <label class="mb-0 label-forms text-capitalize">course graduated</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="educations['+(key+1)+'][course_graduated]"  value="'+education.course_graduated+'" placeholder="Course Graduated">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                
                let references = jobseeker_data.jobseeker_references;
                $('.references_container').empty();
                references.map((reference, key) => {
                    $('.references_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '  <label class="mb-0 label-forms text-capitalize">social media / website</label>'+
                                    '<input type="hidden" class="form-control profile-info-forms-items" name="references['+(key+1)+'][id]" value="'+reference.id+'" >'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="references['+(key+1)+'][website]" value="'+reference.website+'" placeholder="Website">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-8">'+
                                '<div class="form-group">'+
                                '  <label class="mb-0 label-forms text-capitalize">Url / Link here</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="references['+(key+1)+'][link]" value="'+reference.link+'" placeholder="Enter URL/Link here">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                let languages = jobseeker_data.jobseeker_languages;
                $('.languages_container').empty();
                languages.map((language, key) => {
                    $('.languages_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    '  <label class="mb-0 label-forms text-capitalize">language</label>'+
                                    '<input type="hidden" name="languages['+(key+1)+'][id]" value="'+language.id+'">'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="languages['+(key+1)+'][language]" value="'+language.language+'" placeholder="Type Language">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    
                                    '  <label class="mb-0 label-forms text-capitalize">written proficiency</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="languages['+(key+1)+'][written_proficiency]" value="'+language.written_proficiency+'" placeholder="Writted Proficiency">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                '<label class="mb-0 label-forms text-capitalize">oral proficiency</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="languages['+(key+1)+'][oral_proficiency]" value="'+language.oral_proficiency+'" placeholder="Oral Proficiency">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                let experiences = jobseeker_data.jobseeker_experiences;
                $('.experiences_container').empty();
                experiences.map((experience, key) => {
                    $('.experiences_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                '<label class="mb-0 label-forms text-capitalize">company name</label>'+
                                    '<input type="hidden" name="experiences['+(key+1)+'][id]" value="'+experience.id+'">'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="experiences['+(key+1)+'][company_name]" value="'+experience.company_name+'" placeholder="Company Name">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                '<label class="mb-0 label-forms text-capitalize">job description</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" name="experiences['+(key+1)+'][job_description]" value="'+experience.job_description+'" placeholder="Job Description">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-2">'+
                                '<label class="mb-0 label-forms text-capitalize">from</label>'+
                                '<input type="date" class="form-control profile-info-forms-items" name="experiences['+(key+1)+'][from_date]" value="'+experience.from_date+'" placeholder="From Date">'+
                            '</div>'+
                            '<div class="col-md-2">'+
                            '<label class="mb-0 label-forms text-capitalize">until</label>'+
                                '<input type="date" class="form-control profile-info-forms-items" name="experiences['+(key+1)+'][to_date]" value="'+experience.to_date+'" placeholder="To Date">'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-12 ">'+
                                '<textarea name="experiences['+(key+1)+'][job_scope]" style="background-color:white !important;" class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">'+experience.job_scope+''+
                                '</textarea>'+
                            '</div>'+
                        '</div>'
                    );
                });


                let specialized_skills = jobseeker_data.jobseeker_specialized_skills;
                $('.skills_container').empty();
                specialized_skills.map((specialized_skill, key) => {
                    $('.skills_container').append(
                        '<div class="row">'+
                            '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                '<label class="mb-0 label-forms text-capitalize">title</label>'+
                                    '<input type="hidden"  value="'+specialized_skill.id+'" name="skills['+(key+1)+'][id]">'+
                                    '<input type="text" class="form-control personal-info-forms-items" value="'+specialized_skill.title+'" name="skills['+(key+1)+'][title]" placeholder="Title">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-2">'+

                            '</div>'+
                            '<div class="col-md-2 ">'+
                            '<label class="mb-0 label-forms text-capitalize">experience</label>'+
                                '<input type="text" class="form-control personal-info-forms-items" value="'+specialized_skill.experience+'" name="skills['+(key+1)+'][experience]" placeholder="Experience">'+
                            '</div>'+
                            '<div class="col-md-2 ">'+
                            '<label class="mb-0 label-forms text-capitalize">proficiency</label>'+
                                '<select class="form-control profile-info-forms-items" name="skills['+(key+1)+'][proficiency]">'+
                                    '<option value="" >Proficiency</option>'+
                                    '<option value="Beginner" '+(specialized_skill.proficiency == 'Beginner' ? 'selected' : '')+'>Beginner</option>'+
                                    '<option value="Advanced" '+(specialized_skill.proficiency == 'Advanced' ? 'selected' : '')+'>Advanced</option>'+
                                    '<option value="Expert" '+(specialized_skill.proficiency == 'Expert' ? 'selected' : '')+'>Expert</option>'+
                                '</select>'+
                            '</div>'+

                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-12 ">'+
                                '<textarea name="skills['+(key+1)+'][description]"  style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">'+specialized_skill.description+''+
                                '</textarea>'+
                            '</div>'+
                        '</div>'
                    );
                });

                
                // let comments_per_page = 1;
                // comments = paginate(jobseeker_data.user.comments, comments_per_page);
                // console.log('jobseeker_data.comments',jobseeker_data.user.comments);
                // $('.comments-total').html(jobseeker_data.user.comments.length);
                // populateComments(0);
            }


            // $('input').attr('disabled', true);
            // $('select').attr('disabled', true);
            // $('textarea').attr('disabled', true);
        });

    }

});
</script>

@endsection
