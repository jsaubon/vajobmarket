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
                    <div class="shape shape-active">
                        <div class="dot  dot-active "></div>
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

                <form class="container" action="" id="bo_business_info">
                    <h2 class="title-personal-info">Business Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="business_name" placeholder="Business Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="business_owner_name" placeholder="Business Owner Name">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="type_of_business"  placeholder="Type of Business">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items" name="address1"  placeholder="Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="address2" placeholder="Apartment, Suite, etc">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control personal-info-forms-items"  name="city" >
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
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="state" placeholder="State / Province">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="country"  placeholder="Country">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="zip" placeholder="Zip / Postal">
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control personal-info-forms-items"  name="email" placeholder="E-mail Address">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="mobile_no" placeholder="Mobile Number">
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control personal-info-forms-items"  name="phone_no"  placeholder="Phone Number">
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
                            <a class="btn mr-2 btn-light back-btn" href="/businessPersonalInfo">Back</a>
                            <button class="btn btn-primary proceed-btn" type="submit" >Proceed Next</button>
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

        $('#bo_business_info').on('submit', function(e) {
            e.preventDefault();
            let form_values = $(this).serializeArray();
            let data = {};
            form_values.map((input, key) => {
                data = {...data, [input.name]:input.value}
            });
            data = {...data, client_id: userdata.client.id};

            postData('/api/ClientBusinessInfo',data, ({data:res}) => {
                if(res.success) {
                    window.location.href = '/BusinessBilling';
                }
            });
        });


        $('#btn_business_logo').on('click', function() {
            $('#input_business_logo').trigger('click');
        });

        $('#input_business_logo').on('change', function() {
            var file = $(this).prop('files')[0];
            // console.log(files);

            var reader = new FileReader();
            reader.readAsBinaryString(file);

            reader.onload = function() {
                let logo = btoa(reader.result);
                console.log('logo',logo);
                updateData('/api/ClientBusinessInfo/'+userdata.client.id, {logo: logo}, ({data:res})  =>{
                    console.log(res);
                    $('.logo-container').find('img').removeClass('hide');
                    $('.logo-container').find('img').attr('src','/'+res.data.business_logo);
                });
            };
            reader.onerror = function() {
                console.log('there are some problems');
            };
            

            
        });
    });




</script>

@endsection

