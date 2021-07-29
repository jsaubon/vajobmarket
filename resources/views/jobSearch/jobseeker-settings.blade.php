@extends('layouts.js-blank-layout')

@section('content')

<div class="user-dashboard h-auto">
    <div class="container h-auto fullwidth" >
        <div class="card shadow" style="border-radius:10px; min-height: 80vh;" >
            <ul class="nav nav-tabs border-0 mt-3 px-3" id="myTab" role="tablist">
                <li class="nav-item " role="presentation" style="width:100%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border active border-2 border-top-0  border-left-0 border-right-0 text-center text-dark"  data-toggle="tab" href="#bo-account-tab" role="tab" aria-controls="home" aria-selected="true">
                        Account
                    </a>
                </li>
                <!-- <li class="nav-item" role="presentation" style="width:50%;">
                    <a class="nav-link title-personal-info m-0 active-bottom border border-bottom-1 border-top-0 border-2  border-left-0 border-right-0  text-center text-dark" data-toggle="tab" href="#bo-billing-tab" role="tab" aria-controls="profile" aria-selected="false">
                        Payment
                    </a>
                </li> -->
            </ul>

            <div class="tab-content" id="myTabContent">
               <!-- Account -->
                <div class="tab-pane fade show active" id="bo-account-tab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row w-50 mx-auto">
                            <div class="col-md-12">
                            <div class="title-personal-info text-uppercase">
                                Account Login
                            </div>
                            </div>
                            <div class="col-md-12">

                                    <form id="form_account_login">
                                        <div class="d-flex flex-column">
                                            <div class="input-group my-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                <input type="text" required disabled class="user-email form-control border-secondary border-left-0  border-right-0 form-control border-top-0 rounded-0 " placeholder="Email">
                                                <span class="input-group-text border-secondary  border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-phone-square-alt"></i>
                                                </span>
                                                <input type="text" name="mobile_no" class="user-mobile_no form-control border-secondary border-left-0  border-right-0  form-control border-top-0 rounded-0 " placeholder="Mobile">
                                                <span class="input-group-text border-secondary  border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-phone-square-alt"></i>
                                                </span>
                                                <input type="text" name="phone_no" class="user-phone_no form-control border-secondary border-left-0  border-right-0  form-control border-top-0 rounded-0 " placeholder="Phone">
                                                <span class="input-group-text border-secondary  border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-4 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary   text-uppercase" style="height: 50px; width: 120px; ">
                                                update
                                            </button>
                                        </div>
                                    </form>

                            </div>


                            <div class="col-md-12">
                                <div class="title-personal-info text-uppercase">
                                   change password
                                </div>

                                <div class="col-md-12">

                                        <form id="form_bo_change_password">
                                            <div class="d-flex flex-column">

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" required name="new_password" placeholder="New password" class="form-control border-left-0  border-right-0 bo_password form-control border-top-0 rounded-0 password-style" aria-label="Dollar amount (with dot and two decimal places)">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text border-secondary border-left-0 border-right-0  bg-white border-top-0  rounded-0">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" required name="confirm_password" placeholder="Confirm password" class="form-control border-left-0  border-right-0 bo_password form-control border-top-0 rounded-0 password-style" aria-label="Dollar amount (with dot and two decimal places)" >
                                                </div>

                                            </div>
                                            <div class="col-md-12 mt-4 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary   text-uppercase" style="height: 50px;">
                                                    change password
                                                </button>
                                            </div>
                                        </form>

                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

if(!token) {
    window.location.href = '/';
} else {
    if(!userdata.jobseeker) {
        window.location.href = '/';
    }
}
$(document).ready(function() {
    getData('/api/JobSeeker/'+userdata.jobseeker.id, ({data:res}) => {
        if(res.success) {
            let user = res.data.user;
            Object.keys(user).map((field, key) => {
                let element = $('.user-'+field);
                if(element.length) {
                    element.html(user[field]);
                    element.val(user[field]);
                }
            });
        }
    });

    $('#form_account_login').on('submit', function(e) {
        e.preventDefault();
        let data = $(this).serializeControls();
        updateData('/api/User/'+userdata.id, data, ({data:res}) => {
            if(res.success) {
                alert('Account Settings Successfully Updated');
            }
        })
    });

    $('#form_bo_change_password').on('submit', function(e) {
        e.preventDefault();
        let data = $(this).serializeControls();
        console.log(data);
        if(data.new_password == data.confirm_password) {
            data = {
                password: data.new_password
            };

            updateData('/api/User/'+userdata.id, data, ({data:res}) => {
                if(res.success) {
                    alert('Password Successfully Changed');
                }
            })
        } else {
            alert('Confirm Password doesnt invalid');
        }
        
    });
});
</script>

@endsection




