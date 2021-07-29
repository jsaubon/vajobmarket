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
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="billing_city"  placeholder="City">
                            </div>
                          
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
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="billing_country"  placeholder="Country">
                            </div>
                           
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
                    <div class="row" style="padding-top:20px; font-size:0.6em; font-weight:400;">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <p class="text-center  title-personal-info">ligula, cursus id sagittis eu,
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

<script>
 if(!token) {
    window.location.href = '/signup';
}

$(document).ready(function() {
    $('#bo_business_billing').on('submit', function(e) {
        e.preventDefault();
        let form_values = $(this).serializeArray();
        let data = {};
        form_values.map((input, key) => {
            data = {...data, [input.name]:input.value}
        });
        data = {...data, client_id: userdata.client.id, exp_date: data.exp_date_month+'/'+data.exp_date_year};
        delete data.exp_date_month;
        delete data.exp_date_year;
        postData('/api/ClientBillingDetail',data, ({data:res}) => {
            if(res.success) {
                window.location.href = '/businessReview';
            }
        });
    });
});




</script>

@endsection

