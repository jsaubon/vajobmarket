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
                <div class="row" style="margin:0px auto 20px auto;">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a class="btn mr-2 btn-light back-btn" href="#">discard</a>

                    </div>
                </div>
                <div class="container ">
                    <div class="card p-4">
                        <form class="container" action="" id="bo_personal_info">
                            <h2 class="title-personal-info">Personal Information</h2>
                            <hr>
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
                <div class="container ">
                    <div class="card p-4 shadow">
                        <div class="card-title d-flex">
                            <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                            </div>
                            <div class="my-auto pl-2">
                                <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                <p style="font-size: 10px; margin:0;">Type of business</p>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text " style="margin-bottom:60px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris imperdiet ante hendrerit massa dignissim scelerisque.
                            Nunc pellentesque blandit placerat. Suspendisse viverra porta dolor,
                            commodo eleifend mauris pretium ac. Nam pellentesque magna id quam suscipit
                            ellentesque. Proin a ultricies lectus. Phasellus ut mauris nec lacus lobortis
                            posuere. Aliquam dignissim pretium neque, id semper diam ornare sit amet.
                            Cras massa augue, luctus quis pharetra vel, egestas nec lectus. Maecenas vel
                            tellus tempus, tristique urna et, mattis nunc. Integer aliquet rutrum leo,
                            vitae condimentum libero porta ut. Donec pharetra ut ex sit amet ornare.
                            Donec elit neque, egestas quis purus ut, faucibus dignissim lacus. Nunc
                            mollis porttitor ligula porttitor faucibus.
                            Praesent ut orci rhoncus enim laoreet elementum
                            id a ligula. Aenean fringilla hendrerit pretium. Morbi ut
                            lacus tincidunt justo interdum blandit sit amet vel dui.
                            Nam vestibulum sapien id leo ornare elementum. In mollis
                            mauris eu nunc aliquet, ac mollis lectus faucibus. Pellentesque
                            posuere nisl id turpis aliquet, at fermentum lectus commodo. Sed tincidunt
                            dolor vitae cursus pellentesque. Curabitur sollicitudin maximus ipsum, id
                            euismod augue pretium quis. Morbi gravida pellentesque egestas. Donec vel
                            urna pretium, aliquam quam sed, commodo tellus. Sed ipsum eros, dignissim
                            eget finibus eu, rutrum eget sapien. Phasellus ante lacus, volutpat vel velit
                            sed, porta euismod felis.
                        </p>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
              bILLING
            </div>
        </div>
    </div>

@endsection
