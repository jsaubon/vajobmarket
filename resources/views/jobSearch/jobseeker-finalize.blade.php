@extends('layouts.app')

@section('content')

<div class="container-fluid  personal-info">
    <div class="container d-flex flex-column justify-content-center h-100  w-50 pl-4" style="max-width:600px">
        <div class="row" >
            <div class="col-md-12 d-flex flex-column justify-content-center">
                <div class="title-jobseeker-landing container-fluid text-center"  >
                    <h2>In Job Seeker lorem.
                        Etiam non </h2>
                </div>
                <div class="content-jobseeker-landing container-fluid" >
                    <p > Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                         In eget sagittis lorem.
                         Etiam non pulvinar lacus.
                         Vivamus at ante orci. Donec
                         finibus, massa a imperdiet dictum,
                         libero ex mattis lorem, et egestas
                    </p>
                </div>


            </div>
        </div>
        <div class="row ml-4" style="height: 25px; margin-top:20px;">
            <div class="col-md-4 " >
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Virtual Assistant</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Digital Marketing Specialist</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Senior Web Developer</label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style="height: 25px; ">
            <div class="col-md-4 " >
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Appointment Setter</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Executive Assistant</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Social Media Manager</label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style="height: 25px;">
            <div class="col-md-4 " >
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Content Writer</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Finance & Accounting</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Web Developer</label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style="height: 25px;">
            <div class="col-md-4 " >
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Credit Repair Assistant</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                    <input type="checkbox" class="form-check-input pl-4" >
                    <label class="form-check-label p-1" for="exampleCheck1">Graphic Designer</label>
                </div>
            </div>

        </div>

        <div class="row ml-4" style="he


        <div class="row" style="margin-top: 20%;">
            <div class="container-fluid py-2 d-flex justify-content-center ">
                <a class="btn btn-primary proceed-btn d-flex flex-column justify-content-center" style="width: 120px; height: 30px; font-size:8px !important" href="#">
                    search for jobs
                </a>
                <a href="/jobseekerProfile" class="btn btn-light back-btn mx-2  d-flex flex-column justify-content-center" style="width: 120px; height: 30px; font-size:8px !important">
                    skip to dashboard
                </a>
            </div>
        </div>
     </div>
</div>

@endsection


