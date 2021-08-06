<div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
    <!-- <div class="row container px-0" style="margin:0px auto 20px auto;">
        <div class="col-md-12 d-flex justify-content-end">
            <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="/BusinessProfileCompany">Edit</a>
        </div>
    </div> -->
    <div class="container ">
        <div class="card p-4 shadow" style="border-radius:20px;">
            <div class="container">
                <form class="container w-50" action="#" id="bo_business_billing">
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
                            <label class= "profile-info-forms-items" style="border:0 !important;">Date of Birth</label>
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

                    {{-- proceed and back buttons --}}

                    <div class="row" style="margin:70px auto 70px auto;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 d-flex justify-content-center">
                            <!-- <a class="btn mr-2 btn-light back-btn" href="#">discard</a> -->
                            <button class="btn btn-primary proceed-btn">save changes</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

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
                // window.location.href = '/businessReview';
                alert('Business Owner Billing Details Successfully Saved');
            }
        });
    });
});




</script>