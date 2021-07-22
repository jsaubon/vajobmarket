@extends('layouts.app')

@section('content')
<div class="container-fluid h-auto personal-info">
    <div class="container h-100" style="padding-top: 100px; padding-bottom:10px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="container w-75 stepper-container">
            <ul class="d-flex justify-content-around  progress-steps">
                <li class="text-active">
                    <div class="shape ">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    personal information
                    <div class="line1 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape shape-active">
                        <div class="dot  dot-active "></div>
                    </div>
                    <br>
                    business information
                    <div class="line2"></div>
                </li>
                <li>
                    <div class="shape" >
                        <div class="dot"></div>
                    </div>
                    <br>
                    billing details
                    <div class="line3"></div>
                </li>
                <li>
                    <div class="shape">
                        <div class="dot"></div>
                    </div>
                    <br>
                   profile review
                </li>
            </ul>
        </div>
        <div class="container w-75 d-flex justify-content-center">
            <div class="container">
                {{-- personal-info --}}

                <form class="container" action="">
                    <h2 class="title-personal-info">Business Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Business Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="Business Owner Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Type of Business">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="Apartment, Suite, etc">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items" >
                                <option>City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control personal-info-forms-items" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Phone Number">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 ">
                            <textarea placeholder="Write something about your business..."class="business-textarea p-2 h-100 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="logo-container">

                                    </div>
                                </div>
                                <div class="col-md-6 px-auto">
                                    <div class="h-100 d-flex flex-column justify-content-center">
                                        <p style=" font-size: 10px; color:#646464; opacity:0.5;">Upload an image of your logo</p>
                                        <button class="browse-logo ">Browse</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- proceed and back buttons --}}
                    <div class="row" style="padding-top:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="text-center">ligula, cursus id sagittis eu,
                                volutpat id sapien. Cras scelerisque
                                ullamcorper tellus, sed efficitur odio iaculis a.
                                Pellentesque habitant morbi tristique senectus
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row" style="margin-bottom:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 d-flex justify-content-center">
                            <a class="btn mr-2 btn-light back-btn" href="/businessInfo">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/BusinessBilling">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </form>
            </div>
        </div>

     </div>
</div>

@endsection

