@extends('layouts.app')

@section('content')

<style>
    @media screen and (max-width: 780px) {
        .progress-steps {
            display: none !important;
        }

        .w-75 {
            width: 100% !important;
        }

        .container {
            padding: 10px;
        }
    }
</style>
<div class="container-fluid  personal-info">
    <div class="container d-flex flex-column justify-content-center h-100  w-75 pl-4" style="max-width:800px">
        <div class="row" >
            <div class="col-md-12 d-flex flex-column justify-content-center">
                <div class="title-jobseeker-landing container-fluid text-center"  >
                    <h2>In Job Seeker lorem.
                        Etiam non </h2>
                </div>
                <div class="content-jobseeker-landing container-fluid font-weight-bolder" >
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
        <div class="row ml-4" style=" margin-top:20px;">
            <div class="col-md-4 " >
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">virtual assistant</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">Digital Marketing Specialist</label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">senior web developer</label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style=" margin-top:0px;">
            <div class="col-md-4 " >
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                            appointment setter
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                        executive assistant
                    </label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                        social media manager
                    </label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style=" margin-top:0px;">
            <div class="col-md-4 " >
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                            content writer
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                       finance & accounting
                    </label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                        web developer
                    </label>
                </div>
            </div>
        </div>

        <div class="row ml-4" style=" margin-top:0px;">
            <div class="col-md-4 " >
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                            credit repair assistant
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                       graphic designer
                    </label>
                </div>
            </div>
            <div class="col-md-4 ">

            </div>
        </div>

        <div class="row ml-4" style=" margin-top:0px;">
            <div class="col-md-4 " >
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                           customer service representative
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label family-size text-capitalize" style="font-size:1em !important;" for="exampleCheck1">
                        search engine optimization
                    </label>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="form-check">

                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10%;">
            <div class="container-fluid py-2 d-flex justify-content-center ">
                <a class="btn btn-primary proceed-btn font-weight-bolder d-flex flex-column justify-content-center" style="width: 120px; height: 30px; font-size:8px !important" href="/jobs">
                    search for jobs
                </a>
                <a href="/jobseekerDashboard" class="btn btn-light font-weight-bolder back-btn mx-2  d-flex flex-column justify-content-center" style="width: 120px; height: 30px; font-size:8px !important">
                    skip to dashboard
                </a>
            </div>
        </div>
     </div>
</div>

@endsection


