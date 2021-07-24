@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard">
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

                <div class="row pt-2" style="text-transform:uppercase; font-size: 12px;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">all job posts</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessAllJobPost" style="text-decoration: none !important; color:#767676; font-size:10px;">
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

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content d-flex justify-content-around">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content d-flex justify-content-around">
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr>

                    </tbody>

                </table>
                 <!---all job post end-->

                <!---applicants--->
                <div class="row pt-2" style="text-transform:uppercase; font-size: 12px;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">applicants</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessApplications" style="text-decoration: none !important; color:#767676; font-size:10px;">
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
                        <th class="text-center dash-table-title" scope="col">profile</th>
                        <th class="text-center dash-table-title" scope="col">rating</th>
                        <th class="text-center dash-table-title" scope="col">recomendation</th>
                        <th class="text-center dash-table-title" scope="col">Date applied</th>
                        <th class="text-center dash-table-title" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content d-flex justify-content-around">
                                <i class="fas fa-comment-alt"></i>
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-clipboard-check"></i>
                                <i class="fas fa-times-circle"></i>
                            </td>
                        </tr>

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content d-flex justify-content-around">
                                <i class="fas fa-comment-alt"></i>
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-clipboard-check"></i>
                                <i class="fas fa-times-circle"></i>
                            </td>
                        </tr>

                    </tbody>

                </table>
                 <!---applicants end-->


                <!---employee names--->
                <div class="row pt-2" style="text-transform:uppercase; font-size: 12px;  margin-top:40px;">
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">employees</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessEmployment" style="text-decoration: none !important; color:#767676; font-size:10px;">
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
                        <th class="text-center dash-table-title" scope="col">hours</th>
                        <th class="text-center dash-table-title" scope="col">adherance</th>
                        <th class="text-center dash-table-title" scope="col">break</th>
                        <th class="text-center dash-table-title" scope="col">date</th>
                        <th class="text-center dash-table-title" scope="col">remarks</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content" style="text-transform: uppercase;">undertime</td>
                        </tr>

                        <tr>
                            <td class="dash-table-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td class="text-center  dash-table-content">25</td>
                            <td class="text-center  dash-table-content">123</td>
                            <td class="text-center  dash-table-content">April 20, 2021</td>
                            <td class="text-center  dash-table-content">May 20, 2021</td>
                            <td class="text-center  dash-table-content" style="text-transform: uppercase;">complete</td>
                        </tr>

                    </tbody>

                </table>
                <!---employee names end--->
            </div>
        </div>
    <!-- Card End -->

    </div>
</div>
