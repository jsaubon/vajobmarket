@extends('layouts.app')

@section('content')
<div class="container-fluid h-auto personal-info">
    <div class="container h-100" style="padding-top: 100px; padding-bottom:10px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="container w-75">
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
                    <div class="shape">
                        <div class="dot dot-active "></div>
                    </div>
                    <br>
                    business information
                    <div class="line2 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape shape-active" >
                        <div class="dot dot-active"></div>
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

                <form class="container w-50" action="">
                    <h2 class="title-personal-info"></h2>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Card Number">
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="VISA">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items" >
                                <option>Month</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items" >
                                <option>Year</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Card Holder's Name">
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="CVV">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" placeholder="Billing Adress">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-control personal-info-forms-items" >
                                <option>City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-10">
                            <select class="form-control personal-info-forms-items" >
                                <option>Country</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>
                    <div class="row " style="padding-top:20px;">

                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="form-group personal-info-forms-items form-check " style="border:none !important;">
                                <input type="checkbox" class="form-check-input pl-4" >
                                <label class="form-check-label skip-check" for="exampleCheck1">Skip this part, sign me up for &nbsp; <i class="font-weight-bold">FREE</i></label>
                            </div>
                        </div>

                    </div>
                </form>
                    {{-- proceed and back buttons --}}
                    <div class="row" style="padding-top:20px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p class="text-center">ligula, cursus id sagittis eu,
                                volutpat id sapien. Cras scelerisque
                                ullamcorper tellus, sed efficitur odio iaculis a.
                                Pellentesque habitant morbi tristique senectus
                            </p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row" style="margin-bottom:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 d-flex justify-content-center">
                            <a class="btn mr-2 btn-light back-btn" href="/businessInfo">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/businessReview">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
            </div>
        </div>

     </div>
</div>

@endsection

