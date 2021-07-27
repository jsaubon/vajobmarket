@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard">
    <div class="container fullwidth">


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

                    <div class="accordion" id="accordionShortListing">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionShortListing">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-form-label">JOB TITLE:</label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button class="btn btn-warning">Profile</button>
                                            <button class="btn btn-success">Hire</button>
                                            <button class="btn btn-danger">Dismiss</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Expected Salary:
                                                </label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Profile:
                                                </label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Recommendation:
                                                </label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Date Applied:
                                                </label>
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                SCHEDULE FOR INTERVIEW
                                            </label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col">
                                                <label>
                                                    INTERVIEW NOTIFICATION MESSAGE
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="col text-right">
                                                <button class="btn btn-primary">
                                                    SEND
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="col">
                                                <label>
                                                    INTERVIEW REMARKS
                                                </label>
                                            </div>
                                            <div class="col">
                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                            <div class="col text-right">
                                                <button class="btn btn-primary">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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
// $(document).ready(function() {
    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            let client_job_posts = res.data.client_job_posts;
            client_job_posts.map((client_job_post, key) => {
                let show = key == 0 ? 'show' : '';
                $('#accordionApplicants').append(
                    '<div class="card">'+
                            '<div class="card-header" id="accordion_'+key+'">'+
                                '<h2 class="mb-0">'+
                                    '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_'+key+'" aria-expanded="true" aria-controls="collapse_'+key+'">'+
                                    ''+client_job_post.job_title+''+
                                    '</button>'+
                                '</h2>'+
                            '</div>'+

                            '<div id="collapse_'+key+'" class="collapse '+show+'" aria-labelledby="accordion_'+key+'" data-parent="#accordionApplicants">'+
                            '<div class="card-body">'+

                            '<table class="table tblApplicants_'+key+'">'+
                                '<thead>'+
                                    '<tr>'+
                                    '<th class="text-center" scope="col">Name</th>'+
                                    '<th class="text-center" scope="col">Status</th>'+
                                    '<th class="text-center" scope="col">Rating</th>'+
                                    '<th class="text-center" scope="col">Recommendation</th>'+
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
                
                client_job_post.applicants.map((applicant, key) => {
                    let name = applicant.jobseeker.user.firstname+ ' ' + applicant.jobseeker.user.lastname;
                    $('.tblApplicants_'+key).find('tbody').append(
                        '<tr>'+
                            '<td>'+name+'</td>'+
                            '<td class="text-center">'+applicant.status+'</td>'+
                            '<td class="text-center"></td>'+
                            '<td class="text-center"></td>'+
                            '<td class="text-center">'+applicant.date_applied+'</td>'+
                            '<td class="text-center">A1 A2 A3</td>'+
                        '</tr>'
                    );
                });
            });



            let client_employees = res.data.client_employees;
            console.log('client_employees',client_employees);
            console.log('client_employees',client_employees.filter(p => p.status == 'Shortlisted'));
            

        }
    });
// });
</script>
@endsection