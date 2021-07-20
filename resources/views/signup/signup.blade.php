@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/signup.css')}}" rel="stylesheet">
<section class="container-fluid">
    <div class="container">
        <br/> <br/> <br/>
        <div class="d-flex justify-content-between">
            <a href="/">Back</a>
            <a href="/">Cancel</a>
        </div>
        <div class="d-flex justify-content-center">
            <div style="width:500px;">
                <p class="text-center"><b>SIGN UP</b></p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom active border-top-0  border-left-0 border-right-0 text-center text-dark" id="home-tab" data-toggle="tab" href="#business" role="tab" aria-controls="home" aria-selected="true">
                            As a Business Owner
                        </a>
                    </li>
                    <li class="nav-item" role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="profile-tab" data-toggle="tab" href="#job" role="tab" aria-controls="profile" aria-selected="false">
                            As a Job Seeker
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    {{-- business Owner --}}
                    <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-5">
                            <form action="/business">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*confirm password" />
                                <div class="button-style">
                                    <button class="btn btn-primary form-control mt-4">
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
                                    <span class="p-1">Facebook</span>
                                    <span class="p-1">Twitter</span>
                                    <span class="p-1">Google</span>
                                </div>
                                <p class="text-center">Already have an account? <a href="/">SIGN IN</a></p>
                            </div>
                        </div>
                    </div>
                    {{-- job Search --}}
                    <div class="tab-pane fade" id="job" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-5">
                            <form action="/jobterms">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*confirm password" />
                                <div class="button-style">
                                    <button class="btn btn-primary form-control mt-4">
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
                                    <span class="p-1">Facebook</span>
                                    <span class="p-1">Twitter</span>
                                    <span class="p-1">Google</span>
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
@endsection
