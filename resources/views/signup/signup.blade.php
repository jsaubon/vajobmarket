@extends('layouts.app')

@section('content')

<section class="container-fluid">
    <div class="container">
        <br/> <br/> <br/>
        <div class="d-flex justify-content-between pt-4">
            <a href="/">Back</a>
            <a href="/">Cancel</a>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <div style="width:500px;">
                <p class="text-center"><b>SIGN UP</b></p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item m-0" role="presentation" style="width:50%;">
                        <a class="nav-link bo-nav-tab active-bottom  border-top-0  border-left-0 border-right-0 text-center text-dark" id="home-tab" data-toggle="tab" href="#bo-signup-tab" role="tab" aria-controls="home" aria-selected="true">
                            As a Business Owner
                        </a>
                    </li>
                    <li class="nav-item m-0" role="presentation" style="width:50%;">
                        <a class="nav-link js-nav-tab active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="profile-tab" data-toggle="tab" href="#js-signup-tab" role="tab" aria-controls="profile" aria-selected="false">
                            As a Job Seeker
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    {{-- business Owner --}}
                    <div class="tab-pane fade show active bo-nav-tab-content" id="bo-signup-tab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-5">
                            <form action="/business" id="signup_form_bo">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="email" required class="signup_email_bo form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" required class="signup_password_bo form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <input type="password" required class="signup_confirm_password_bo form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*confirm password" />

                                <div id="signup_error_bo" class="hide">
                                    <div class="alert alert-danger" id="signup_error_bo_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control mt-4" type="submit">
                                        Sign-Up
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
                                <p class="text-center">Already have an account? <a href="/">SIGN IN</a></p>
                            </div>
                        </div>
                    </div>
                    {{-- job Search --}}
                    <div class="tab-pane fade js-nav-tab-content" id="js-signup-tab" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-5">
                            <form action="/jobterms" id="signup_form_js">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="email" required class=" signup_email_js form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" required class=" signup_password_js form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <input type="password" required class=" signup_confirm_password_js form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*confirm password" />
                                <div id="signup_error_js" class="hide">
                                    <div class="alert alert-danger" id="signup_error_js_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control mt-4" type="submit">
                                        Sign-Up
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
                                <p class="text-center">Already have an account? <a href="/">SIGN IN</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</section>

<script>


const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
let type = urlParams.get('type');
if(type) {
    if(type == 'bo') {
        $('.bo-nav-tab').addClass('active');
        $('.bo-nav-tab-content').addClass('active');
        $('.bo-nav-tab-content').addClass('show');
        $('.js-nav-tab').removeClass('active');
        $('.js-nav-tab-content').removeClass('active');
    }
    if(type == 'js') {
        $('.js-nav-tab').addClass('active');
        $('.js-nav-tab-content').addClass('active');
        $('.js-nav-tab-content').addClass('show');
        $('.bo-nav-tab').removeClass('active');
        $('.bo-nav-tab-content').removeClass('active');
    }
} else {
        $('.bo-nav-tab').addClass('active');
        $('.bo-nav-tab-content').addClass('active');
}
    $(document).ready(function() {
        $('#signup_form_bo').on('submit', function(e) {
            e.preventDefault();
            let email = $('.signup_email_bo').val();
            let password = $('.signup_password_bo').val();
            let confirm_password = $('.signup_confirm_password_bo').val();
            if(password != confirm_password) {
                // alert('Confirm Password Mismatch, please try again');
                $('#signup_error_bo').removeClass('hide');
                $('#signup_error_bo_message').html('Confirm Password Mismatch, please try again');
            } else {
                $('#signup_error_bo').addClass('hide');
                $('#signup_error_bo_message').html('');
                let data = {
                    email: email,
                    password: password,
                    type: 'Client'
                }
                let url = window.location.origin+'/api/register';
                postData(url,data,({data:res}) => {
                    if(res.userdata.client) {
                        localStorage.token = res.token;
                        localStorage.userdata = JSON.stringify(res.userdata);
                        window.location.href = '/business';
                    } else {
                        alert('Please Login as Job Seeker');
                    }
                    
                }, err =>  {
                    console.log('err',err)
                    if(err.response.data.error) {
                        $('#signup_error_bo').removeClass('hide');
                        $('#signup_error_bo_message').html(err.response.data.error);
                    } else {
                        $('#signup_error_bo').removeClass('hide');
                        $('#signup_error_bo_message').html(Object.values(err.response.data.errors)[0][0]);
                    }
                });
            }
        });
        $('#signup_form_js').on('submit', function(e) {
            e.preventDefault();
            let email = $('.signup_email_js').val();
            let password = $('.signup_password_js').val();
            let confirm_password = $('.signup_confirm_password_js').val();
            if(password != confirm_password) {
                // alert('Confirm Password Mismatch, please try again');
                $('#signup_error_js').removeClass('hide');
                $('#signup_error_js_message').html('Confirm Password Mismatch, please try again');
            } else {
                $('#signup_error_js').addClass('hide');
                $('#signup_error_js_message').html('');
                let data = {
                    email: email,
                    password: password,
                    type: 'JobSeeker'
                }
                let url = window.location.origin+'/api/register';
                postData(url,data,({data:res}) => {
                    if(res.userdata.jobseeker) {
                        localStorage.token = res.token;
                        localStorage.userdata = JSON.stringify(res.userdata);
                        window.location.href = '/jobterms';
                    } else {
                        alert('Please Login as Business Owner');
                    }
                    
                }, err =>  {
                    if(err.response.data.error) {
                        $('#signup_error_js').removeClass('hide');
                        $('#signup_error_js_message').html(err.response.data.error);
                    }else {
                        $('#signup_error_js').removeClass('hide');
                        $('#signup_error_js_message').html(Object.values(err.response.data.errors)[0][0]);
                    }
                });
            }
        });
    });


</script>
@endsection
