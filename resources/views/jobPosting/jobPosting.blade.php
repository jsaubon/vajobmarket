@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/jobPost.css')}}" rel="stylesheet">
<section class="jobPostSection">
    <div class="container">
        <br/> <br/>
        <div class="d-flex justify-content-between">
        <a href="/dashboard">Back</a>
        <span>
            <p>Monthly Job Posting Limit: <b>1/10</b></p>
        </span>
        </div>
        <div class="card p-4 shadow" style="border-radius: 20px;">
            <div class="card-title">
                <h4>JOB DETAILS</h4>
                <hr/>
            </div>
            <form id="form-job-post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <input type="text" required class="form-control " name="job_title" placeholder="Job Title" />
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="sector">
                                <option value="">Sector</option>
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="job_type" placeholder="Job Type" />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="monthly_rate" placeholder="Monthly Rate" />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="hourly_rate" placeholder="Hourly Rate" />
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="date" required class="form-control" name="start_date" placeholder="start date" />
                        </div>
                        <div class="col-sm-4">
                            <input type="date" required class="form-control" name="end_date" placeholder="end date" />
                        </div>
                    </div>
                    <br/>
                </div>
                <div class="card-title">
                    <h4>REQUIRED SKILLS</h4>
                    <hr/>
                </div>
                <div class="card-body">
                    <div id="skills_container">
                        <div class="row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="skills[1][skill]" placeholder="Skills" />
                            </div>
                            <div class="col-sm-4">
                                <select  class="form-control" name="skills[1][proficiency]">
                                    <option value="">Proficiency</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Advanced">Advanced</option>
                                    <option value="Expert">Expert</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <button class="btn btn-secondary btn-add-skill form-control" type="button">
                        add another skill
                    </button>
                </div>
                <div class="card-title">
                    <h4>JOB DESCRIPTION</h4>
                    <hr/>
                </div>
                <div class="card-body">
                    <textarea  id="jobDesc" style="width:100%;" name="job_description" rows="10"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-secondary m-2 p-3" type="button">DISCARD</button>
                    <button class="btn btn-primary m-2 p-3" type="submit">POST NOW</button>
                </div>
            </form>
        </div>
        <br/><br/>
    </div>
</section>


<script>

    if(!token) {
        $('#modalLogin').modal('show');
    }

    $('.btn-add-skill').on('click', function() {
        let skills_container = $('#skills_container');

        skills_container.append(
            '<div class="row">'+
                '<div class="col-sm-8">'+
                    '<input type="text" class="form-control" name="skills['+skills_container.length+'][skill]" placeholder="Skills" />'+
                '</div>'+
                '<div class="col-sm-4">'+
                    '<select  class="form-control" name="skills['+skills_container.length+'][proficiency]">'+
                        '<option value="">Proficiency</option>'+
                        '<option value="Beginner">Beginner</option>'+
                        '<option value="Advanced">Advanced</option>'+
                        '<option value="Expert">Expert</option>'+
'                    </select>'+
                '</div>'+
'            </div>'
        );
    });


    $('#form-job-post').on('submit', function(e) {
        e.preventDefault();
        

        let job_post_data = $(this).serializeControls();
        let skills_reqiured = job_post_data.skills;
        skills_reqiured = Object.values(skills_reqiured);
        let salary = job_post_data.monthly_rate + ', ' + job_post_data.hourly_rate;
        job_post_data = {...job_post_data, client_id: userdata.client.id, salary: salary};
        delete job_post_data.skills;
        delete job_post_data.monthly_rate;
        delete job_post_data.hourly_rate;
        
        postData('/api/ClientJobPost', job_post_data, ({data:res}) => {
            if(res.success) {
                skills_reqiured.map((skill, key) => {
                    skills_reqiured[key]['client_job_post_id'] = res.data.id;
                });
                let _data =  {
                    client_job_post_id: res.data.id,
                    skills: skills_reqiured
                }
                postData('/api/ClientJobPostRequiredSkill', _data, ({data:res}) => {
                    if(res.success) {
                        alert('Job Post Successfully Created');
                        window.location.href = '/BusinessAllJobPost';
                    }
                });
            }
        });

    });
</script>
@endsection
