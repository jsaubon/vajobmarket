@extends('layouts.js-profile-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                            <div class="row ">
                                <div class="col-md-12 text-center">Job Status</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">NONE</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Jobs Taken</div>
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
            <li class="nav-item" role="presentation">
                <a class="nav-link active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#js-candidate-detail" role="tab" aria-controls="home" aria-selected="true">
                    candidate detail
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#js-skillset" role="tab" aria-controls="profile" aria-selected="false">
                    skill sets
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#js-comments" role="tab" aria-controls="profile" aria-selected="false">
                    comments
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="js-candidate-detail" role="tabpanel" aria-labelledby="home-tab">
                <div class="container ">
                    <div class="card p-4 shadow">
                        <div class="container">
                            {{-- personal-info --}}

                            <form class="container" action="">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <textarea class="jobseeker-textarea textarea-review p-2 w-100" rows="6" style=" resize: none; background-color:white !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  placeholder="First Name">
                                          </div>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items" >
                                            <option>Gender</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  placeholder="Nationality">
                                          </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="address" placeholder="Address">
                                          </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="city" placeholder="City">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="state" placeholder="State / Province">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="country" placeholder="Country">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="zip" placeholder="Zip / Postal">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control profile-info-forms-items" id="state" placeholder="Availability">
                                                  </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control profile-info-forms-items" id="country" placeholder="Asking Rate / Month">
                                                  </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control profile-info-forms-items" id="zip" placeholder="Asking Rate / Hr">
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>
                                <hr>

                                {{-- education --}}
                                <h2 class="title-personal-info">Education</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="school" placeholder="Name of School">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control profile-info-forms-items" id="grad-year">
                                            <option>Year Graduated</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="course" placeholder="Course Graduated">
                                        </div>
                                    </div>
                                </div>

                                {{-- references --}}
                                <h2 class="title-personal-info">references</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items" id="social-media">
                                            <option>Social Media / Website</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="url-link" placeholder="Enter URL/Link here">
                                        </div>
                                    </div>
                                </div>
                                {{-- language --}}
                                <h2 class="title-personal-info">Languages</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="language" placeholder="Select Language">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items" id="written-proficiency">
                                            <option>Written Proficiency</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items" id="oras-proficiency">
                                            <option>Oral Proficiency</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- Job Experiences --}}
                                <h2 class="title-personal-info">Job Experiences</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="jobseeker-company-name" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" id="job-description" placeholder="Job Description">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items "  id="rate-month">
                                            <option>From</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control profile-info-forms-items"  id="rate-hour">
                                            <option>Until</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <textarea style ="background-color:white !important;" class="jobseeker-textarea textarea-review p-2 w-100" rows="8" style=" resize: none;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                        </textarea>
                                    </div>
                                </div>

                                {{--  buttons --}}
                                <div class="row" style="margin:70px auto 70px auto;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 d-flex justify-content-center">
                                        <a class="btn mr-2 btn-light back-btn" href="#">discard</a>
                                        <button class="btn btn-primary proceed-btn">save changes</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="js-skillset" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow">
                        <h2 class="title-personal-info">List of Specialized Skills</h2>
                        <hr>
                        {{-- skill-1 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control profile-info-forms-items" id="skill-title1">
                                        <option>Title</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2 ">
                                <select class="form-control profile-info-forms-items "  id="skill-experience1">
                                    <option>Experience</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-2 ">
                                <select class="form-control profile-info-forms-items"  id="skill-proficiency1">
                                    <option>Proficiency</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5"  style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                </textarea>
                            </div>
                        </div>

                        {{-- skill-2 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control profile-info-forms-items" id="skill-title2">
                                        <option>Title</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2 ">
                                <select class="form-control profile-info-forms-items "  id="skill-experience2">
                                    <option>Experience</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-2 ">
                                <select class="form-control profile-info-forms-items"  id="skill-proficiency2">
                                    <option>Proficiency</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5" style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                </textarea>
                            </div>
                        </div>

                        {{-- skill-3 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control profile-info-forms-items" id="skill-title3">
                                        <option>Title</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">

                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control profile-info-forms-items "  id="skill-experience3">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control profile-info-forms-items"  id="skill-proficiency3">
                                <option>Proficiency</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <textarea style="background-color:white !important; resize:none;" class="jobseeker-textarea textarea-review p-2 w-100" rows="5" style=" resize: none; min-height:50px !important;" wrap="hard">Nulla non sapien aliquet, dictum massa id, condimentum mauris. Quisque vulputate libero non mi eleifend egestas. Duis at mattis est. Morbi velit nisi, condimentum sed turpis in, ultricies rhoncus dolor. Vestibulum finibus porttitor rhoncus. Vivamus a mollis purus, vel posuere risus. Integer luctus mauris nisi, vulputate venenatis elit porttitor ut. Cras tempor, ante tincidunt ultrices molestie, ipsum elit tempor augue, et venenatis lectus purus vel urna.
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="js-comments" role="tabpanel" aria-labelledby="profile-tab">
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
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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

                    {{-- col2 --}}
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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

                     {{-- col3--}}
                    <div class="row h-100 d-flex px-4 flex-column">
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text" style="font-size:10px;">
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
                              <div class="row pb-4">
                                  <div class="col-md-12 text-center">
                                    <a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>
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
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
                        <div class="col-md-12 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                    <p style="font-size: 10px; margin:0;">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

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
