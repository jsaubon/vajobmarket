@extends('layouts.profile-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                        <div class="row ">
                            <div class="col-md-12 text-center">Job Posts</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center h2">6</div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">VA Hired</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">20</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Profile Rating</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item  m-0" role="presentation">
                <a class="nav-link title-personal-info active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#posts-pro" role="tab" aria-controls="home" aria-selected="true">
                    posts
                </a>
            </li>
            <li class="nav-item  m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#company-pro" role="tab" aria-controls="profile" aria-selected="false">
                    company profile
                </a>
            </li>
            <li class="nav-item  m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#comments-pro" role="tab" aria-controls="profile" aria-selected="false">
                    comments
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane h-auto fade show active" id="posts-pro" role="tabpanel" aria-labelledby="home-tab">
                <div class="container pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            Showing 6 posts out of 25
                        </div>
                    </div>
                </div>
                <div class="container d-flex h-auto" style="gap:10px;">
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur

                                <br><br>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.
                              </p>
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 card  shadow" style="border-radius: 10px;" >
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
                              <p class="card-text title-personal-info m-0" style="font-size:10px; color:black !important;">
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
                              <div class="row py-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="company-pro" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="row my-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a class="btn btn-light back-btn" style="border-radius: 50px; font-family: 'oswald',san-serif;" href="/BusinessProfilePersonal">Edit</a>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-title d-flex">
                            <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                            </div>
                            <div class="my-auto pl-2">
                                <h3 style="font-size:15px; " class="title-personal-info m-0">My Company Name</h3>
                                <p style="font-size: 10px; " class="title-personal-info m-0">
                                  Type of business
                                </p>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text title-personal-info m-0" style="margin-bottom:60px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris imperdiet ante hendrerit massa dignissim scelerisque.
                            Nunc pellentesque blandit placerat. Suspendisse viverra porta dolor,
                            commodo eleifend mauris pretium ac. Nam pellentesque magna id quam suscipit
                            ellentesque. Proin a ultricies lectus. Phasellus ut mauris nec lacus lobortis
                            posuere. Aliquam dignissim pretium neque, id semper diam ornare sit amet.
                            Cras massa augue, luctus quis pharetra vel, egestas nec lectus. Maecenas vel
                            tellus tempus, tristique urna et, mattis nunc. Integer aliquet rutrum leo,
                            vitae condimentum libero porta ut. Donec pharetra ut ex sit amet ornare.
                            Donec elit neque, egestas quis purus ut, faucibus dignissim lacus. Nunc
                            mollis porttitor ligula porttitor faucibus.
                            Praesent ut orci rhoncus enim laoreet elementum
                            id a ligula. Aenean fringilla hendrerit pretium. Morbi ut
                            lacus tincidunt justo interdum blandit sit amet vel dui.
                            Nam vestibulum sapien id leo ornare elementum. In mollis
                            mauris eu nunc aliquet, ac mollis lectus faucibus. Pellentesque
                            posuere nisl id turpis aliquet, at fermentum lectus commodo. Sed tincidunt
                            dolor vitae cursus pellentesque. Curabitur sollicitudin maximus ipsum, id
                            euismod augue pretium quis. Morbi gravida pellentesque egestas. Donec vel
                            urna pretium, aliquam quam sed, commodo tellus. Sed ipsum eros, dignissim
                            eget finibus eu, rutrum eget sapien. Phasellus ante lacus, volutpat vel velit
                            sed, porta euismod felis.
                        </p>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="comments-pro" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            Showing 6 comments out of 25
                        </div>
                    </div>
                </div>
                <div class="container d-flex h-auto" style="gap:10px;">

                    {{-- comments --}}
                      {{-- col1 --}}
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    {{-- col2 --}}
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur
                                <br><br>

                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.
                              </p>
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                     {{-- col3--}}
                     <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
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
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                     {{-- comments end--}}
                </div>
                <div class="container">
                    <hr>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>

@endsection

