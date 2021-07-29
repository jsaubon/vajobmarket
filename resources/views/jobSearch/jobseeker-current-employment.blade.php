@extends('layouts.js-blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container h-auto fullwidth" >

    <!-- Breamcrumbs Start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="/jobseekerDashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Current Employment</li>
            </ol>
        </nav>
    <!-- Breadcrumbs End -->

    <!-- Card Start -->
        <div class="card w-100 h-100 shadow" style="border-radius: 20px;">
            <div class="card-header border-bottom-0 bg-white"  style="border-radius: 20px;">
                <h4 class="card-title text-center title-personal-info ">
                    Current Employment
                    <hr>
                </h4>
            </div>

            <div class="row">
                <div class="col-md-12">
                    
                    <div class="employments_container accordion" id="accordionEmployments">
                    </div>
                </div>

            </div>



        </div>
</div>


<script>
    if(!token) {
        window.location.href = '/';
    } else {
        if(!userdata.jobseeker) {
            window.location.href = '/';
        }
    }


$(document).ready(function() {
    getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
        if(res.success) {
            console.log(res.data);
            let hired = res.data.client_employees.filter(p => p.status == 'Hired' ); //&& p.employment_status == 'Employed'
            let applied = res.data.client_employees.filter(p => p.status == 'Applicant'  || p.status == 'Shortlisted' ); //&& p.employment_status == 'Employed'
            let shortlisted = res.data.client_employees.filter(p => p.status == 'Shortlisted' ); //&& p.employment_status == 'Employed'

            console.log('hired', hired);

            hired.map((employment, key) => {
                $('.employments_container').append(
                    '<div class="card border-0 mx-2">'+
                        '<div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne_'+employment.id+'">'+
                        '<h2 class="mb-0 ">'+
                            '<button class="btn text-capitalize w-100 d-flex  justify-content-between text-left" style="font-family: \'Oswald\', sans-serif;" type="button" data-toggle="collapse" data-target="#employment_'+employment.id+'" aria-expanded="true" aria-controls="collapseOne" >'+
                            '<div> '+employment.client_job_post.client.client_business_info.business_name+' ('+employment.client_job_post.job_title+') </div>'+
                            '<div class="my-auto">'+
                                '<i class="fas fa-chevron-down my-auto "></i>'+
                                '{{-- <i class="fas fa-chevron-up" ></i> --}}'+
                            '</div>'+
                            '</button>'+
                        '</h2>'+
                        '</div>'+

                        '<div id="employment_'+employment.id+'" class="collapse" aria-labelledby="headingOne_'+employment.id+'" data-parent="#accordionEmployments">'+
                        '<div class="card-body">'+

                            '<div class="row px-2 text-center ">'+
                                '<div class="col-md-2 dash-text ">'+
                                    'employment status : '+employment.client_job_post.job_type+''+
                                '</div>'+
                                '<div class="col-md-2 dash-text">'+
                                    'salary: '+employment.salary+''+
                                '</div>'+
                                '<div class="col-md-4 dash-text">'+
                                    'working hours: '+employment.working_hours+''+
                                '</div>'+
                                '<div class="col-md-2 dash-text">'+
                                    'date hired: '+employment.date_hired+''+
                                '</div>'+
                                '<div class="col-md-2 dash-text">'+
                                    'contract: '+employment.contract+''+
                                '</div>'+
                            '</div>'+
                            '<hr>'+

                            '<div class="row text-left ml-1 ">'+
                                '<div class="col-md-5 dash-text pl-0">'+
                                    'Job Description'+
                                '</div>'+
                                '<div class="col-md-1 dash-text">'+

                                '</div>'+
                                '<div class="col-md-6 dash-text">'+
                                    'Responsibilites'+
                                '</div>'+
                            '</div>'+

                            '<div class="row text-left pt-4 pl-3">'+
                                '<div class="col-md-5 dash-text" style="white-space: break-spaces">'+
                                    ''+employment.job_description+''+
                                '</div>'+
                                '<div class="col-md-1">'+

                                '</div>'+
                                '<div class="col-md-6 dash-text" style="white-space: break-spaces">'+
                                    ''+employment.responsibilities+''+
                                '</div>'+
                            '</div>'+

                            '<div class="row pt-4 ">'+
                                '<div class="col-md-12 d-flex justify-content-end">'+
                                    '<div class="d-flex justify-content-around" style="width: 30%;">'+
                                        '<a href="/BusinessPostJob" style="text-decoration:none;">'+
                                            '<div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px; ">'+
                                                '<i class="fas fa-user-clock my-auto" style="font-size:12px;" ></i>&nbsp;'+
                                                '<b class="my-auto" style="text-transform: uppercase;">clock in</b>'+
                                            '</div>'+
                                        '</a>'+
                                        '<a href="/BusinessPostJob" style="text-decoration:none;">'+
                                            '<div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">'+
                                                '<i class="fas fa-coffee my-auto mr-1" style="font-size:12px;" ></i>&nbsp;'+
                                                '<b class="my-auto" style="text-transform: uppercase;">break</b>'+
                                            '</div>'+
                                        '</a>'+
                                        '<a href="/BusinessPostJob" style="text-decoration:none;">'+
                                            '<div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">'+
                                                '<i class="fas fa-times-circle my-auto" style="font-size:12px;" ></i>&nbsp;'+
                                                '<b class="my-auto" style="text-transform: uppercase;">clock out</b>'+
                                            '</div>'+
                                        '</a>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '</div>'+
                    '</div>'
                );
            });

           



        }
    });
});
</script>
@endsection