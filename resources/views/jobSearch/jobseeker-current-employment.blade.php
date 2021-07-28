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
                    <div class="accordion" id="accordionExample">
                        <div class="card border-0 mx-2">
                          <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                            <h2 class="mb-0 ">
                              <button class="btn text-capitalize w-100 d-flex  justify-content-between text-left" style="font-family: 'Oswald', sans-serif;" type="button" data-toggle="collapse" data-target="#employment1" aria-expanded="true" aria-controls="collapseOne" >
                                <div> Name Lastname (content writer)</div>
                                <div class="my-auto">
                                    <i class="fas fa-chevron-down my-auto "></i>
                                    {{-- <i class="fas fa-chevron-up" ></i> --}}
                                </div>
                              </button>
                            </h2>
                          </div>

                          <div id="employment1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">

                                <div class="row px-2 text-center ">
                                    <div class="col-md-2 dash-text ">
                                        employment status : fulltime
                                    </div>
                                    <div class="col-md-2 dash-text">
                                        salary: $140/month
                                    </div>
                                    <div class="col-md-4 dash-text">
                                        working hours: 40 hrs/week
                                    </div>
                                    <div class="col-md-2 dash-text">
                                        date hired: july 9, 2021
                                    </div>
                                    <div class="col-md-2 dash-text">
                                        contract: 1yr
                                    </div>
                                </div>
                                <hr>

                                <div class="row text-left ml-1 ">
                                    <div class="col-md-5 dash-text pl-0">
                                        Job Description
                                    </div>
                                    <div class="col-md-1 dash-text">

                                    </div>
                                    <div class="col-md-6 dash-text">
                                        Responsibilites
                                    </div>
                                </div>

                                <div class="row text-left pt-4 pl-3">
                                    <div class="col-md-5 dash-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                         Ut enim ad minim veniam, quis nostrud
                                         exercitation ullamco laboris nisi ut aliquip
                                         ex ea commodo consequat. Duis aute irure
                                         dolor in reprehenderit in voluptate velit
                                         esse cillum dolore eu fugiat nulla pariatur.
                                         Excepteur sint occaecat cupidatat non proident,
                                         sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-6 dash-text">
                                       <ol>
                                           <li>Lorem ipsum dolor sit amet</li>
                                           <li>incididunt ut labore et dolore</li>
                                           <li>ex ea commodo consequat</li>
                                           <li>officia deserunt mollit anim id</li>
                                       </ol>
                                    </div>
                                </div>

                                <div class="row pt-4 ">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <div class="d-flex justify-content-around" style="width: 30%;">
                                            <a href="/BusinessPostJob" style="text-decoration:none;">
                                                <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px; ">
                                                    <i class="fas fa-user-clock my-auto" style="font-size:12px;" ></i>&nbsp;
                                                    <b class="my-auto" style="text-transform: uppercase;">clock in</b>
                                                </div>
                                            </a>
                                            <a href="/BusinessPostJob" style="text-decoration:none;">
                                                <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">
                                                    <i class="fas fa-coffee my-auto mr-1" style="font-size:12px;" ></i>&nbsp;
                                                    <b class="my-auto" style="text-transform: uppercase;">break</b>
                                                </div>
                                            </a>
                                            <a href="/BusinessPostJob" style="text-decoration:none;">
                                                <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">
                                                    <i class="fas fa-times-circle my-auto" style="font-size:12px;" ></i>&nbsp;
                                                    <b class="my-auto" style="text-transform: uppercase;">clock out</b>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          </div>
                        </div>
                        <div class="card border-0 mx-2">
                            <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                              <h2 class="mb-0 ">
                                <button class="btn text-capitalize w-100 d-flex  justify-content-between text-left" style="font-family: 'Oswald', sans-serif;" type="button" data-toggle="collapse" data-target="#employment2" aria-expanded="true" aria-controls="collapseOne" >
                                  <div> Name Lastname (Graphics Designer)</div>
                                  <div class="my-auto">
                                      <i class="fas fa-chevron-down my-auto "></i>
                                      {{-- <i class="fas fa-chevron-up" ></i> --}}
                                  </div>
                                </button>
                              </h2>
                            </div>

                            <div id="employment2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">

                                  <div class="row px-2 text-center ">
                                      <div class="col-md-2 dash-text ">
                                          employment status : fulltime
                                      </div>
                                      <div class="col-md-2 dash-text">
                                          salary: $140/month
                                      </div>
                                      <div class="col-md-4 dash-text">
                                          working hours: 40 hrs/week
                                      </div>
                                      <div class="col-md-2 dash-text">
                                          date hired: july 9, 2021
                                      </div>
                                      <div class="col-md-2 dash-text">
                                          contract: 1yr
                                      </div>
                                  </div>
                                  <hr>

                                  <div class="row text-left ml-1 ">
                                      <div class="col-md-5 dash-text pl-0">
                                          Job Description
                                      </div>
                                      <div class="col-md-1 dash-text">

                                      </div>
                                      <div class="col-md-6 dash-text">
                                          Responsibilites
                                      </div>
                                  </div>

                                  <div class="row text-left pt-4 pl-3">
                                      <div class="col-md-5 dash-text">
                                          Lorem ipsum dolor sit amet, consectetur
                                          adipiscing elit, sed do eiusmod tempor
                                          incididunt ut labore et dolore magna aliqua.
                                           Ut enim ad minim veniam, quis nostrud
                                           exercitation ullamco laboris nisi ut aliquip
                                           ex ea commodo consequat. Duis aute irure
                                           dolor in reprehenderit in voluptate velit
                                           esse cillum dolore eu fugiat nulla pariatur.
                                           Excepteur sint occaecat cupidatat non proident,
                                           sunt in culpa qui officia deserunt mollit anim id est laborum.
                                      </div>
                                      <div class="col-md-1">

                                      </div>
                                      <div class="col-md-6 dash-text">
                                         <ol>
                                             <li>Lorem ipsum dolor sit amet</li>
                                             <li>incididunt ut labore et dolore</li>
                                             <li>ex ea commodo consequat</li>
                                             <li>officia deserunt mollit anim id</li>
                                         </ol>
                                      </div>
                                  </div>

                                  <div class="row pt-4 ">
                                      <div class="col-md-12 d-flex justify-content-end">
                                          <div class="d-flex justify-content-around" style="width: 30%;">
                                              <a href="/BusinessPostJob" style="text-decoration:none;">
                                                  <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px; ">
                                                      <i class="fas fa-user-clock my-auto" style="font-size:12px;" ></i>&nbsp;
                                                      <b class="my-auto" style="text-transform: uppercase;">clock in</b>
                                                  </div>
                                              </a>
                                              <a href="/BusinessPostJob" style="text-decoration:none;">
                                                  <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">
                                                      <i class="fas fa-coffee my-auto mr-1" style="font-size:12px;" ></i>&nbsp;
                                                      <b class="my-auto" style="text-transform: uppercase;">break</b>
                                                  </div>
                                              </a>
                                              <a href="/BusinessPostJob" style="text-decoration:none;">
                                                  <div  class="postJobBtn py-1 d-flex justify-content-center" style="margin:0 !important;color:#383232; width:100px;">
                                                      <i class="fas fa-times-circle my-auto" style="font-size:12px;" ></i>&nbsp;
                                                      <b class="my-auto" style="text-transform: uppercase;">clock out</b>
                                                  </div>
                                              </a>
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
