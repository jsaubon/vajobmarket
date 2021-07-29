@extends('layouts.app')

@section('content')

<div class="container-fluid h-auto" style="background-color:#ecf6ff;">
    <div class="container  jobseeker-landing-container d-flex flex-column justify-content-center" style="padding-top: 100px;">
        <div class=" h-auto d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="row h-100">
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <img src="{{URL::to('/images/JS-Onboarding/try.jpg')}}" alt="" class="img-fluid shadow">
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div class="title-jobseeker-landing">
                        <h2>In Job Seeker lorem.
                            Etiam non pulvinar</h2>
                    </div>
                    <div class="content-jobseeker-landing">
                        <p > Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.
                             In eget sagittis lorem.
                             Etiam non pulvinar lacus.
                             Vivamus at ante orci. Donec
                             finibus, massa a imperdiet dictum,
                             libero ex mattis lorem, et egestas
                             <br> <br>
                              neque tortor at arcu. Nam tellus
                            ligula, cursus id sagittis eu,
                            volutpat id sapien. Cras scelerisque
                            ullamcorper tellus, sed efficitur odio iaculis a.
                            Pellentesque habitant morbi tristique senectus et
                            netus et malesuada fames ac turpis egestas. Mauris
                            vel dui sed leo viverra dignissim eu a justo
                        </p>
                    </div>
                    <div class="container-fluid d-flex justify-content-center p-0 my-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="jobseeker-agree">
                            <label class="custom-control-label pt-1 label-jobseeker-agree" for="jobseeker-agree">I agree to the <a href="#">Terms and Agreement</a> of the site</label>
                         </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-center ">
                        <button class="btn btn-light back-btn mx-2">Back</button>
                        <a class="btn btn-primary proceed-btn" href="/personalInfo">Proceed Next</a>
                    </div>

                </div>
        </div>

     </div>

</div>

@endsection

