@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container fullwidth">

    <!-- Card Start -->
        <div class="card w-100 shadow ">
            <div class="wrapper rounded-lg" style="padding: 50px 40px 80px 40px;" >
                <div class="row pt-2">
                    <div class="col-md-12" style="text-transform: uppercase ; color:#767676; font-size:1em;">
                        Welcome back username!
                    </div>
                </div>

                <hr class="lsep">
                <!--alerts--->
                <div class="alert alert-warning shadow-sm "  style="background-color:#fcff9a; border-color:#fcff9a; font-size:13px;" role="alert">
                    <div class="row ">
                        <div class="col-md-6 ">
                           <b style="text-transform:uppercase;">system:</b> A simple warning alert—check it out!
                        </div>
                        <div class="col-md-6 text-right my-auto">
                            <i class="fas fa-plus-circle my-auto" ></i>
                        </div>
                    </div>
                </div>
                <!---alerts end--->

                <div class="row pt-2" style="text-transform:uppercase; font-size: 1em;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">all job posts</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessAllJobPost" style="text-decoration: none !important; color:#767676; font-size:0.7em;" class="title-personal-info mt-0 ">
                        see more

                        <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="lsep">
                <!---all job posts--->
                <table class="row-border hover border-bottom" id="myDataTable">
                    <thead>
                        <tr>
                        <th class="text-center dash-table-title" scope="col">Job Posted</th>
                        <th class="text-center dash-table-title" scope="col">Application</th>
                        <th class="text-center dash-table-title" scope="col">Visits</th>
                        <th class="text-center dash-table-title" scope="col">Date Posted</th>
                        <th class="text-center dash-table-title" scope="col">Date End</th>
                        <th class="text-center dash-table-title" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>


                    </tbody>

                </table>
                 <!---all job post end-->

                <!---applicants--->
                <div class="row pt-2" style="text-transform:uppercase; font-size: 1em;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">applicants</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessApplications" style="text-decoration: none !important; color:#767676; font-size:0.7em;" class="title-personal-info mt-0" >
                        see more
                        <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="lsep">

                <table class="row-border hover border-bottom" id="myDataTable2">
                    <thead>
                        <tr>
                        <th class="text-center dash-table-title" scope="col">name</th>
                        <th class="text-center dash-table-title" scope="col">status</th>
                        <th class="text-center dash-table-title" scope="col">rating</th>
                        <th class="text-center dash-table-title" scope="col">recomendation</th>
                        <th class="text-center dash-table-title" scope="col">Date applied</th>
                        <th class="text-center dash-table-title" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>



                    </tbody>

                </table>
                 <!---applicants end-->


                <!---employee names--->
                <div class="row pt-2" style="text-transform:uppercase; font-size: 1em;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">employees</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessEmployment" style="text-decoration: none !important; color:#767676; font-size:0.7em;" class="title-personal-info mt-0">
                        see more
                        <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="lsep">

                <table class="row-border hover border-bottom" id="myDataTable3">
                    <thead >
                        <tr>
                            <th class="text-center dash-table-title" scope="col">employee name</th>
                            <th class="text-center dash-table-title" scope="col">employment status</th>
                            <th class="text-center dash-table-title" scope="col">salary</th>
                            <th class="text-center dash-table-title" scope="col">working hours</th>
                            <th class="text-center dash-table-title" scope="col">date applied</th>
                            <th class="text-center dash-table-title" scope="col">date hired</th>
                            <th class="text-center dash-table-title" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>



                    </tbody>

                </table>
                <!---employee names end--->
            </div>
        </div>
    <!-- Card End -->

    </div>
</div>
<script>
if(!token) {
    window.location.href = '/';
}
</script>

<script>

$(document).ready(function() {
    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            console.log('res',res);
            $('#myDataTable').DataTable().destroy();
            let client_job_posts = res.data.client_job_posts;
            let applicants = [];
            client_job_posts.map((job_post, key) => {

                applicants = [...applicants, ...job_post.applicants];
                $('#myDataTable tbody').append(
                    '<tr>'+
                        '<td class="dash-table-content">'+job_post.job_title+'</td>'+
                        '<td class="text-center  dash-table-content">'+job_post.applicants.length+'</td>'+
                        '<td class="text-center  dash-table-content">'+job_post.visits+'</td>'+
                        '<td class="text-center  dash-table-content">'+job_post.start_date+'</td>'+
                        '<td class="text-center  dash-table-content">'+job_post.end_date+'</td>'+
                        '<td class="text-center  dash-table-content d-flex justify-content-around">'+
                            '<a target="_blank" href="/BusinessProfileCompany?job_id='+job_post.id+'"><i class="fas fa-eye"></i></a>'+
                            '<i class="fas fa-edit"></i>'+
                            '<i class="fas fa-trash-alt"></i>'+
                        '</td>'+
                    '</tr>'
                );
            });

            $('#myDataTable').DataTable().draw();
            var $label = document.querySelector("#myDataTable_length");
            if($label) {
                var $filterz = document.querySelector('#myDataTable_filter')
                var $hidepagination = document.querySelector('#myDataTable_paginate')
                var $hideInfo = document.querySelector('#myDataTable_info')
                $hideInfo.style.display='none'
                $hidepagination.style.display='none'
                $filterz.style.display='none'
                $label.style.display ='none'
            }

            console.log('applicants',applicants);
            $('#myDataTable2').DataTable().destroy();
            applicants.map((applicant, key) => {
                let name = applicant.jobseeker.user.firstname+ ' ' + applicant.jobseeker.user.lastname;
                $('#myDataTable2 tbody').append(
                        '<tr>'+
                            '<td class="dash-table-content">'+name+'</td>'+
                            '<td class="text-center  dash-table-content">'+applicant.status+'</td>'+
                            '<td class="text-center  dash-table-content"></td>'+
                            '<td class="text-center  dash-table-content"></td>'+
                            '<td class="text-center  dash-table-content">'+applicant.date_applied+'</td>'+
                            '<td class="text-center  dash-table-content d-flex justify-content-around">'+
                                '<i class="fas fa-eye"></i>'+
                                '<i class="fas fa-edit"></i>'+
                                '<i class="fas fa-trash-alt"></i>'+
                            '</td>'+
                        '</tr>'
                    );
            });

            $('#myDataTable2').DataTable().draw();
            var $label = document.querySelector("#myDataTable2_length");
            if($label) {
                var $filterz = document.querySelector('#myDataTable2_filter')
                var $hidepagination = document.querySelector('#myDataTable2_paginate')
                var $hideInfo = document.querySelector('#myDataTable2_info')
                $hideInfo.style.display='none'
                $hidepagination.style.display='none'
                $filterz.style.display='none'
                $label.style.display ='none'
            }


            $('#myDataTable3').DataTable().destroy();
            let client_employees_hired = res.data.client_employees.filter(p => p.status == 'Hired');
            client_employees_hired.map((client_employee, key) => {
                console.log('client_employee',client_employee);
                let name = client_employee.jobseeker.user.firstname+ ' ' + client_employee.jobseeker.user.lastname;
                $('#myDataTable3 tbody').append(
                        '<tr>'+
                            '<td class="dash-table-content">'+name+'</td>'+
                            '<td class="text-center  dash-table-content">'+client_employee.employment_status+'</td>'+
                            '<td class="text-center  dash-table-content">'+client_employee.salary+'</td>'+
                            '<td class="text-center  dash-table-content">'+client_employee.working_hours+'</td>'+
                            '<td class="text-center  dash-table-content">'+client_employee.date_applied+'</td>'+
                            '<td class="text-center  dash-table-content">'+client_employee.date_hired+'</td>'+
                            '<td class="text-center  dash-table-content d-flex justify-content-around">'+
                                '<i class="fas fa-eye"></i>'+
                                '<i class="fas fa-edit"></i>'+
                                '<i class="fas fa-trash-alt"></i>'+
                            '</td>'+
                        '</tr>'
                    );
            });

            $('#myDataTable3').DataTable();
            var $label = document.querySelector("#myDataTable3_length");
            if($label) {
                var $filterz = document.querySelector('#myDataTable3_filter')
                var $hidepagination = document.querySelector('#myDataTable3_paginate')
                var $hideInfo = document.querySelector('#myDataTable3_info')
                $hideInfo.style.display='none'
                $hidepagination.style.display='none'
                $filterz.style.display='none'
                $label.style.display ='none'
            }


            // let jobpost_data = res.data;
            // let client = jobpost_data.client;
            // let client_business_info = client.client_business_info;
            // let client_job_post_required_skills = jobpost_data.client_job_post_required_skills;
            // Object.keys(jobpost_data).map((field, key) => {
            //     let element = $('.job_post-'+field);
            //     if(element.length) {
            //         element.html(jobpost_data[field]);
            //         element.val(jobpost_data[field]);
            //     }
            // });
            // Object.keys(client).map((field, key) => {
            //     let element = $('.client-'+field);
            //     if(element.length) {
            //         element.html(client[field]);
            //     }
            // });
            // Object.keys(client_business_info).map((field, key) => {
            //     let element = $('.client_business_info-'+field);
            //     if(element.length) {
            //         element.html(client_business_info[field]);
            //     }
            // });


            // client_job_post_required_skills.map((skills_required, key) => {
            //     $('.job_post-skills_required').append(
            //         '<div class="row pt-4">'+
            //             '<div class="col-md-12 d-flex justify-content-between" >'+
            //                     ''+skills_required.skill+''+
            //                     '<div style="float: right">'+
            //                     ''+skills_required.proficiency+''+
            //                     '</div>'+
            //             '</div>'+
            //         '</div>'+
            //         '<hr>'
            //     );
            // })
        }
    });

});
</script>
@endsection
