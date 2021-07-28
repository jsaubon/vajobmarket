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
<script>

    let token = localStorage.token;
    let userdata = localStorage.userdata ? JSON.parse(localStorage.userdata) : null;

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


    $(document).ready(function() {
        $('.bo-nav').addClass('hide');
        $('.js-nav').addClass('hide');
        if(token) {
            console.log(userdata);
            $('.not_logged_in_nav').addClass('hide');
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
            $('.user-firstname').html(userdata.firstname);
        }
    });

</script>