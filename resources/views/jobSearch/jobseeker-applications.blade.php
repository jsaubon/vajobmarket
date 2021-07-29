@extends('layouts.js-blank-layout')

@section('content')


<div class="user-dashboard h-auto">
    <div class="container h-auto fullwidth" >
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="/jobseekerDashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Jobs Applied</li>
            </ol>
        </nav>
         {{-- breadcrumb end--}}
        <div class="card shadow" style="border-radius:10px; min-height: 80vh;" >
            <ul class="nav nav-tabs border-0 mt-3 px-3" id="myTab" role="tablist">
                <li class="nav-item " role="presentation" style="width:50%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border active border-2 border-top-0  border-left-0 border-right-0 text-center text-dark"  data-toggle="tab" href="#js-jobsapplied-tab" role="tab" aria-controls="home" aria-selected="true">
                        Jobs Applied
                    </a>
                </li>
                <li class="nav-item" role="presentation" style="width:50%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border border-bottom-1 border-top-0 border-2  border-left-0 border-right-0  text-center text-dark" data-toggle="tab" href="#js-onhiring-tab" role="tab" aria-controls="profile" aria-selected="false">
                       on hiring process
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
               <!-- Account -->
                <div class="tab-pane fade show active" id="js-jobsapplied-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="accordion mx-2"  id="accordionJobsApplied">
                            
                    </div>
                </div>
                <!-- Payment  -->
                <div class="tab-pane fade  " id="js-onhiring-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="accordion mx-2" id="accordionJobsShortlisted">
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





 


<script>
    if(!token) {
        window.location.href = '/';
    }


$(document).ready(function() {
    getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
        if(res.success) {
            console.log(res.data);
            let hired = res.data.client_employees.filter(p => p.status == 'Hired' ); //&& p.employment_status == 'Employed'
            let applied = res.data.client_employees.filter(p => p.status == 'Applicant'  || p.status == 'Shortlisted' ); //&& p.employment_status == 'Employed'
            let shortlisted = res.data.client_employees.filter(p => p.status == 'Shortlisted' ); //&& p.employment_status == 'Employed'

            console.log('hired', hired);

            applied.map((applied, key) => {
                $('#accordionJobsApplied').append(
                    '<div class="card border-0">'+
                        '<div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="jobAppliedHeader_'+key+'">'+
                            '<h2 class="mb-0 ">'+
                                '<button class="btn w-100 text-left" style="font-family: \'Oswald\', sans-serif;" type="button" data-toggle="collapse" data-target="#jobApplied_'+key+'" aria-expanded="true" aria-controls="collapseOne" >'+
                                'JOB TITLE: '+applied.client_job_post.job_title+' ('+applied.client_job_post.job_type+')'+
                                '</button>'+
                            '</h2>'+
                        '</div>'+
                        '<div id="jobApplied_'+key+'" class="collapse" aria-labelledby="jobAppliedHeader_'+key+'" data-parent="#accordionJobsApplied">'+
                            '<div class="card-body">'+
                                '<table class="row-border hover border-bottom " style="width: 100%" >'+
                                    '<thead>'+
                                        '<tr>'+
                                            '<th class="dash-table-title" scope="col">company</th>'+
                                            '<th class="dash-table-title" scope="col">salary</th>'+
                                            '<th class="dash-table-title" scope="col">date applied</th>'+
                                            '<th class="dash-table-title" scope="col">status</th>'+
                                        '</tr>'+
                                    '</thead>'+
                                    '<tbody>'+
                                        '<tr>'+
                                            '<td class="dash-table-content">'+applied.client_job_post.client.client_business_info.business_name+'</td>'+
                                            '<td class="text-center  dash-table-content">'+applied.client_job_post.salary+'</td>'+
                                            '<td class="text-center  dash-table-content">'+applied.date_applied+'</td>'+
                                            '<td class="text-center  dash-table-content">'+applied.status+'</td>'+
                                        '</tr>'+
                                    '</tbody>'+

                                '</table>'+
                            '</div>'+
                            '<div  class=" mx-4 mb-4 dash-table-content">Job Description: <br/>'+applied.client_job_post.job_description+'</div>'+
                        '</div>'+
                    '</div>'
                )
            });

            shortlisted.map((shortlisted, key) => {
                $('#accordionJobsShortlisted').append(
                    '<div class="card border-0">'+
                        '<div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="jobShortlistedHeader_'+key+'">'+
                            '<h2 class="mb-0 ">'+
                                '<button class="btn w-100 text-left" style="font-family: \'Oswald\', sans-serif;" type="button" data-toggle="collapse" data-target="#jobShortlisted_'+key+'" aria-expanded="true" aria-controls="collapseOne" >'+
                                'JOB TITLE: '+shortlisted.client_job_post.job_title+' ('+shortlisted.client_job_post.job_type+')'+
                                '</button>'+
                            '</h2>'+
                        '</div>'+
                        '<div id="jobShortlisted_'+key+'" class="collapse" aria-labelledby="jobShortlistedHeader_'+key+'" data-parent="#accordionJobsShortlisted">'+
                            '<div class="card-body">'+
                                '<table class="row-border hover border-bottom " style="width: 100%" >'+
                                    '<thead>'+
                                        '<tr>'+
                                            '<th class="dash-table-title" scope="col">subject</th>'+
                                            '<th class="dash-table-title" scope="col">date</th>'+
                                        '</tr>'+
                                    '</thead>'+
                                    '<tbody>'+
                                        '<tr>'+
                                            '<td class="dash-table-content">Initial Interview</td>'+
                                            '<td class="text-center  dash-table-content">'+(shortlisted.initial_interview_date ? shortlisted.initial_interview_date : 'Not Set')+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td class="dash-table-content">Skills Assessment</td>'+
                                            '<td class="text-center  dash-table-content">'+(shortlisted.skills_assessment_date ? shortlisted.skills_assessment_date : 'Not Set')+'</td>'+
                                        '</tr>'+
                                        '<tr>'+
                                            '<td class="dash-table-content">Final Interview</td>'+
                                            '<td class="text-center  dash-table-content">'+(shortlisted.final_interview_date ? shortlisted.final_interview_date : 'Not Set')+'</td>'+
                                        '</tr>'+
                                    '</tbody>'+

                                '</table>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                )
            });

           



        }
    });
});
</script>


@endsection



