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
                    <div class="shape shape-active">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    personal information
                    <div class="line1"></div>
                </li>
                <li>
                    <div class="shape">
                        <div class="dot "></div>
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

                <form class="container" action="" id="bo_personal_info">
                    <h2 class="title-personal-info">Personal Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control personal-info-forms-items"  placeholder="First Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="middlename" class="form-control personal-info-forms-items" placeholder="Middle Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control personal-info-forms-items"  placeholder="Last Name">
                              </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <label class="personal-info-forms-items" style="border:0 !important;">Date of Birth</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" name="dob_month">
                                <option>Month</option>
                                <?php for ($i=0; $i < 12; $i++) {  ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php }?>
                              </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" name="dob_date">
                                <option>Date</option>
                                <?php for ($i=0; $i < 31; $i++) {  ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control personal-info-forms-items" name="dob_year">
                                <option>Year</option>
                                <?php for ($i=(int)date('Y'); $i > (int)date('Y') - 70; $i--) {  ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php }?>
                              </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="nationality"  placeholder="Nationality">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="address1"  placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="address2"  placeholder="Apartment, Suite, etc.">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="city" placeholder="City">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="state" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="country"  placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="zip" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input disabled type="email" class="form-control personal-info-forms-items" name="email" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="mobile_no" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="phone_no"  placeholder="Phone Number">
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
                            <a class="btn mr-2 btn-light back-btn" href="/business">Back</a>
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
        $('[name="email"]').val(userdata.email);

        $('#bo_personal_info').on('submit', function(e) {
            e.preventDefault();

            let form_values = $(this).serializeArray();
            let data = {};
            form_values.map((input, key) => {
                data = {...data, [input.name]:input.value}
            });
            data = {...data, user_id: userdata.id};

            let data_user = {
                id: userdata.id,
                firstname: data.firstname,
                middlename: data.middlename,
                lastname: data.lastname,
                mobile_no: data.mobile_no,
                phone_no: data.phone_no,
            };

            let data_client = {...data};
            delete data_client.firstname;
            delete data_client.middlename;
            delete data_client.lastname;
            delete data_client.mobile_no;
            delete data_client.phone_no;
            data_client = {...data_client, date_of_birth: data_client.dob_year+'-'+data_client.dob_month+'-'+data_client.dob_date};
            delete data_client.dob_year;
            delete data_client.dob_month;
            delete data_client.dob_date;
            updateData('/api/User/'+data_user.id,data_user, ({data:res}) => {
                if(res.success) {
                    postData('/api/Client',data_client, ({data:res}) => {
                        if(res.success) {
                            userdata.client = res.data;
                            localStorage.userdata = JSON.stringify(userdata);
                            window.location.href = '/businessInfo';
                        }
                    });
                }
            });
            
        })
    })

</script>
@endsection

