@extends('layouts.js-blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container h-auto fullwidth" >
        <div class="card shadow" style="border-radius:10px; min-height: 80vh;" >
            <ul class="nav nav-tabs border-0 mt-3 px-3" id="myTab" role="tablist">
                <li class="nav-item " role="presentation" style="width:50%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border active border-2 border-top-0  border-left-0 border-right-0 text-center text-dark"  data-toggle="tab" href="#js-account-tab" role="tab" aria-controls="home" aria-selected="true">
                        Account
                    </a>
                </li>
                <li class="nav-item" role="presentation" style="width:50%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border border-bottom-1 border-top-0 border-2  border-left-0 border-right-0  text-center text-dark" data-toggle="tab" href="#js-billing-tab" role="tab" aria-controls="profile" aria-selected="false">
                        Payment
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
               <!-- Account -->
                <div class="tab-pane fade show active" id="js-account-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row w-50 mx-auto">
                            <div class="col-md-12">
                            <div class="title-personal-info text-uppercase">
                                Account Login
                            </div>
                            </div>
                            <div class="col-md-12">

                                    <form id="form_bo">
                                        <div class="d-flex flex-column">
                                            <div class="input-group my-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                <input type="text" class="form-control border-secondary border-left-0  border-right-0 form-control border-top-0 rounded-0 " aria-label="Dollar amount (with dot and two decimal places)">
                                                <span class="input-group-text border-secondary  border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-phone-square-alt"></i>
                                                </span>
                                                <input type="text" class="form-control border-secondary border-left-0  border-right-0  form-control border-top-0 rounded-0 " aria-label="Dollar amount (with dot and two decimal places)">
                                                <span class="input-group-text border-secondary  border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                                <input type="text" class="form-control border-left-0  border-right-0 bo_password form-control border-top-0 rounded-0 password-style" aria-label="Dollar amount (with dot and two decimal places)">

                                            </div>
                                        </div>

                                    </form>

                            </div>


                            <div class="col-md-12">
                                <div class="title-personal-info text-uppercase">
                                   change password
                                </div>

                                <div class="col-md-12">

                                        <form id="form_bo">
                                            <div class="d-flex flex-column">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="text" placeholder="New password" class="form-control border-left-0  border-right-0 bo_password form-control border-top-0 rounded-0 password-style" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="text"  placeholder="Confirm password" class="form-control border-left-0  border-right-0 bo_password form-control border-top-0 rounded-0 password-style" aria-label="Dollar amount (with dot and two decimal places)" >
                                                </div>

                                            </div>

                                        </form>

                                </div>
                            </div>
                            <div class="col-md-12 mt-4 d-flex justify-content-center">
                                <div class="btn btn-primary d-flex flex-column justify-content-center text-uppercase" style="height: 50px; width: 120px; font-size: 0.6em;">
                                     update
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Payment  -->
                <div class="tab-pane fade  " id="js-billing-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row w-50 mx-auto">
                            <div class="col-md-12">
                            <div class="title-personal-info text-uppercase">
                                Account Login
                            </div>
                            </div>
                            <div class="col-md-12">


                                <form class="container w-75" action="#" id="bo_business_billing">
                                    <h2 class="title-personal-info"></h2>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="card_number" placeholder="Card Number">
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="card_type" placeholder="VISA">
                                              </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="profile-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control profile-info-forms-items"  name="exp_date_month">
                                                <option>Month</option>
                                                <?php for ($i=1; $i < 12; $i++) {  ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i > 9 ? $i : '0'.$i;?></option>
                                                <?php }?>
                                              </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control profile-info-forms-items"  name="exp_date_year">
                                                <option>Year</option>
                                                <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php }?>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="cardholder_name"  placeholder="Card Holder's Name">
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="cvv" placeholder="CVV">
                                              </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="billing_address" placeholder="Billing Adress">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <select class="form-control profile-info-forms-items"  name="billing_city" >
                                                <option>City</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control profile-info-forms-items"  name="billing_zip"  placeholder="Zip / Postal">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control profile-info-forms-items"  name="billing_country" >
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

                                    </div>
                                    {{-- proceed and back buttons --}}
                                    <div class="row pb-4" style="padding-top:20px; font-size:0.6em;">

                                        <div class="col-md-12">
                                            <p class="text-center title-personal-info m-0">ligula, cursus id sagittis eu,
                                                volutpat id sapien. Cras scelerisque
                                                ullamcorper tellus, sed efficitur odio iaculis a.
                                                Pellentesque habitant morbi tristique senectus
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom:70px;">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <div class="btn btn-primary d-flex flex-column justify-content-center text-uppercase" style="height: 50px; width: 120px; font-size: 0.6em;">
                                                 update
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




