@extends('layouts.public-job-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
               <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="card-title job_post-job_title" > Excepteur sint occaecat cupidatat non proident</h3>
                    </div>
                    <div class="col-md-12">
                            <h6 class="card-subtitle mb-2 text-muted">
                                <div class="row" style="text-transform: capitalize;">
                                    <div class="d-flex justify-content-center w-100" >
                                        <div class="wrapper  py-0" style="background-color:#ecf6ff !important">
                                            <div class="job_post-job_type border border-primary rounded p-1 text-center" style="width: 80px; font-size:12px; color:#007bff;">
                                                fulltime
                                            </div>
                                        </div>
                                        <div  class="wrapper p-0 my-auto" style=" font-size:12px; background-color:#ecf6ff !important">
                                            <i class="fas fa-money-bill-wave-alt"></i>
                                            <span class="job_post-salary">
                                                salary negotiable
                                            </span>
                                        </div>
                                        <div  class="wrapper py-0 my-auto" style="font-size:12px; background-color:#ecf6ff !important">
                                            <i class="fas fa-clock"></i>

                                            <span class="job_post-start_date">
                                                posted:
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </h6>
                            <div class="row p-2 mb-2">
                                <div class="col-md-12 text-center">
                                    <div class="w-25 mx-auto d-flex justify-content-around">
                                        <i class="fab fa-facebook-f"></i>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-pinterest-p"></i>
                                        <i class="fab fa-linkedin-in"></i>
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12 text-center">
                                    <div class="mx-auto" style="width:320px;">
                                        <button type="button" style="text-transform: uppercase; font-size:10px " class=" w-100 card-link btn btn-primary py-2" data-toggle="modal" data-target="#job-application-modal">
                                            apply for this job
                                        </button>




                                        @include('modals.job-application')
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-2 pb-4">
                                <div class="col-md-12 text-center " style="text-transform: capitalize; font-size:12px; color:#f0af61; font-weight:600px;">
                                   <i>daily limit for job application (1/10)</i>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#job-desc-post" role="tab" aria-controls="home" aria-selected="true">
                    job description
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#job-skills-post" role="tab" aria-controls="profile" aria-selected="false">
                    skill required
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#job-details-post" role="tab" aria-controls="profile" aria-selected="false">
                    job details
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="job-desc-post" role="tabpanel" aria-labelledby="home-tab">
                <div class="container ">
                    <div class="card p-4 shadow" style="border-radius: 10px;">
                        <p class="card-text job_post-job_description" style="margin-bottom:60px;">
                            -
                        </p>
                    </div>

                    <div class="row pt-4 mt-2">
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
                    <hr class="lsep">

                    <div class="row pt-2" style="text-transform:uppercase; font-size: 18px;  margin-top:40px;">
                        <div class="col-md-12 title-personal-info text-center" style="margin: 0px; font-weight:200;">
                            related jobs posts for you
                        </div>
                    </div>

                    <div class="row py-4">
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
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="job-skills-post" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow job_post-skills_required" style="border-radius: 10px;">
                        <!-- <div class="row pt-4">
                            <div class="col-md-12 d-flex justify-content-between" >
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                    <div style="color:#007bff;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                            </div>
                        </div>
                        <hr> -->

                    </div>

                    <div class="row pt-4 mt-2">
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
                    <hr class="lsep">

                    <div class="row pt-2" style="text-transform:uppercase; font-size: 18px;  margin-top:40px;">
                        <div class="col-md-12 title-personal-info text-center" style="margin: 0px; font-weight:200;">
                            related jobs posts for you
                        </div>
                    </div>

                    <div class="row py-4">
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
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="job-details-post" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow" style="border-radius: 10px;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control profile-info-forms-items job_post-job_type"  placeholder="Job Type">
                                  </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control profile-info-forms-items job_post-salary" placeholder="Salary Rate Offered">
                                  </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control profile-info-forms-items job_post-start_date"  placeholder="Start Date">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control profile-info-forms-items job_post-end_date" placeholder="End Date">
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control profile-info-forms-items job_post-sector"  placeholder="Sector">
                                  </div>
                            </div>
                        </div>

                    </div>

                    <div class="row pt-4 mt-2">
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
                    <hr class="lsep">

                    <div class="row pt-2" style="text-transform:uppercase; font-size: 18px;  margin-top:40px;">
                        <div class="col-md-12 title-personal-info text-center" style="margin: 0px; font-weight:200;">
                            related jobs posts for you
                        </div>
                    </div>

                    <div class="row py-4">
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
                </div>
            </div>
        </div>
    </div>


<script>
$(document).ready(function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let job_id = urlParams.get('job_id');
    if(job_id) {
        getData('/api/PublicClientJobPost/'+job_id, ({data:res}) => {
            if(res.success) {
                console.log(res);
                let jobpost_data = res.data;
                let client = jobpost_data.client;
                let client_business_info = client.client_business_info;
                let client_job_post_required_skills = jobpost_data.client_job_post_required_skills;

                if(client_business_info.business_logo) {
                    $('.client_business_info-business_logo').attr('src',client_business_info.business_logo);
                }


                Object.keys(jobpost_data).map((field, key) => {
                    let element = $('.job_post-'+field);
                    if(element.length) {
                        element.html(jobpost_data[field]);
                        element.val(jobpost_data[field]);
                    }
                });
                Object.keys(client).map((field, key) => {
                    let element = $('.client-'+field);
                    if(element.length) {
                        element.html(client[field]);
                    }
                });
                Object.keys(client_business_info).map((field, key) => {
                    let element = $('.client_business_info-'+field);
                    if(element.length) {
                        element.html(client_business_info[field]);
                    }
                });


                client_job_post_required_skills.map((skills_required, key) => {
                    $('.job_post-skills_required').append(
                        '<div class="row pt-4">'+
                            '<div class="col-md-12 d-flex justify-content-between" >'+
                                    ''+skills_required.skill+''+
                                    '<div style="float: right">'+
                                    ''+skills_required.proficiency+''+
                                    '</div>'+
                            '</div>'+
                        '</div>'+
                        '<hr>'
                    );
                })
            }
        });
    }

});
</script>
@endsection
