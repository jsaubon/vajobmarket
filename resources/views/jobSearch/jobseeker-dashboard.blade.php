@extends('layouts.js-blank-layout')

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
                    <div class="col-md-6 title-personal-info" style="margin: 0px;">current employment</div>
                    <div class="col-md-6 text-right">
                        <a href="/BusinessAllJobPost" style="text-decoration: none !important; color:#767676; font-size:10px;">
                        view
                        <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <hr class="lsep">

                <div class="row px-2 text-center">
                    <div class="col-md-2 dash-text">
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

                <div class="row text-left">
                    <div class="col-md-5 dash-text">
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

                <hr>


                <div class="row">
                    <div class="col-md-6">
                        <div class="row pt-2" style="text-transform:uppercase; font-size: 12px;  margin-top:40px;">
                            <div class="col-md-6 title-personal-info" style="margin: 0px;">jobs you applied for</div>
                            <div class="col-md-6 text-right">
                                <a href="/BusinessAllJobPost" style="text-decoration: none !important; color:#767676; font-size:10px;">
                                see more
                                <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <hr class="lsep">
                    </div>
                    <div class="col-md-6">
                        <div class="row pt-2" style="text-transform:uppercase; font-size: 12px;  margin-top:40px;">
                            <div class="col-md-6 title-personal-info" style="margin: 0px;">on going recruitement</div>
                            <div class="col-md-6 text-right">
                                <a href="/BusinessAllJobPost" style="text-decoration: none !important; color:#767676; font-size:10px;">
                                see more
                                <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <hr class="lsep">
                    </div>
                </div>


                    <!--accordions-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="card border-0">
                              <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn w-100 text-left" type="button" data-toggle="collapse" data-target="#job-title1" aria-expanded="true" aria-controls="collapseOne">
                                    JOB TITLE: Lorem ipsum dolor sit amet, consectetur(full time)
                                  </button>
                                </h2>
                              </div>

                              <div id="job-title1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <table class="row-border hover border-bottom" id="jobtitletable">
                                        <thead>
                                            <tr>
                                            <th class="text-center dash-table-title" scope="col">subjec</th>
                                            <th class="text-center dash-table-title" scope="col">duration</th>
                                            <th class="text-center dash-table-title" scope="col">time</th>
                                            <th class="text-center dash-table-title" scope="col">date</th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="dash-table-content">consectetur adipisicing elit.</td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>
                                            </tr>

                                            <tr>
                                                <td class="dash-table-content">Lorem ipsum dolor </td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>
                              </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                                    <h2 class="mb-0">
                                      <button class="btn w-100 text-left" type="button" data-toggle="collapse" data-target="#job-title2" aria-expanded="true" aria-controls="collapseOne">
                                        JOB TITLE: Lorem ipsum dolor sit amet, consectetur(part time)
                                      </button>
                                    </h2>
                                  </div>
                              <div id="job-title2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="row-border hover border-bottom" id="jobtitletable2">
                                        <thead>
                                            <tr>
                                            <th class="text-center dash-table-title" scope="col">subjec</th>
                                            <th class="text-center dash-table-title" scope="col">duration</th>
                                            <th class="text-center dash-table-title" scope="col">time</th>
                                            <th class="text-center dash-table-title" scope="col">date</th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="dash-table-content">consectetur adipisicing elit.</td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>
                                            </tr>

                                            <tr>
                                                <td class="dash-table-content">Lorem ipsum dolor </td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="card border-0">
                              <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                                <h2 class="mb-0">
                                  <button class="btn w-100 text-left" type="button" data-toggle="collapse" data-target="#job-title3" aria-expanded="true" aria-controls="collapseOne">
                                    JOB TITLE: Lorem ipsum dolor sit amet, consectetur(full time)
                                  </button>
                                </h2>
                              </div>

                              <div id="job-title3" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <table class="row-border hover border-bottom" id="jobtitletable3">
                                        <thead>
                                            <tr>
                                            <th class="text-center dash-table-title" scope="col">subjec</th>
                                            <th class="text-center dash-table-title" scope="col">duration</th>
                                            <th class="text-center dash-table-title" scope="col">time</th>
                                            <th class="text-center dash-table-title" scope="col">date</th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="dash-table-content">consectetur adipisicing elit.</td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>
                                            </tr>

                                            <tr>
                                                <td class="dash-table-content">Lorem ipsum dolor </td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>
                              </div>
                            </div>
                            <div class="card border-0">
                                <div class="card-header shadow-sm rounded mb-2 p-0 shadow-md dash-accordion" id="headingOne">
                                    <h2 class="mb-0">
                                      <button class="btn w-100 text-left" type="button" data-toggle="collapse" data-target="#job-title4" aria-expanded="true" aria-controls="collapseOne">
                                        JOB TITLE: Lorem ipsum dolor sit amet, consectetur(part time)
                                      </button>
                                    </h2>
                                  </div>
                              <div id="job-title4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="row-border hover border-bottom" id="jobtitletable4">
                                        <thead>
                                            <tr>
                                            <th class="text-center dash-table-title" scope="col">subjec</th>
                                            <th class="text-center dash-table-title" scope="col">duration</th>
                                            <th class="text-center dash-table-title" scope="col">time</th>
                                            <th class="text-center dash-table-title" scope="col">date</th>

                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="dash-table-content">consectetur adipisicing elit.</td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>
                                            </tr>

                                            <tr>
                                                <td class="dash-table-content">Lorem ipsum dolor </td>
                                                <td class="text-center  dash-table-content">25</td>
                                                <td class="text-center  dash-table-content">123</td>
                                                <td class="text-center  dash-table-content">April 20, 2021</td>

                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--accordions end-->
                <hr>
                <div class="row pt-3">
                    <div class="col-md-12 d-flex justify-content-center" style="gap:8px;">
                        <div class="boxes">free</div>
                        <div class="boxes">illustration</div>
                        <div class="boxes">graphics</div>
                        <div class="boxes">ui</div>
                        <div class="boxes">interface</div>
                        <div class="boxes">iphone</div>
                        <div class="boxes">design</div>

                    </div>
                </div>
                    <!---search--->
                <div class="row pt-4 ">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="input-group mb-3 shadow box-outline-none">
                            <input type="text" style="border-right: none;" class="form-control box-outline-none placeholder-style" placeholder="Search for more jobs" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text bg-white" style="border-left: none;" id="basic-addon2">
                                <i class="fas fa-search"></i>
                              </span>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <hr>
                    <!---search end--->

                    <div class="row pt-2" style="text-transform:uppercase; font-size: 18px;  margin-top:40px;">
                        <div class="col-md-12 title-personal-info text-center" style="margin: 0px; font-weight:200;">
                            related jobs posts for you
                        </div>
                    </div>
                    <!----cards ---->
                    <div class="row pt-4">
                        <div class="col-md-4">
                            <div class="card  shadow" style="border-radius: 10px;" >
                                <div class="card-body">
                                  <h5 class="card-title" style="font-size:15px;"> Excepteur sint occaecat cupidatat non proident</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">
                                      <div class="row" style="text-transform: capitalize;">
                                          <div class="col-md-2 pr-0" style="font-size:9px;">
                                            <div class="border border-primary rounded px-1" style="width: 42px;">fulltime</div>
                                            </div>
                                          <div class="col-md-4 " style="font-size:9px;">
                                            <i class="fas fa-building"></i>
                                            my busniess name
                                           </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-money-bill-wave-alt"></i>
                                            salaray negotiable
                                          </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-clock"></i>
                                            posted: june 25,2021
                                          </div>
                                      </div>
                                  </h6>
                                  <hr class="lsep">
                                  <p class="card-text" style="font-size:10px;">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.
                                  </p>
                                  <div class="row pb-4">
                                      <div class="col-md-12 text-center">
                                        <a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  shadow" style="border-radius: 10px;" >
                                <div class="card-body">
                                  <h5 class="card-title" style="font-size:15px;"> Excepteur sint occaecat cupidatat non proident</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">
                                      <div class="row" style="text-transform: capitalize;">
                                          <div class="col-md-2 pr-0" style="font-size:9px;">
                                            <div class="border border-primary rounded px-1" style="width: 42px;">fulltime</div>
                                            </div>
                                          <div class="col-md-4 " style="font-size:9px;">
                                            <i class="fas fa-building"></i>
                                            my busniess name
                                           </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-money-bill-wave-alt"></i>
                                            salaray negotiable
                                          </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-clock"></i>
                                            posted: june 25,2021
                                          </div>
                                      </div>
                                  </h6>
                                  <hr class="lsep">
                                  <p class="card-text" style="font-size:10px;">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.
                                  </p>
                                  <div class="row pb-4">
                                      <div class="col-md-12 text-center">
                                        <a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  shadow" style="border-radius: 10px;" >
                                <div class="card-body">
                                  <h5 class="card-title" style="font-size:15px;"> Excepteur sint occaecat cupidatat non proident</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">
                                      <div class="row" style="text-transform: capitalize;">
                                          <div class="col-md-2 pr-0" style="font-size:9px;">
                                            <div class="border border-primary rounded px-1" style="width: 42px;">fulltime</div>
                                            </div>
                                          <div class="col-md-4 " style="font-size:9px;">
                                            <i class="fas fa-building"></i>
                                            my busniess name
                                           </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-money-bill-wave-alt"></i>
                                            salaray negotiable
                                          </div>
                                          <div class="col-md-3 " style="font-size:8px;">
                                            <i class="fas fa-clock"></i>
                                            posted: june 25,2021
                                          </div>
                                      </div>
                                  </h6>
                                  <hr class="lsep">
                                  <p class="card-text" style="font-size:10px;">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur
                                    <br><br>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.
                                  </p>
                                  <div class="row pb-4">
                                      <div class="col-md-12 text-center">
                                        <a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----cards-end ---->

        </div>
        <!-- Card End -->

    </div>
</div>
