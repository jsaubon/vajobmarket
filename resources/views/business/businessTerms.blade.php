@extends('layouts.app')

@section('content')
<div class="container-fluid h-auto business-landing-container">
    <div class="container d-flex flex-column justify-content-center h-100" style="padding-top: 100px;">
        <div class="row h-100">
                <div class="col-md-6">
                    <img src="{{URL::to('/images/frontAssets/dummy.jpg')}}" alt="" class="img-fluid ">
                </div>
                <div class="col-md-1 "></div>
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div class="title-business-landing">
                        <h2>In Business lorem.
                            Etiam non pulvinar</h2>
                    </div>
                    <div class="content-business-landing">
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
                            <input type="checkbox" class="custom-control-input" id="business-agree">
                            <label class="custom-control-label pt-1 label-business-agree" for="business-agree">I agree to the <a href="#">Terms and Agreement</a> of the site</label>
                         </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-center ">
                        <a class="btn btn-light back-btn mx-2" href="#">Back</a>
                        <a class="btn btn-primary proceed-btn" href="/businessPersonalInfo">Proceed Next</a>
                    </div>

                </div>
        </div>

     </div>

</div>
<script>
    let token = localStorage.token;
    let userdata = localStorage.userdata ? JSON.parse(localStorage.userdata) : null;
    if(!token) {
        window.location.href = '/signup';
    }
</script>
@endsection

