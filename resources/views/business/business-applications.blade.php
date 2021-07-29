@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard">
    <div class="container fullwidth" style="min-height: 80vh">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="/DashboardBusiness">Dashboard</a></li>
                <li class="breadcrumb-item active">Applications</li>
            </ol>
        </nav>

        <div class="card w-100">
            <div class="card-header">

                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="applicants-tab" data-toggle="tab" href="#applicants" role="tab" aria-controls="applicants" aria-selected="true">Applicants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="shortlistings-tab" data-toggle="tab" href="#shortlistings" role="tab" aria-controls="shortlistings" aria-selected="false">Shortlisting</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="applicants" role="tabpanel" aria-labelledby="applicants-tab">

                        <div class="accordion" id="accordionApplicants">


                        </div>

                    </div>

                    <div class="tab-pane fade" id="shortlistings" role="tabpanel" aria-labelledby="shortlistings-tab">

                    <div class="accordion" id="accordionShortlisting">
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

getPageData();
// $(document).ready(function() {
function getPageData() {


    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            let client_job_posts = res.data.client_job_posts;
            console.log('client_job_posts',client_job_posts);
            client_job_posts.map((client_job_post, client_job_post_key) => {
                let show = client_job_post_key == 0 ? 'show' : '';

                $('#accordionApplicants').append(
                    '<div class="card">'+
                            '<div class="card-header" id="accordion_'+client_job_post_key+'">'+
                                '<h2 class="mb-0">'+
                                    '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_'+client_job_post_key+'" aria-expanded="true" aria-controls="collapse_'+client_job_post_key+'">'+
                                    ''+client_job_post.job_title+''+
                                    '</button>'+
                                '</h2>'+
                            '</div>'+

                            '<div id="collapse_'+client_job_post_key+'" class="collapse '+show+'" aria-labelledby="accordion_'+client_job_post_key+'" data-parent="#accordionApplicants">'+
                            '<div class="card-body">'+

                            '<table class="table tblApplicants_'+client_job_post_key+'">'+
                                '<thead>'+
                                    '<tr>'+
                                    '<th class="text-center" scope="col">Name</th>'+
                                    '<th class="text-center" scope="col">Status</th>'+
                                    '<th class="text-center" scope="col">Message</th>'+
                                    '<th class="text-center" scope="col">Date Applied</th>'+
                                    '<th class="text-center" scope="col">Actions</th>'+
                                    '</tr>'+
                                '</thead>'+

                                '<tbody>'+
                                '</tbody>'+

                            '</table>'+

                            '</div>'+
                            '</div>'+
                        '</div>'
                );

                client_job_post.applicants.filter(p => p.status != 'Shortlisted').map((applicant, key) => {
                    let name = applicant.jobseeker.user.firstname+ ' ' + applicant.jobseeker.user.lastname;
                    $('.tblApplicants_'+client_job_post_key).find('tbody').append(
                        '<tr client_employee_id='+applicant.id+'>'+
                            '<td>'+name+'</td>'+
                            '<td class="text-center">'+applicant.status+'</td>'+
                            '<td class="text-center" style="white-space: break-spaces">'+
                                'Subject: '+applicant.application_subject+''+
                                '<br/>'+
                                '<br/>'+
                                'Message: '+applicant.application_message+''+
                            '</td>'+
                            '<td class="text-center">'+applicant.date_applied+'</td>'+
                            '<td class="text-center">'+
                            '<button class="btn btn-primary btn-shortlist">Shortlist</button>'+
                            '<button class="btn btn-danger">Dismiss</button>'+
                            '</td>'+
                        '</tr>'
                    );
                });
            });



            let client_employees = res.data.client_employees;
            let shortlisted_employees = client_employees.filter(p => p.status == 'Shortlisted');

            shortlisted_employees.map((applicant, key) => {
                console.log('applicant',applicant);
                let name = applicant.jobseeker.user.firstname+ ' ' + applicant.jobseeker.user.lastname;
                $('#accordionShortlisting').append(
                    '<div class="card" client_employee_id='+applicant.id+'>'+
                        '<div class="card-header" id="headingOneShortlisted_'+key+'">'+
                            '<h2 class="mb-0">'+
                                '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOneShortlisted_'+key+'" aria-expanded="true" aria-controls="collapseOneShortlisted_'+key+'">'+
                                ''+name+''+
                                '</button>'+
                            '</h2>'+
                        '</div>'+
                        '<div id="collapseOneShortlisted_'+key+'" class="collapse" aria-labelledby="headingOneShortlisted_'+key+'" data-parent="#accordionShortlisting">'+
                            '<div class="card-body">'+
                                '<div class="row">'+
                                    '<div class="col-md-6">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">JOB TITLE:</label>'+
                                            '<div class="col">'+
                                                '<input type="text" disabled value="'+applicant.client_job_post.job_title+'" class="form-control">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-6 text-right">'+
                                        '<a class="btn btn-warning" target="_blank" href="/jobseekerProfile?jobseeker_id='+applicant.jobseeker.id+'">Profile</a>'+
                                        '<button class="btn btn-success btn-hire">Hire</button>'+
                                        '<button class="btn btn-danger btn-dismiss">Dismiss</button>'+
                                    '</div>'+
                                '</div>'+
                                '<hr>'+
                                '<div class="row">'+
                                    '<div class="col-md-3">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Expected Salary:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="text" disabled value="'+applicant.client_job_post.salary+'" class="form-control">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Profile:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="text"  class="form-control">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Recommendation:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="text" class="form-control">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Date Applied:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="text" disabled value="'+applicant.date_applied+'" class="form-control">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<hr>'+
                                '<div class="row">'+
                                    '<div class="col-md-6">'+
                                        '<label>'+
                                            'SCHEDULE FOR INTERVIEW'+
                                        '</label>'+
                                        '<input type="date" value="'+applicant.initial_interview_date+'" class="form-control input-initial_interview_date">'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                        '<div class="col">'+
                                            '<label>'+
                                                'INTERVIEW NOTIFICATION MESSAGE'+
                                            '</label>'+
                                        '</div>'+
                                        '<div class="col">'+
                                            '<textarea name="" id="" cols="30" rows="10" class="form-control input-initial_interview_message">'+(applicant.initial_interview_message == null ? '' : applicant.initial_interview_message)+'</textarea>'+
                                        '</div>'+
                                        // '<div class="col text-right">'+
                                        //     '<button class="btn btn-primary">'+
                                        //         'SEND'+
                                        //     '</button>'+
                                        // '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<hr>'+
                                '<div class="row">'+
                                    '<div class="col">'+
                                        '<div class="col">'+
                                            '<label>'+
                                                'INTERVIEW REMARKS'+
                                            '</label>'+
                                        '</div>'+
                                        '<div class="col">'+
                                            '<textarea name="" id="" cols="30" rows="10" class="form-control input-initial_interview_remarks">'+(applicant.initial_interview_remarks == null ? '' : applicant.initial_interview_remarks)+'</textarea>'+
                                        '</div>'+
                                        '<div class="col text-right">'+
                                            '<button class="btn btn-primary btn-save">SAVE</button>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            });


            $('body').on('click','.btn-save', function() {
                let card = $(this).closest('.card');
                let client_employee_id = card.attr('client_employee_id');
                let initial_interview_date = card.find('.input-initial_interview_date').val();
                let initial_interview_message = card.find('.input-initial_interview_message').val();
                let initial_interview_remarks = card.find('.input-initial_interview_remarks').val();

                console.log(initial_interview_date);
                console.log(initial_interview_message);
                console.log(initial_interview_remarks);
                let data = {
                    initial_interview_date,
                    initial_interview_message,
                    initial_interview_remarks,
                }
                updateData('/api/ClientEmployee/'+client_employee_id,data, ({data:res}) => {
                    // console.log('update',res);
                    if(res.success) {
                        alert('Applicant Successfully Updated');
                    }
                });
            });

            $('body').on('click','.btn-hire', function() {
                let card = $(this).closest('.card');
                let client_employee_id = card.attr('client_employee_id');
                let data = {
                    status: 'Hired',
                    // employment_status: 'Employed',
                    date_hired: moment().format('YYYY-MM-DD'),
                }
                updateData('/api/ClientEmployee/'+client_employee_id,data, ({data:res}) => {
                    // console.log('update',res);
                    if(res.success) {
                        alert('Applicant Successfully Hired');
                        window.location.href = '/BusinessEmployment';
                    }
                });
            });

            $('body').on('click','.btn-dismiss', function() {
                let card = $(this).closest('.card');
                let client_employee_id = card.attr('client_employee_id');
                let data = {
                    status: 'Dismissed',
                }
                updateData('/api/ClientEmployee/'+client_employee_id,data, ({data:res}) => {
                    // console.log('update',res);
                    if(res.success) {
                        alert('Applicant Successfully Dismissed');
                        window.location.href = '/BusinessApplications';
                    }
                });
            });

            $('body').on('click','.btn-shortlist', function() {
                let tr = $(this).closest('tr');
                let client_employee_id = tr.attr('client_employee_id');
                let data = {
                    status: 'Shortlisted',
                }
                updateData('/api/ClientEmployee/'+client_employee_id,data, ({data:res}) => {
                    // console.log('update',res);
                    if(res.success) {
                        alert('Applicant Successfully Shortlisted');
                        window.location.href = '/BusinessApplications';
                    }
                });
            });
        }
    });

}

</script>
@endsection
