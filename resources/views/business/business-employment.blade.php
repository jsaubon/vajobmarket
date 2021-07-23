@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard">
    <div class="container fullwidth">

    <!-- Breamcrumbs Start -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="#">Dashboard</a></li>
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
                    <div class="accordion" id="accordionExample">
                        <div class="card">
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
<<<<<<< HEAD


                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

=======


                                                <textarea name="" id="" cols="30" rows="10" class="form-control" disabled></textarea>

>>>>>>> 42d25e93a269b448b16887cbcddefd47059ef828
                                        </div>

                                        <div class="col-md-6">

                                                <label>
                                                    Responsibilities
                                                </label>
<<<<<<< HEAD


                                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

=======


                                                <textarea name="" id="" cols="30" rows="10" class="form-control" disabled></textarea>

>>>>>>> 42d25e93a269b448b16887cbcddefd47059ef828
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
                        </div>
                    <!-- Accordion End 1 -->

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>

                        </div>

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
                                    <tr>
                                        <td>Jane Doe</td>
                                        <td>7.5</td>
                                        <td>30 minutes</td>
                                        <td>1 hr</td>
                                        <td>June 10,2021</td>
                                        <td>Complete</td>
                                    </tr>
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
