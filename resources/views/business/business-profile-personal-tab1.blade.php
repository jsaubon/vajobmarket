<div class="tab-pane fade show active" id="first-choice" role="tabpanel" aria-labelledby="home-tab">
    <!-- <div class="row container px-0" style="margin:0px auto 20px auto;">
        <div class="col-md-12 d-flex justify-content-end">
            <a class="btn mr-2 btn-light back-btn" style="border-radius: 50px;" href="#">Edit</a>

        </div>
    </div> -->
    <div class="container ">
        <div class="card p-4 shadow" style="border-radius:20px;">
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

                    <div class="col-md-6">
                        <input type="date" class="form-control profile-info-forms-items" name="date_of_birth"  placeholder="Date of Birth">
                    </div>
                    <!-- <div class="col-md-2">
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
                    </div> -->
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
                        <!-- <a class="btn mr-2 btn-light back-btn" href="#">discard</a> -->
                        <button class="btn btn-primary proceed-btn">save changes</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
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
            data_client = {...data_client};
            console.log(data_client);
            updateData('/api/User/'+data_user.id,data_user, ({data:res}) => {
                if(res.success) {
                    postData('/api/Client',data_client, ({data:res}) => {
                        if(res.success) {
                            userdata.client = res.data;
                            localStorage.userdata = JSON.stringify(userdata);
                            // window.location.href = '/businessInfo';
                            alert('Business Owner Personal Profile Succesfully Saved');
                        }
                    });
                }
            });

        })
    })

</script>