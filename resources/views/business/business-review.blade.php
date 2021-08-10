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
        .w-50 {
            width: 100% !important;
        }
    }


    .accordion-item ,.accordion-item * {
        background-color: #ECF6FF !important;
    }
</style>
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
                <li  class="text-active">
                    <div class="shape">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    business information
                    <div class="line2  line-active"></div>
                </li>
                <li  class="text-active">
                    <div class="shape" >
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    billing details
                    <div class="line3  line-active"></div>
                </li>
                <li  class="text-active">
                    <div class="shape shape-active">
                        <div class="dot dot-active"></div>
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
                    <h2 class="title-personal-info">Personal Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">first name</label>
                                <input type="text" class="form-control personal-info-forms-items" name="personal_firstname" placeholder="First Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">middle name</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_middlename" placeholder="Middle Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">last name</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_lastname"  placeholder="Last Name">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="personal-info-forms-items"   style="border:0 !important;">Date of Birth</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_date_of_birth"  placeholder="Date of Birth">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">nationality</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_nationality"  placeholder="Nationality">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">address</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_address1"  placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">apartment, suite, etc.</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_address2"  placeholder="Apartment, Suite, etc.">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">city</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_city" placeholder="City">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">state / province</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_state" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">country</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_country"  placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_zip" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">email address</label>
                                <input type="email" class="form-control personal-info-forms-items"  name="personal_email" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">mobile number</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_mobile_no" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="mb-0 label-forms text-capitalize">phone number</label>
                                <input type="text" class="form-control personal-info-forms-items"  name="personal_phone_no"  placeholder="Phone Number">
                              </div>
                        </div>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item ">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button style="color:#646464; font-family:'Oswald',sans-serif;" class="accordion-button text-uppercase personal-info-forms-items" type="button" data-bs-toggle="collapse" data-bs-target="#business-info-accordion" aria-expanded="false" aria-controls="flush-collapseOne">
                              Business Information
                            </button>
                          </h2>
                          <div id="business-info-accordion" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class=" ">
                                <form class="container" action="" id="bo_business_info">
                                    <h2 class="title-personal-info">Business Information</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">business name</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-business_name" name="business_name" placeholder="Business Name">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">business owner name</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-business_owner_name" name="business_owner_name" placeholder="Business Owner Name">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">type of business</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-type_of_business" name="type_of_business"  placeholder="Type of Business">
                                              </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">address</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-address1" name="address1"  placeholder="Address">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">Apartment, Suite, etc</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-address2"  name="address2" placeholder="Apartment, Suite, etc">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">City</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-city"  name="city" placeholder="City">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">state / province</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-state"  name="state" placeholder="State / Province">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">country</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-country"  name="country"  placeholder="Country">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-zip"  name="zip" placeholder="Zip / Postal">
                                              </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">email address</label>
                                                <input type="email" class="form-control profile-info-forms-items client_business_info-email"  name="email" placeholder="E-mail Address">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">mobile number</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-mobile_no"  name="mobile_no" placeholder="Mobile Number">
                                              </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">phone number</label>
                                                <input type="text" class="form-control profile-info-forms-items client_business_info-phone_no"  name="phone_no"  placeholder="Phone Number">
                                              </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 ">
                                            <textarea placeholder="Write something about your business..." name="business_description" class="business-textarea p-2 h-100 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="logo-container">
                                                        <img src="" style="height: 94px; width: 96px;margin-bottom: 0px" class="hide"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 px-auto">
                                                    <div class="h-100 d-flex flex-column justify-content-center">
                                                        <p style=" font-size: 10px; color:#646464; opacity:0.5;">Upload an image of your logo</p>
                                                        <button class="browse-logo " type="button" id="btn_business_logo">Browse</button>

                                                        <input type="file" accept="image/*" id="input_business_logo" class="hide"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- proceed and back buttons --}}

                                </form>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button style="color:#646464; font-family:'Oswald',sans-serif;" class="accordion-button collapsed text-uppercase personal-info-forms-items" type="button" data-bs-toggle="collapse" data-bs-target="#billing-details-accordion" aria-expanded="false" aria-controls="flush-collapseTwo">
                              billing details
                            </button>
                          </h2>
                          <div id="billing-details-accordion" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class=" ">
                                <form class="container " style="padding: 0" action="#" id="bo_business_billing">
                                    <h2 class="title-personal-info">Billing Details</h2>
                                    <hr/>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">card number</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-card_number"  name="card_number" placeholder="Card Number">
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">card type</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-card_type"  name="card_type" placeholder="VISA">
                                              </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="profile-info-forms-items" style="border:0 !important;">Expiration</label>
                                        </div>
                                        <div class="col-md-8">
                                            
                                            <input class="form-control profile-info-forms-items client_billing_detail-exp_date"  name="exp_date_month">
                                        </div> 
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">card holder's name</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-cardholder_name"  name="cardholder_name"  placeholder="Card Holder's Name">
                                              </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-uppercase">cvv</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-cvv"  name="cvv" placeholder="CVV">
                                              </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">billing address</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-billing_address"  name="billing_address" placeholder="Billing Adress">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="mb-0 label-forms text-capitalize">city</label>
                                            <input class="form-control profile-info-forms-items client_billing_detail-billing_city"  name="billing_city" />
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0 label-forms text-capitalize">zip / postal</label>
                                                <input type="text" class="form-control profile-info-forms-items client_billing_detail-billing_zip"  name="billing_zip"  placeholder="Zip / Postal">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-10">
                                            <label class="mb-0 label-forms text-capitalize">country</label>
                                            <input class="form-control profile-info-forms-items client_billing_detail-billing_country"  name="billing_country" />
                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                    </div>
                                    <div class="row " style="padding-top:20px;">

                                    </div>


                                </form>
                            </div>
                          </div>
                        </div>
                    </div>



                    {{-- proceed and back buttons --}}



                    <div class="row" style="padding-top:30px;font-size:0.6em; font-weight:400;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="text-center title-personal-info">ligula, cursus id sagittis eu,
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
                            <a class="btn mr-2 btn-light back-btn" href="/BusinessBilling">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/BusinessFinalize">Submit</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>

     </div>
</div>

<script>
if(!token) {
    window.location.href = '/signup';
}
$(document).ready(function() {
    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            let client_data = res.data;
            let user = client_data.user;
            let client_business_info = client_data.client_business_info;
            let client_billing_detail = client_data.client_billing_detail;
            Object.keys(client_data).map((field, key) => {
                let input = $('[name="personal_'+field+'"]');
                if(input.length) {
                    // console.log(input);
                    input.val(client_data[field]);
                }
            });

            Object.keys(user).map((field, key) => {
                let input = $('[name="personal_'+field+'"]');
                if(input.length) {
                    // console.log(input);
                    input.val(user[field]);
                }
            });

            console.log('client_business_info',client_business_info);
            Object.keys(client_business_info).map((field, key) => {
                let input = $('.client_business_info-'+field);
                if(input.length) {
                    // console.log(input);
                    input.val(client_business_info[field]);
                }
            });
            Object.keys(client_billing_detail).map((field, key) => {
                let input = $('client_billing_detail-'+field);
                if(input.length) {
                    input.val(client_billing_detail[field]);
                }
            });
        }
    });
});
</script>
@endsection

