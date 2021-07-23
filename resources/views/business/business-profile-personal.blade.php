@extends('layouts.profile-layout')
@section('content')
    <div class="container-fluid h-auto nav-style">
        {{-- <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                        This is some text within a card body.
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                        This is some text within a card body.
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                        This is some text within a card body.
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#first-choice" role="tab" aria-controls="home" aria-selected="true">
                    personal
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#second-choice" role="tab" aria-controls="profile" aria-selected="false">
                    business
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#third-choice" role="tab" aria-controls="profile" aria-selected="false">
                    billing
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="first-choice" role="tabpanel" aria-labelledby="home-tab">
                <div class="row container px-0" style="margin:0px auto 20px auto;">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>

                    </div>
                </div>
                <div class="container ">
                    <div class="card p-4">
                        <form class="container" action="" id="bo_personal_info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control profile-info-forms-items"  placeholder="First Name">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="middlename" class="form-control profile-info-forms-items" placeholder="Middle Name">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control profile-info-forms-items"  placeholder="Last Name">
                                      </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label class="form-control profile-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items" name="dob_month">
                                        <option>Month</option>
                                        <?php for ($i=1; $i <= 12; $i++) {  ?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php }?>
                                      </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items" name="dob_date">
                                        <option>Date</option>
                                        <?php for ($i=1; $i <= 31; $i++) {  ?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control profile-info-forms-items" name="dob_year">
                                        <option>Year</option>
                                        <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php }?>
                                      </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="nationality"  placeholder="Nationality">
                                      </div>
                                </div>
                            </div>

                            <hr >

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="address1"  placeholder="Address">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="address2"  placeholder="Apartment, Suite, etc.">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="city" placeholder="City">
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="state" placeholder="State / Province">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="country"  placeholder="Country">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="zip" placeholder="Zip / Postal">
                                      </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input disabled type="email" class="form-control profile-info-forms-items" name="email" placeholder="E-mail Address">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="mobile_no" placeholder="Mobile Number">
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control profile-info-forms-items" name="phone_no"  placeholder="Phone Number">
                                      </div>
                                </div>
                            </div>


                            {{-- proceed and back buttons --}}

                            <div class="row" style="margin:70px auto 70px auto;">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 d-flex justify-content-center">
                                    <a class="btn mr-2 btn-light back-btn" href="#">discard</a>
                                    <button class="btn btn-primary proceed-btn">save changes</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="second-choice" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row container px-0" style="margin:0px auto 20px auto;">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>
                    </div>
                </div>
                <div class="container ">
                    <div class="card p-4 shadow">
                        <div class="container">
                            <form class="container" action="" id="bo_business_info">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" name="business_name" placeholder="Business Name">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" name="business_owner_name" placeholder="Business Owner Name">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items" >
                                            <option>Type of Business</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items" name="address1"  placeholder="Address">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  name="address2" placeholder="Apartment, Suite, etc">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items"  name="city" >
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
                                        <select class="form-control profile-info-forms-items" >
                                            <option>State / Province</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control profile-info-forms-items"   >
                                            <option>Country</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  name="zip" placeholder="Zip / Postal">
                                          </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control profile-info-forms-items"  name="email" placeholder="E-mail Address">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  name="mobile_no" placeholder="Mobile Number">
                                          </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control profile-info-forms-items"  name="phone_no"  placeholder="Phone Number">
                                          </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <div class="logo-container">
                                            <img src="" style="height: 94px; width: 96px;margin-bottom: 0px" class="hide"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2 px-auto">
                                        <div class="h-100 d-flex flex-column justify-content-center">
                                            <p style=" font-size: 10px; color:#646464; opacity:0.5;">Upload an image of your logo</p>
                                            <button class="browse-logo " type="button" id="btn_business_logo">Browse</button>

                                            <input type="file" accept="image/*" id="input_business_logo" class="hide"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <div class="row"  style="margin-top: 40px;">
                                    <div class="col-md-12">
                                        <textarea name="content" id="editor">
                                            &lt;p&gt;This is some sample content.&lt;/p&gt;
                                        </textarea>
                                    </div>
                                </div>

                                {{-- proceed and back buttons --}}

                                <div class="row" style="margin:70px auto 70px auto;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 d-flex justify-content-center">
                                        <a class="btn mr-2 btn-light back-btn" href="#">discard</a>
                                        <button class="btn btn-primary proceed-btn">save changes</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4 shadow">
                        <div class="container">
                            <form class="container w-50" action="#" id="bo_business_billing">
                                <h2 class="title-personal-info"></h2>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items"  name="card_number" placeholder="Card Number">
                                          </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items"  name="card_type" placeholder="VISA">
                                          </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control personal-info-forms-items"  name="exp_date_month">
                                            <option>Month</option>
                                            <?php for ($i=1; $i < 12; $i++) {  ?>
                                                <option value="<?php echo $i;?>"><?php echo $i > 9 ? $i : '0'.$i;?></option>
                                            <?php }?>
                                          </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control personal-info-forms-items"  name="exp_date_year">
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
                                            <input type="text" class="form-control personal-info-forms-items"  name="cardholder_name"  placeholder="Card Holder's Name">
                                          </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items"  name="cvv" placeholder="CVV">
                                          </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items"  name="billing_address" placeholder="Billing Adress">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <select class="form-control personal-info-forms-items"  name="billing_city" >
                                            <option>City</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control personal-info-forms-items"  name="billing_zip"  placeholder="Zip / Postal">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-10">
                                        <select class="form-control personal-info-forms-items"  name="billing_country" >
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
                                        <button class="btn btn-primary proceed-btn" type="submit">Proceed Next</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
