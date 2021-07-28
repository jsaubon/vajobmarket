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

                       <img src="{{ asset('images/frontAssets/vajm-header-logo.png') }}" alt="" class="mylogo">

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
            <div class="header-items-right not_logged_in_nav">
                <a href="/jobs" class="p-1 ml-3 postJobBtn noDeco btn-outline-light"><small><b>JOB SEARCH</b></small></a>
                <a href="/posts" class="p-1 ml-3 mr-3 postJobBtn noDeco btn-outline-light"><small><b>POST A JOB</b></small></a>
                <button type="button " class="btn text-light" data-toggle="modal" data-target="#modalLogin">
                <small class="btn-signin"><b>SIGN-IN</b></small>
                </button>
            </div>
            @include('layouts.js-nav')
            @include('layouts.bo-nav')




            <!-- <div class="chat-support"></div> -->


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
                                    <a href="#" class="text-decoration-none " >
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                        <i class="fab fa-facebook-f my-auto" ></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none mx-2">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fas fa-user-clock my-auto"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fab fa-google-plus-g my-auto"></i>
                                        </div>
                                    </a>
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
                                    <a href="#" class="text-decoration-none " >
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                        <i class="fab fa-facebook-f my-auto" ></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none mx-2">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fas fa-user-clock my-auto"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fab fa-google-plus-g my-auto"></i>
                                        </div>
                                    </a>
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
                window.location.href = '/DashboardBusiness';
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
                // alert('job seeker successfully logged in');
                window.location.href = '/jobseekerDashboard';
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




</script>
