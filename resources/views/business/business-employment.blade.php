@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container fullwidth">

    <!-- Breamcrumbs Start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="/DashboardBusiness">Dashboard</a></li>
                <li class="breadcrumb-item active">Employment</li>
            </ol>
        </nav>
    <!-- Breadcrumbs End -->

    <!-- Card Start -->
        <div class="card w-100">
            <div class="card-header">

            <!-- NavTabs List Start -->
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="currentEmployees-tab" data-toggle="tab" href="#currentEmployees" role="tab" aria-controls="currentEmployees" aria-selected="true">Current Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="employeeMonitor-tab" data-toggle="tab" href="#employeeMonitor" role="tab" aria-controls="employeeMonitor" aria-selected="false">Employee Monitor</a>
                    </li>
                </ul>
            <!-- NavTabs List End -->

            <!-- Tab Content 1 Start -->
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="currentEmployees" role="tabpanel" aria-labelledby="currentEmployees-tab">

                <!-- Accordion Start 1 -->
                    <div class="accordion" id="accordionCurrentEmployees">
                        <!-- <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Employee 1 (Content Writer)
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Employment Status:
                                                </label>

                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Fulltime" disabled>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Salary:
                                                </label>

                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="$140.00/Month" disabled>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Working Hours:
                                                </label>

                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="40 Hours/Week" disabled>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Date Hired:
                                                </label>

                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="July 9, 2021" disabled>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-form-label">
                                                    Contract:
                                                </label>

                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="1 Year" disabled>
                                                </div>

                                            </div>
                                        </div>



                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                                <label>
                                                    Job Description
                                                </label>

                                                <textarea name="" id="" cols="30" rows="10" class="form-control" disabled></textarea>

                                        </div>

                                        <div class="col-md-6">

                                                <label>
                                                    Responsibilities
                                                </label>

                                                <textarea name="" id="" cols="30" rows="10" class="form-control" disabled></textarea>

                                        </div>


                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-info">Profile</button>
                                            <button class="btn btn-warning">Suspend</button>
                                            <button class="btn btn-danger">Terminate</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- NavTabs 1 Content End -->


                    <!-- NavTabs 2 Content Start -->
                    <div class="tab-pane fade" id="employeeMonitor" role="tabpanel" aria-labelledby="employeeMonitor-tab">
                        <div class="wrapper">

                                <table class="display" id="myDataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Hours</th>
                                        <th>Adhearance</th>
                                        <th>Breal</th>
                                        <th>Date</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>Jane Doe</td>
                                        <td>7.5</td>
                                        <td>30 minutes</td>
                                        <td>1 hr</td>
                                        <td>June 10,2021</td>
                                        <td>Complete</td>
                                    </tr> -->
                                </tbody>
                                </table>

                        </div>

                    </div>

                <!-- NavTabs 2 Content End -->

                </div>
            <!-- NavTabs End -->

            </div>
        </div>
    <!-- Card End -->

    </div>
</div>

<script>
if(!token) {
    window.location.href = '/';
} else {
    if(!userdata.client) {
        window.location.href = '/';
    }
}
</script>

<script>

$(document).ready(function() {
    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            console.log('res',res);
            let client_employees = res.data.client_employees.filter(p => p.status == 'Hired');
            client_employees.map((client_employee, key) => {
                console.log('client_employee',client_employee);
                let name = client_employee.jobseeker.user.firstname+ ' ' + client_employee.jobseeker.user.lastname;
                $('#accordionCurrentEmployees').append(
                    '<div class="card">'+
                        '<div class="card-header" id="currentEmployeeHeader_'+client_employee.id+'">'+
                            '<h2 class="mb-0">'+
                                '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#currentEmployee_'+client_employee.id+'" aria-expanded="true" aria-controls="currentEmployee_'+client_employee.id+'">'+
                                ''+name+' ('+client_employee.client_job_post.sector+')'+
                                '</button>'+
                            '</h2>'+
                        '</div>'+
                        '<div id="currentEmployee_'+client_employee.id+'" class="collapse " aria-labelledby="currentEmployeeHeader_'+client_employee.id+'" data-parent="#accordionCurrentEmployees">'+
                            '<div class="card-body" client_employee_id='+client_employee.id+'>'+
                                '<div class="row">'+
                                    '<div class="col-md-4">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Employment Status:'+
                                            '</label>'+

                                            '<div class="col">'+
                                                '<input type="text" class="form-control employment_status" placeholder="ex. Fulltime" value="'+(client_employee.employment_status ? client_employee.employment_status : '')+'">'+
                                            '</div>'+

                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Salary:'+
                                            '</label>'+

                                            '<div class="col">'+
                                                '<input type="text" class="form-control salary" placeholder="ex. 5/hr" value="'+(client_employee.salary ? client_employee.salary : '')+'">'+
                                            '</div>'+

                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-4">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Working Hours:'+
                                            '</label>'+

                                            '<div class="col">'+
                                                '<input type="text" class="form-control working_hours" placeholder="ex. 40 Hours/Week" value="'+(client_employee.working_hours ? client_employee.working_hours : '')+'">'+
                                            '</div>'+

                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="row">'+
                                    '<div class="col-md-6">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Date Hired:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="date" class="form-control date_hired" value="'+(client_employee.date_hired ? client_employee.date_hired : '')+'">'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                        '<div class="form-group row">'+
                                            '<label class="col-form-label">'+
                                                'Contract:'+
                                            '</label>'+
                                            '<div class="col">'+
                                                '<input type="text" class="form-control contract" placeholder="ex. 1 Year" value="'+(client_employee.contract ? client_employee.contract : '')+'" >'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="row">'+
                                    '<div class="col-md-6">'+
                                            '<label>'+
                                                'Job Description'+
                                            '</label>'+
                                            '<textarea name="" id="" cols="30" rows="10" class="form-control job_description" >'+(client_employee.job_description ? client_employee.job_description : '')+'</textarea>'+
                                    '</div>'+
                                    '<div class="col-md-6">'+

                                            '<label>'+
                                                'Responsibilities'+
                                            '</label>'+

                                            '<textarea name="" id="" cols="30" rows="10" class="form-control responsibilities" >'+(client_employee.responsibilities ? client_employee.responsibilities : '')+'</textarea>'+

                                    '</div>'+
                                '</div>'+
                                '<br>'+
                                '<div class="row">'+
                                    '<div class="col ">'+
                                        '<button class="btn btn-primary btn-save">Save</button>'+
                                    '</div>'+
                                    '<div class="col text-right">'+
                                        '<a class="btn btn-info" href="/jobseekerProfile?jobseeker_id='+client_employee.jobseeker.id+'" target="_blank">Profile</a>'+
                                        '<button class="btn btn-warning btn-suspend">Suspend</button>'+
                                        '<button class="btn btn-danger btn-terminate">Terminate</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            });
        }
    });


    $('body').on('click','.btn-save', function() {
        let cardBody = $(this).closest('.card-body');
        let client_employee_id = cardBody.attr('client_employee_id');
        let data = {
            employment_status: cardBody.find('.employment_status').val(),
            salary: cardBody.find('.salary').val(),
            working_hours: cardBody.find('.working_hours').val(),
            date_hired: cardBody.find('.date_hired').val(),
            contract: cardBody.find('.contract').val(),
            job_description: cardBody.find('.job_description').val(),
            responsibilities: cardBody.find('.responsibilities').val()
        };

        // console.log(client_employee_id, data)

        updateData('/api/ClientEmployee/'+client_employee_id, data, ({data:res}) => {
            console.log(res);
            if(res.success) {
                alert('Employee Successfully Updated');
            }
        })
    })

    $('body').on('click','.btn-suspend', function() {
        let cardBody = $(this).closest('.card-body');
        let client_employee_id = cardBody.attr('client_employee_id');
        let data = {
            status: 'Suspended',
        };

        // console.log(client_employee_id, data)

        updateData('/api/ClientEmployee/'+client_employee_id, data, ({data:res}) => {
            console.log(res);
            if(res.success) {
                alert('Employee Successfully Suspended');
                location.reload();
            }
        })
    });

    $('body').on('click','.btn-terminate', function() {
        let cardBody = $(this).closest('.card-body');
        let client_employee_id = cardBody.attr('client_employee_id');
        let data = {
            status: 'Terminated',
        };

        // console.log(client_employee_id, data)

        updateData('/api/ClientEmployee/'+client_employee_id, data, ({data:res}) => {
            console.log(res);
            if(res.success) {
                alert('Employee Successfully Terminated');
                location.reload();
            }
        })
    });

});
</script>
@endsection