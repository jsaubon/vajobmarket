@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/signup.css')}}" rel="stylesheet">
<section class="signupSection">
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
                <li class="nav-item" role="presentation" style="width:50%;">
                    <a class="nav-link active text-center text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        As a Business Owner
                    </a>
                </li>
                <li class="nav-item" role="presentation" style="width:50%;">
                    <a class="nav-link text-center text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        As a Job Seeker
                    </a>
                </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-5">
                            <form action="/dashboard">
                                <input type="text" class="form-control" placeholder="*email" />
                                <input type="password" class="form-control" placeholder="*password" />
                                <button class="btn btn-primary form-control">
                                    Sign-In
                                </button>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-5">
                            <form action="/dashboard">
                                <input type="text" class="form-control" placeholder="*email" />
                                <input type="password" class="form-control" placeholder="*password" />
                                <br/>
                                <button class="btn btn-primary form-control">
                                    Sign-In
                                </button>
                            </form>
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
</section>
@endsection