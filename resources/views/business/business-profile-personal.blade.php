@extends('layouts.profile-layout')
@section('content')
    <div class="container-fluid h-auto pt-4 nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats pt-4 mt-4 container">
                <div class="row card-deck mb-4">
                    {{-- <div class="col-md-4 card shadow card-banner">
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
                    </div> --}}
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item m-0" role="presentation">
                <a class="nav-link title-personal-info active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#first-choice" role="tab" aria-controls="home" aria-selected="true">
                    personal
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#second-choice" role="tab" aria-controls="profile" aria-selected="false">
                    business
                </a>
            </li>
            <li class="nav-item m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#third-choice" role="tab" aria-controls="profile" aria-selected="false">
                    billing
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            @include('business.business-profile-personal-tab1')
            {{-- second --}}
            @include('business.business-profile-personal-tab2')
            {{-- third --}}
            @include('business.business-profile-personal-tab3')
            
        </div>
    </div>

<script>


$(document).ready(function() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let client_id = urlParams.get('client_id');
    if(!client_id) {
        if(token) {
            client_id = userdata.client.id;
        } else {
            window.location.href = '/';
        }
    }

    if(token) {
        if(userdata.client.id == client_id) {
            getData('/api/Client/'+client_id, ({data:res}) => {
                if(res.success) {
                    console.log('test',res);
                    let client = res.data;
                    let user = res.data.user;
                    let client_business_info = client.client_business_info;
                    let client_billing_detail = client.client_billing_detail;
                    if(client_business_info.business_logo) {
                        $('.client_business_info-business_logo').attr('src','/storage/'+client_business_info.business_logo);
                    }


                    Object.keys(client_business_info).map((field, key) => {
                        let element = $('.client_business_info-'+field);
                        if(element.length) {
                            element.html(client_business_info[field]);
                        }
                    });
                    Object.keys(client).map((field, key) => {
                        let element = $('[name="'+field+'"]');
                        if(element.length) {
                            element.html(client[field]);
                            element.val(client[field]);
                        }
                    });  
                    Object.keys(user).map((field, key) => {
                        let element = $('[name="'+field+'"]');
                        if(element.length) {
                            element.html(user[field]);
                            element.val(user[field]);
                        }
                    });  
                    Object.keys(client_business_info).map((field, key) => {
                        let element = $('[name="'+field+'"]');
                        if(element.length) {
                            element.html(client_business_info[field]);
                            element.val(client_business_info[field]);
                        }
                    });  
                    Object.keys(client_billing_detail).map((field, key) => {
                        let element = $('[name="'+field+'"]');
                        if(element.length) {
                            element.html(client_billing_detail[field]);
                            element.val(client_billing_detail[field]);
                        }
                    });  

                    

                }
            });
        } else {
            window.location.href = '/';
        }
    }
    
});

</script>
@endsection
