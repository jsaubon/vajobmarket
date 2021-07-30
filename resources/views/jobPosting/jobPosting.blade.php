@extends('layouts.app')

@section('content')

<style>
    label {
        margin-top: 2px;
        margin-bottom: 0px;
    }
</style>
<link href="{{URL::asset('assets/css/jobPost.css')}}" rel="stylesheet">
<section class="jobPostSection pt-4">
    <div class="container pt-4">
        <br/> <br/>
        <div class="d-flex justify-content-between pt-4">
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
                            <label>Job Title</label>
                            <input type="text" required class="form-control " name="job_title" placeholder="Job Title" />
                        </div>
                        <div class="col-sm-4">
                            <label>Sector</label>
                            <select class="form-control" name="sector" id="sector_select">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Job Type</label>
                            <select class="form-control" name="job_type" id="jobtype_select">
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Monthly Rate</label>
                            <input type="text" class="form-control" name="monthly_rate" placeholder="900/month" />
                        </div>
                        <div class="col-sm-4">
                            <label>Hourly Rate</label>
                            <input type="text" class="form-control" name="hourly_rate" placeholder="ex. 5/hr" />
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Start Date</label>
                            <input type="date" required class="form-control" name="start_date" placeholder="start date" />
                        </div>
                        <div class="col-sm-4">
                            <label>End Date</label>
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
                    <div id="skills_container" class=" py-4">
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

    getData('/api/Sector', ({data:res}) => {
        // console.log('res',res);
        if(res.success) {
            res.data.map((sector, key) => {
                $('#sector_select').append(
                    '<option value="'+sector.sector+'">'+sector.sector+'</option>'
                )
            });
        }
    })

    getData('/api/JobType', ({data:res}) => {
        // console.log('res',res);
        if(res.success) {
            res.data.map((jobtype, key) => {
                $('#jobtype_select').append(
                    '<option value="'+jobtype.job_type+'">'+jobtype.job_type+'</option>'
                )
            });
        }
    })

    $('.btn-add-skill').on('click', function() {
        let skills_container = $('#skills_container');

        let row = skills_container.find('.row').length +1;
        skills_container.append(
            '<div class="row">'+
                '<div class="col-sm-8">'+
                    '<input type="text" class="form-control" name="skills['+row+'][skill]" placeholder="Skills" />'+
                '</div>'+
                '<div class="col-sm-4">'+
                    '<select  class="form-control" name="skills['+row+'][proficiency]">'+
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

        if(!token) {
            $('#modalLogin').modal('show');
        } else {
            let job_post_data = $(this).serializeControls();
            console.log('job_post_data',job_post_data);
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
        }


    });
</script>
@endsection
