@extends('layouts.js-profile-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-md-12 text-center">Job Status</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center jobseeker-job_status h2">NONE</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Jobs Taken</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center jobseeker-jobs_taken h2">20</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Profile Rating</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">N/A</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item m-0" role="presentation">
                <a class="nav-link title-personal-info mt-0  active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#js-candidate-detail" role="tab" aria-controls="home" aria-selected="true">
                    candidate detail
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info mt-0 active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#js-skillset" role="tab" aria-controls="profile" aria-selected="false">
                    skill sets
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info mt-0 active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#js-comments" role="tab" aria-controls="profile" aria-selected="false">
                    comments
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="js-candidate-detail" role="tabpanel" aria-labelledby="home-tab">
                <div class="container ">
                    <div class="row my-3 btn-edit hide" >
                        <div class="col-md-12 d-flex justify-content-end">
                            <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="/jobseekerUpdateDetails">Edit</a>
                        </div>
                    </div>
                    <div class="card p-4 shadow">
                        <div class="container">
                            {{-- personal-info --}}

                            <form class="container" action="">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <textarea class="jobseeker-textarea jobseeker_profession-skills_summary textarea-review p-2 w-100" rows="6" style=" resize: none; background-color:white !important;" wrap="hard">-
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">first name</label>
                                            <input type="text"  class="form-control profile-info-forms-items user-firstname"  placeholder="First Name">
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">last name</label>
                                            <input type="text"  class="form-control profile-info-forms-items user-lastname"  placeholder="Last Name">
                                          </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="mb-0 label-forms text-capitalize">gender</label>
                                        <select class="form-control profile-info-forms-items" >
                                            <option class="jobseeker-gender">Gender</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">nationality</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-nationality"  placeholder="Nationality">
                                          </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">address</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-address1" id="address" placeholder="Address">
                                          </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">city</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-city" id="city" placeholder="City">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">state / province</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-state" id="state" placeholder="State / Province">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">country</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-country" id="country" placeholder="Country">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                            <input type="text" class="form-control profile-info-forms-items jobseeker-zip" id="zip" placeholder="Zip / Postal">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mb-0 label-forms text-capitalize">availability</label>
                                                    <input type="text" class="form-control profile-info-forms-items jobseeker_profession-availability" id="state" placeholder="Availability">
                                                  </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="mb-0 label-forms text-capitalize">asking rate</label>
                                                    <input type="text" class="form-control profile-info-forms-items jobseeker_profession-salary" id="country" placeholder="Asking Rate">
                                                  </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control profile-info-forms-items jobseeker_profession-availability" id="zip" placeholder="Asking Rate / Hr">
                                                  </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                                <hr>

                                {{-- education --}}
                                <h2 class="title-personal-info">Education</h2>
                                <hr>
                                <div class="educations_container">
                                    <!-- <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  placeholder="Name of School">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control profile-info-forms-items"  placeholder="Year Graduated">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="course" placeholder="Course Graduated">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                {{-- references --}}
                                <h2 class="title-personal-info">references</h2>
                                <hr>
                                <div class="references_container">
                                    <!-- <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="url-link" placeholder="Enter URL/Link here">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="url-link" placeholder="Enter URL/Link here">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                
                                {{-- language --}}
                                <h2 class="title-personal-info">Languages</h2>
                                <hr>
                                <div class="languages_container">
                                    <!-- <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="language" placeholder="Select Language">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="language" placeholder="Writted Proficiency">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items" id="language" placeholder="Oral Proficiency">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                

                                {{-- Job Experiences --}}
                                <h2 class="title-personal-info">Job Experiences</h2>
                                <hr>
                                <div class="experiences_container">
                                    <!-- <div class="row">
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
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control profile-info-forms-items"  id="rate-hour">
                                                <option>Until</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <textarea style ="background-color:white !important;" class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                            </textarea>
                                        </div>
                                    </div> -->
                                </div>
                                

                                {{--  buttons --}}
                                {{-- <div class="row" style="margin:70px auto 70px auto;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 d-flex justify-content-center">
                                        <a class="btn mr-2 btn-light back-btn" href="#">discard</a>
                                        <button class="btn btn-primary proceed-btn">save changes</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="js-skillset" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow">
                        <h2 class="title-personal-info">List of Specialized Skills</h2>
                        <hr>
                        {{-- skill-1 --}}
                        <div class="specialized_skills_container">
                            <!-- <div class="row">
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
                                    <textarea style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                    </textarea>
                                </div>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="js-comments" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container pb-4">
                        <div class="row">
                            <div class="col-md-12">
                                Showing <span class="comments-per_page"></span> comments out of <span class="comments-total"></span>
                            </div>
                        </div>
                    </div>
                    <div class="container h-auto" style="gap:10px;">
                        {{-- comments --}}
                        <div class="row comments_container">
                        </div>
                        {{-- comments end--}}
                    </div>
                    <div class="container">
                        <hr>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination comments-pagination justify-content-center">
                            </ul>
                        </nav>
                    </div>
            </div>
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
        if(userdata.jobseeker) {
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
                    $('.jobseeker_profession-jobseeker_photo').attr('src',jobseeker_data.jobseeker_photo);
                }


                Object.keys(jobseeker_data).map((field, key) => {
                    let element = $('.jobseeker-'+field);
                    if(element.length) {
                        element.html(jobseeker_data[field]);
                        element.val(jobseeker_data[field]);
                    }
                });  
                Object.keys(user).map((field, key) => {
                    let element = $('.user-'+field);
                    if(element.length) {
                        element.html(user[field]);
                        element.val(user[field]);
                    }
                });
                
                Object.keys(jobseeker_profession).map((field, key) => {
                    let element = $('.jobseeker_profession-'+field);
                    if(element.length) {
                        element.html(jobseeker_profession[field]);
                        element.val(jobseeker_profession[field]);
                    }
                });

                let educations = jobseeker_data.jobseeker_educations;
                educations.map((education, key) => {
                    $('.educations_container').append(
                        '<div class="row">'+
                            '<div class="col-md-5">'+
                                '<div class="form-group">'+
                                    ' <label class="mb-0 label-forms text-capitalize">name of school</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+education.name_of_school+'" placeholder="Name of School">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                                ' <label class="mb-0 label-forms text-capitalize">year graduated</label>'+
                                '<input type="text" class="form-control profile-info-forms-items"  value="'+education.year_graduated+'" placeholder="Year Graduated">'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">course graduated</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+education.course_graduated+'" placeholder="Course Graduated">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                
                let references = jobseeker_data.jobseeker_references;
                references.map((reference, key) => {
                    $('.references_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                    ' <label class="mb-0 label-forms text-capitalize">social media / website</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+reference.website+'" placeholder="Website">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-8">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">Url / Link</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+reference.link+'" placeholder="Enter URL/Link here">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                let languages = jobseeker_data.jobseeker_languages;
                languages.map((language, key) => {
                    $('.languages_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">language</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+language.language+'" placeholder="Type Language">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">written proficiency</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+language.written_proficiency+'" placeholder="Written Proficiency">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">oral proficiency</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+language.oral_proficiency+'" placeholder="Oral Proficiency">'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                
                let experiences = jobseeker_data.jobseeker_experiences;
                experiences.map((experience, key) => {
                    $('.experiences_container').append(
                        '<div class="row">'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">company name</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+experience.company_name+'" id="jobseeker-company-name" placeholder="Company Name">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">job description</label>'+
                                    '<input type="text" class="form-control profile-info-forms-items" value="'+experience.job_description+'" id="job-description" placeholder="Job Description">'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-2">'+
                                ' <label class="mb-0 label-forms text-capitalize">from</label>'+
                                '<select class="form-control profile-info-forms-items "  >'+
                                    '<option>'+experience.from_date+'</option>'+
                                '</select>'+
                            '</div>'+
                            '<div class="col-md-2">'+
                            ' <label class="mb-0 label-forms text-capitalize">until</label>'+
                                '<select class="form-control profile-info-forms-items" value="'+experience.company_name+'"  >'+
                                    '<option>'+experience.to_date+'</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-12 ">'+
                                '<textarea style ="background-color:white !important;" class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">'+experience.job_scope+''+
                                '</textarea>'+
                            '</div>'+
                        '</div>'
                    );
                });


                let specialized_skills = jobseeker_data.jobseeker_specialized_skills;
                specialized_skills.map((specialized_skill, key) => {
                    $('.specialized_skills_container').append(
                        '<div class="row">'+
                            '<div class="col-md-6">'+
                                '<div class="form-group">'+
                                ' <label class="mb-0 label-forms text-capitalize">title</label>'+
                                    '<select class="form-control profile-info-forms-items" id="skill-title1">'+
                                        '<option>'+specialized_skill.title+'</option>'+
                                    '</select>'+
                                '</div>'+
                            '</div>'+
                            '<div class="col-md-2">'+

                            '</div>'+
                            '<div class="col-md-2 ">'+
                            ' <label class="mb-0 label-forms text-capitalize">experience</label>'+
                                '<select class="form-control profile-info-forms-items "  id="skill-experience1">'+
                                    '<option>'+specialized_skill.experience+'</option>'+
                                '</select>'+
                            '</div>'+
                            '<div class="col-md-2 ">'+
                            ' <label class="mb-0 label-forms text-capitalize">proficiency</label>'+
                                '<select class="form-control profile-info-forms-items"  id="skill-proficiency1">'+
                                    '<option>'+specialized_skill.proficiency+'</option>'+
                                '</select>'+
                            '</div>'+

                        '</div>'+
                        '<div class="row">'+
                            '<div class="col-md-12 ">'+
                                '<textarea style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">'+specialized_skill.description+''+
                                '</textarea>'+
                            '</div>'+
                        '</div>'
                    );
                });

                
                let comments_per_page = 1;
                comments = paginate(jobseeker_data.user.comments, comments_per_page);
                console.log('jobseeker_data.comments',jobseeker_data.user.comments);
                $('.comments-total').html(jobseeker_data.user.comments.length);
                populateComments(0);
            }


            $('input').attr('disabled', true);
            $('select').attr('disabled', true);
            $('textarea').attr('disabled', true);
        });

        function populateComments(page_number) {
            $('.comments_container').empty();
            comments_current_page = page_number;
            if(comments[comments_current_page]) {
                console.log('comments',comments[comments_current_page]);
                $('.comments-per_page').html(comments[comments_current_page].length);
                alert();
                // console.log('comments[comments_current_page]',comments[comments_current_page]);

                
                comments[comments_current_page].map((comment, key) => {
                    console.log('comment',comment);
                    let client = comment.created_by.client; //client_photo
                    console.log('client',client);
                    let name = comment.created_by.client.client_business_info.business_name;
                    let image = comment.created_by.client.client_business_info.business_logo ? comment.created_by.client.client_business_info.business_logo : 'https://thumbs.dreamstime.com/z/realty-flat-apartment-modern-building-logo-design-graphic-style-realty-flat-apartment-modern-building-logo-design-graphic-style-158041756.jpg';
                    
                    $('.comments_container').append(
                        '<div class="col-md-4 my-2 shadow" style="border-radius: 10px;" >'+
                            '<div class="card-body">'+
                                '<h5 class="card-title d-flex" style="font-size:15px;">'+
                                '<div class="profile-pic shadow my-auto" style="height:50px; width:50px;">'+
                                    '<img src="'+image+'" style="height:50px;" alt="" />'+
                                '</div>'+
                                '<div class="my-auto pl-2">'+
                                    '<h3 style="font-size:15px; margin:0;">'+name+'</h3>'+
                                    '<p style="font-size: 10px; margin:0;">'+
                                        ''+client.client_business_info.type_of_business+''+
                                    '</p>'+
                                '</div>'+
                                '</h5>'+

                                '<hr class="lsep">'+
                                '<p class="card-text" style="font-size:10px;">'+
                                ''+comment.content+''+
                                '</p>'+
                                '<div class="row pb-4">'+
                                    '<div class="col-md-12 text-center">'+
                                    '<a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                });
                populateCommentsPagination();
            }
            
            

        }

        function populateCommentsPagination() {
            $('.comments-pagination').empty();
            let prev_disabled = comments_current_page == 0 ? 'disabled' : '';
            let next_disabled = comments_current_page == comments.length -1 ? 'disabled' : '';
            $('.comments-pagination').append(
                '<li class="page-item '+prev_disabled+'">'+
                    '<a class="page-link comments-prev_page" href="#" tabindex="-1" aria-disabled="true">Previous</a>'+
                '</li>'
            );
            for (let index = 0; index < comments.length; index++) {
                let active = (index == comments_current_page ? 'active' : '');
                $('.comments-pagination').append(
                    '<li class="page-item '+active+'"><a class="page-link comments-page" href="#">'+(index + 1)+'</a></li>'
                );
                
            }
            $('.comments-pagination').append(
                '<li class="page-item '+next_disabled+'">'+
                    '<a class="page-link comments-next_page" href="#">Next</a>'+
                '</li>'
            );
        }


        $('body').on('click', '.comments-page', function(e) {
            e.preventDefault();

            let page = $(this).html();
            page = page -1;
            populateComments(page);
        });

        $('body').on('click', '.comments-prev_page', function(e) {
            e.preventDefault();
            populateComments(comments_current_page -1);
        });
        
        $('body').on('click', '.comments-next_page', function(e) {
            e.preventDefault();
            populateComments(comments_current_page +1);
        });
    }

});
</script>
@endsection
