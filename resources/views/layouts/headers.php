<?php
$brand = ["JOB MARKET" => "/"];
$navBrand = array_keys($brand);
$obj = [
    "ABOUT" => "/about",
    "SOLUTION" => "#solution",
    "PRICING" => "/pricing",
    "BLOGS" => "#blogs",
    "JOB ACADEMY" => "#academy"
];

?>
<style>
    .hide {
        display: none;
    }
</style>
<div class="header ">
            <div class="header-items-left">

                    <a class="my-auto px-3 mb-3" style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>">
                    <div class="title my-auto h-100  mylogo"></div>
                    </a>

                <div class="nav-titles my-auto ml-4 px-3">
                    <?php
                    foreach(array_keys($obj) as $row) {
                        if ($row == "JOB ACADEMY") {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4 navitemsPlus navitems my-auto text-decoration-none"><b><small><b><?= $row ?></b></small></b></a>
                            <?php
                        } else {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4  text-light navitems my-auto text-decoration-none"><small><b><?= $row ?></b></small></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
<<<<<<< HEAD
            <div class="header-items-right ">
                <a href="/jobs" class="p-1 ml-3 my-auto postJobBtn btn-outline-light noDeco"><small><b>JOB SEARCH</b></small></a>
                <a href="/posts" class="p-1 ml-3 mr-3 my-auto postJobBtn btn-outline-light noDeco"><small><b>POST A JOB</b></small></a>
                <button type="button " class="btn text-light my-auto" data-toggle="modal" data-target="#exampleModal">
                <small class="btn-signin my-auto"><b>SIGN-IN</b></small>
=======
            <div class="header-items-right not_logged_in_nav">
                <a href="/jobs" class="p-1 ml-3 postJobBtn noDeco"><small><b>JOB SEARCH</b></small></a>
                <a href="/posts" class="p-1 ml-3 mr-3 postJobBtn noDeco"><small><b>POST A JOB</b></small></a>
                <button type="button " class="btn text-light" data-toggle="modal" data-target="#modalLogin">
                <small class="btn-signin"><b>SIGN-IN</b></small>
>>>>>>> 72489ddc181ec7bf266ea88726d0fb97c4832e2b
                </button>
            </div>
            <div class="header-items-right js-nav">
                <div  class="px-2 py-1 ml-3 postJobBtn d-flex justify-content-around" style="margin:0 !important; width:95px;color:#383232 ">
                    <i class="fas fa-plus-circle my-auto" style="font-size:12px;" ></i>&nbsp;
                    <b class="my-auto">Post A Job</b>
                </div>
                <div  class="p-1 noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-bell noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div  class="p-1  noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-user noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div class="p-1 ml-3 mr-3 noDeco user-btn user-btn-js">
                    <small><b class="my-auto">Username</b></small>
                    <i class="fas fa-chevron-down my-auto" style="font-size:10px;"></i>
                </div>
            </div>
            <div class="small-nav-js small-nav shadow js-nav">
                <ul>
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          dashboard
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/jobseekerProfile" class="small-nav-link">
                        <li class="small-nav-list">
                          profile
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                            job application
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          employment
                        </li>
                    </a>
                    <hr class=" m-0">
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          messages
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/jobseekerUpdateDetails" class="small-nav-link">
                        <li class="small-nav-list">
                          settings
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link btn-logout">
                        <li class="small-nav-list">
                          logout
                        </li>
                    </a>
                </ul>
            </div>

            <div class="header-items-right bo-nav">
                <div  class="px-2 py-1 ml-3 postJobBtn d-flex justify-content-around" style="margin:0 !important; width:95px;color:#383232 ">
                    <i class="fas fa-plus-circle my-auto" style="font-size:12px;" ></i>&nbsp;
                    <b class="my-auto">Post A Job</b>
                </div>
                <div  class="p-1 noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-bell noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div  class="p-1  noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-user noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div class="p-1 ml-3 mr-3 noDeco user-btn user-btn-bo">
                    <small><b class="my-auto">Username</b></small>
                    <i class="fas fa-chevron-down my-auto" style="font-size:10px;"></i>
                </div>
            </div>
            <div class="small-nav small-nav-bo shadow bo-nav">
                <ul>
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          dashboard
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessProfile" class="small-nav-link">
                        <li class="small-nav-list">
                          profile
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessAllJobPost" class="small-nav-link">
                        <li class="small-nav-list">
                            Job Posts
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessApplications" class="small-nav-link">
                        <li class="small-nav-list">
                          application
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessEmployment" class="small-nav-link">
                        <li class="small-nav-list">
                          employment
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          message
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessProfileCompany" class="small-nav-link">
                        <li class="small-nav-list">
                          settings
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link btn-logout">
                        <li class="small-nav-list">
                          logout
                        </li>
                    </a>
                </ul>
            </div>


            <div class="chat-support"></div>


</div>


<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="d-flex justify-content-end">
        <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="modal-body">
                <p class="text-center"><b>SIGN IN</b></p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom active border-top-0  border-left-0 border-right-0 text-center text-dark" id="home-tab" data-toggle="tab" href="#business-in" role="tab" aria-controls="home" aria-selected="true">
                            As a Business Owner
                        </a>
                    </li>
                    <li class="nav-item" role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="profile-tab" data-toggle="tab" href="#job-in" role="tab" aria-controls="profile" aria-selected="false">
                            As a Job Seeker
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                   <!-- business Owner  -->
                    <div class="tab-pane fade show active" id="business-in" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-5">
                            <form id="form_bo">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" required class="bo_email form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" required class="bo_password form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <div id="signin_error_bo" class="hide">
                                    <div class="alert alert-danger" id="signin_error_bo_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control  mt-4" type="submit">
                                        Sign-In
                                    </button>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <div class="p-3">
                                <p class="text-center">
                                    Sign-up using your social media account
                                </p>
                                <div class="d-flex justify-content-center mb-5">
                                    <span class="p-1">Facebook</span>
                                    <span class="p-1">Twitter</span>
                                    <span class="p-1">Google</span>
                                </div>
                                <p class="text-center">Dont have an account? <a href="/signup">SIGN UP</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- job Search  -->
                    <div class="tab-pane fade" id="job-in" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-5">
                            <form id="form_js">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" class="js_email form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" class="js_password form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <div id="signin_error_js" class="hide">
                                    <div class="alert alert-danger" id="signin_error_js_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control signup-js mt-4">
                                        Sign-In
                                    </button>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <div class="p-3">
                                <p class="text-center">
                                    Sign-up using your social media account
                                </p>
                                <div class="d-flex justify-content-center mb-5">
                                    <span class="p-1">Facebook</span>
                                    <span class="p-1">Twitter</span>
                                    <span class="p-1">Google</span>
                                </div>
                                <p class="text-center">Don't have an account? <a href="/signup">SIGN UP</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
  </div>
</div>


<script>
    $('.btn-logout').on('click', function(e) {
        e.preventDefault();
        localStorage.removeItem('token');
        localStorage.removeItem('userdata');
        window.location.href = '/';
    });
</script>

<script>

    $(document).ready(function() {
        $('#form_bo').on('submit', function(e) {
            e.preventDefault();
            let email = $('.bo_email').val();
            let password = $('.bo_password').val();
            let data = {
                email: email,
                password: password,
            }

            let url = window.location.origin+'/api/login';
            postData(url,data,function({data: res}) {
                localStorage.token = res.token;
                localStorage.userdata = JSON.stringify(res.userdata);
                // alert('business owner successfully logged in');
            }, err =>  {
                if(err.response.data.error) {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(err.response.data.error);
                }else {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(Object.values(err.response.data.errors)[0][0]);
                }
            });
        });

        $('#form_js').on('submit', function(e) {
            e.preventDefault();
            let email = $('.js_email').val();
            let password = $('.js_password').val();
            let data = {
                email: email,
                password: password,
            }
            let url = window.location.origin+'/api/login';
            postData(url,data,function({data: res}) {
                localStorage.token = res.token;
                localStorage.userdata = JSON.stringify(res.userdata);
                alert('job seeker successfully logged in');
            }, err =>  {
                if(err.response.data.error) {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(err.response.data.error);
                }else {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(Object.values(err.response.data.errors)[0][0]);
                }
            });
        });
    });

<<<<<<< HEAD

</script>
=======
    

    
</script>
>>>>>>> 72489ddc181ec7bf266ea88726d0fb97c4832e2b
