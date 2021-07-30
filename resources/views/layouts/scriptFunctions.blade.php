
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<style>
    .hide {
        display: none;
    }
    .show {
        display: block;
    }
</style>


<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="d-flex justify-content-end">
        <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="modal-body">
                <p class="text-center"><b>SIGN IN</b></p>
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item m-0 " role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom active border-top-0  border-left-0 border-right-0 text-center text-dark" id="home-tab" data-toggle="tab" href="#business-in" role="tab" aria-controls="home" aria-selected="true">
                            As a Business Owner
                        </a>
                    </li>
                    <li class="nav-item m-0 h-100" role="presentation" style="width:50%;">
                        <a class="nav-link active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="profile-tab" data-toggle="tab" href="#job-in" role="tab" aria-controls="profile" aria-selected="false">
                            As a Job Seeker
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                   <!-- business Owner  -->
                    <div class="tab-pane fade show active" id="business-in" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-5">
                            <form id="form_bo">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" required class="bo_email form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" required class="bo_password form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <div id="signin_error_bo" class="hide">
                                    <div class="alert alert-danger" id="signin_error_bo_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control  mt-4" type="submit">
                                        Sign-In
                                    </button>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <div class="p-3">
                                <p class="text-center">
                                    Sign-up using your social media account
                                </p>
                                <div class="d-flex justify-content-center mb-5">
                                    <a href="#" class="text-decoration-none " >
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                        <i class="fab fa-facebook-f my-auto" ></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none mx-2">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fas fa-user-clock my-auto"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fab fa-google-plus-g my-auto"></i>
                                        </div>
                                    </a>
                                </div>
                                <p class="text-center">Dont have an account? <a href="/signup?type=bo">SIGN UP</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- job Search  -->
                    <div class="tab-pane fade" id="job-in" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="p-5">
                            <form id="form_js">
                                <div class="d-flex">
                                <div class="email-logo"></div>
                                <input type="text" class="js_email form-control border-top-0 border-left-0 border-right-0 rounded-0 email-style" placeholder="*email" />
                                </div>
                                <input type="password" class="js_password form-control border-top-0 border-left-0 border-right-0 rounded-0 password-style" placeholder="*password" />
                                <div id="signin_error_js" class="hide">
                                    <div class="alert alert-danger" id="signin_error_js_message"  role="alert">
                                    </div>
                                </div>
                                <div class="button-style">
                                    <button class="btn btn-primary form-control signup-js mt-4">
                                        Sign-In
                                    </button>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <div class="p-3">
                                <p class="text-center">
                                    Sign-up using your social media account
                                </p>
                                <div class="d-flex justify-content-center mb-5">
                                    <a href="#" class="text-decoration-none " >
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                        <i class="fab fa-facebook-f my-auto" ></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none mx-2">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fas fa-user-clock my-auto"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <div  class="postJobBtn d-flex justify-content-center border btn-outline-light"  style="margin:0 !important;color:#383232; width:40px; height:40px; border-radius:50%;">
                                            <i class="fab fa-google-plus-g my-auto"></i>
                                        </div>
                                    </a>
                                </div>
                                <p class="text-center">Don't have an account? <a href="/signup?type=js">SIGN UP</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
  </div>
</div>


<script>

    $(document).ready(function() {
        $('#form_bo').on('submit', function(e) {
            e.preventDefault();
            let email = $('.bo_email').val();
            let password = $('.bo_password').val();
            let data = {
                email: email,
                password: password,
            }

            let url = window.location.origin+'/api/login';
            postData(url,data,function({data: res}) {
                if(res.userdata.client) {
                    localStorage.token = res.token;
                    localStorage.userdata = JSON.stringify(res.userdata);
                    // alert('business owner successfully logged in');
                    window.location.href = '/DashboardBusiness';
                } else {
                    alert('Please Login as Jobseeker');
                }
            }, err =>  {
                if(err.response.data.error) {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(err.response.data.error);
                }else {
                    $('#signin_error_bo').removeClass('hide');
                    $('#signin_error_bo_message').html(Object.values(err.response.data.errors)[0][0]);
                }
            });
        });

        $('#form_js').on('submit', function(e) {
            e.preventDefault();
            let email = $('.js_email').val();
            let password = $('.js_password').val();
            let data = {
                email: email,
                password: password,
            }
            let url = window.location.origin+'/api/login';
            postData(url,data,function({data: res}) {
                if(res.userdata.jobseeker) {
                    localStorage.token = res.token;
                    localStorage.userdata = JSON.stringify(res.userdata);
                    // alert('job seeker successfully logged in');
                    window.location.href = '/jobseekerDashboard';
                } else {
                    alert('Please Login as Business Owner');
                }
            }, err =>  {
                console.log('err.response.data',err.response.data);
                if(err.response.data.error) {
                    $('#signin_error_js').removeClass('hide');
                    $('#signin_error_js_message').html(err.response.data.error);
                }else {
                    $('#signin_error_js').removeClass('hide');
                    $('#signin_error_js_message').html(Object.values(err.response.data.errors)[0][0]);
                }
            });
        });
    });




</script>


<script>

    let token = localStorage.token;
    let userdata = localStorage.userdata ? JSON.parse(localStorage.userdata) : null;


    function paginate (arr, size) {
        return arr.reduce((acc, val, i) => {
            let idx = Math.floor(i / size)
            let page = acc[idx] || (acc[idx] = [])
            page.push(val)

            return acc
        }, [])
    }



    function getData(url, then_function = () => {}, catch_function = () => {}) {
        axios
            .get(url, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function postData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .post(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function uploadImage(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .put(url, data, {
                headers: {
                    Authorization: "Bearer " + token,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function updateData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .put(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    function deleteData(
        url,
        data,
        then_function = () => {},
        catch_function = () => {}
    ) {
        axios
            .delete(url, data, {
                headers: {
                    Authorization: "Bearer " + token
                }
            })
            .then(then_function)
            .catch(catch_function);
    }

    $.fn.serializeControls = function() {
        var data = {};

        function buildInputObject(arr, val) {
            if (arr.length < 1) return val;
            var objkey = arr[0];
            if (objkey.slice(-1) == "]") {
                objkey = objkey.slice(0, -1);
            }
            var result = {};
            if (arr.length == 1) {
                result[objkey] = val;
            } else {
                arr.shift();
                var nestedVal = buildInputObject(arr, val);
                result[objkey] = nestedVal;
            }
            return result;
        }

        $.each(this.serializeArray(), function() {
            var val = this.value;
            var c = this.name.split("[");
            var a = buildInputObject(c, val);
            $.extend(true, data, a);
        });

        return data;
    };




    $(document).ready(function() {
        $("#myDataTable").DataTable();
        $("#myDataTable-AllJobPost").DataTable();
    });


    $(document).ready( function () {
        $('#myDataTable').DataTable();
        var $label = document.querySelector("#myDataTable_length");
        if($label) {
            var $filterz = document.querySelector('#myDataTable_filter')
            var $hidepagination = document.querySelector('#myDataTable_paginate')
            var $hideInfo = document.querySelector('#myDataTable_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );


    $(document).ready( function () {
        $('#myDataTable2').DataTable();
        var $label = document.querySelector("#myDataTable2_length");
        if($label) {
            var $filterz = document.querySelector('#myDataTable2_filter')
            var $hidepagination = document.querySelector('#myDataTable2_paginate')
            var $hideInfo = document.querySelector('#myDataTable2_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );
    $(document).ready( function () {
        $('#myDataTable3').DataTable();
        var $label = document.querySelector("#myDataTable3_length");
        if($label) {
            var $filterz = document.querySelector('#myDataTable3_filter')
            var $hidepagination = document.querySelector('#myDataTable3_paginate')
            var $hideInfo = document.querySelector('#myDataTable3_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );
    $(document).ready( function () {
        $('#jobtitletable').DataTable();
        var $label = document.querySelector("#jobtitletable_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable_filter')
            var $hidepagination = document.querySelector('#jobtitletable_paginate')
            var $hideInfo = document.querySelector('#jobtitletable_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );
    $(document).ready( function () {
        $('#jobtitletable2').DataTable();
        var $label = document.querySelector("#jobtitletable2_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable2_filter')
            var $hidepagination = document.querySelector('#jobtitletable2_paginate')
            var $hideInfo = document.querySelector('#jobtitletable2_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );
    $(document).ready( function () {
        $('#jobtitletable3').DataTable();
        var $label = document.querySelector("#jobtitletable3_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable3_filter')
            var $hidepagination = document.querySelector('#jobtitletable3_paginate')
            var $hideInfo = document.querySelector('#jobtitletable3_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );
    $(document).ready( function () {
        $('#jobtitletable4').DataTable();
        var $label = document.querySelector("#jobtitletable4_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable4_filter')
            var $hidepagination = document.querySelector('#jobtitletable4_paginate')
            var $hideInfo = document.querySelector('#jobtitletable4_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );

    $(document).ready( function () {
        $('#jobtitletable5').DataTable();
        var $label = document.querySelector("#jobtitletable5_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable5_filter')
            var $hidepagination = document.querySelector('#jobtitletable5_paginate')
            var $hideInfo = document.querySelector('#jobtitletable5_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );

    $(document).ready( function () {
        $('#jobtitletable6').DataTable();
        var $label = document.querySelector("#jobtitletable6_length");
        if($label) {
            var $filterz = document.querySelector('#jobtitletable6_filter')
            var $hidepagination = document.querySelector('#jobtitletable6_paginate')
            var $hideInfo = document.querySelector('#jobtitletable6_info')
            $hideInfo.style.display='none'
            $hidepagination.style.display='none'
            $filterz.style.display='none'
            $label.style.display ='none'
        }

    } );


    $(document).ready(function() {
        $('.bo-nav').addClass('hide');
        $('.js-nav').addClass('hide');
        if(token) {
            console.log(userdata);
            $('.not_logged_in_nav').addClass('hide');
            $('.nav-drawer').remove();
            $('.nav-toggle').remove();
            if(userdata.type == 'Client') {
                $('.bo-nav').removeClass('hide');
                $('.js-nav').remove();
                $('.not_logged_in_nav').remove();
            }
            if(userdata.type == 'JobSeeker') {

                $('.js-nav').removeClass('hide');
                $('.bo-nav').remove();
                $('.not_logged_in_nav').remove();
            }
        } else {
            $('.bo-nav-drawer').remove();
            $('.js-nav-drawer').remove();
            $('.bo-nav-toggle').remove();
            $('.js-nav-toggle').remove();
        }

        $('body').on('click','.btn-logout', function(e) {
            e.preventDefault();
            localStorage.removeItem('token');
            localStorage.removeItem('userdata');
            window.location.href = '/';
        });

        var showbtnBo = $(".user-btn-bo");
        var lilnavBo = $(".small-nav-bo");

        if(showbtnBo) {
            showbtnBo.on("mouseover", function() {
                console.log('mouseover');
                lilnavBo.removeClass('hide');
                lilnavBo.addClass('show');
            });
            lilnavBo.on("mouseover", function() {
                lilnavBo.removeClass('hide');
                lilnavBo.addClass('show');
            });
            lilnavBo.on("mouseout", function() {
                lilnavBo.addClass('hide');
                lilnavBo.removeClass('show');
            });
            showbtnBo.on("mouseout", function() {
                lilnavBo.addClass('hide');
                lilnavBo.removeClass('show');
            });
        }


        var showbtnJs = document.querySelector(".user-btn-js");
        var lilnavJs = document.querySelector(".small-nav-js");

        if(showbtnJs) {
            showbtnJs.addEventListener("mouseover", function() {
                lilnavJs.style.display = "block";
            });
            lilnavJs.addEventListener("mouseover", function() {
                lilnavJs.style.display = "block";
            });
            lilnavJs.addEventListener("mouseout", function() {
                lilnavJs.style.display = "none";
            });
            showbtnJs.addEventListener("mouseout", function() {
                lilnavJs.style.display = "none";
            });
        }


        if(userdata) {
            console.log('userdata',userdata);
            $('.user-firstname').html(userdata.firstname);
            getData('/api/User/'+userdata.id, ({data: res}) => {
                console.log(res);
                if(res.success) {
                    localStorage.userdata = JSON.stringify(res.data);
                }
            })
        }
    });

</script>