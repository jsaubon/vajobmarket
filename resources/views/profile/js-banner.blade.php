<div class="container-fluid try m-0 px-0">
    <div class="row top-banner">

        <div class="col-md-6 px-0 h-50 col-banner">
            <div class="profile-banner-container shadow">

            </div>
            <div class="banner-offset-items" style="top:300px !important;">
                <a href="#" class="btn btn-danger hire-me-btn shadow d-flex flex-column justify-content-center">hire me</a>
                <div class="profile-pic shadow">
                    <img class="jobseeker-jobseeker_photo" src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="" />
                </div>
                <div class="profile-name">
                    <h3 class="jobseeker-fullname">-</h3>
                    <p class="jobseeker_profession-job_title">-</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 px-0 h-50 col-banner h-auto">
            <div class="space-container ">

                {{-- for jobseeker --}}


            </div>
        </div>

    </div>
</div>
<script>
    if(token) {
        if(userdata.jobseeker) {
            $('.hire-me-btn').remove();
            $('.banner-offset-items').css('top','370px');
        }
    } else {
        // $('.hire-me-btn').removeClass('')
    }
</script>
