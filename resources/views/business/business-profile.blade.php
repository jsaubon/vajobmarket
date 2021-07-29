@extends('layouts.profile-layout')
@section('content')

    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                        <div class="row ">
                            <div class="col-md-12 text-center">Job Posts</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center h2 client_job_posts_count">-</div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">VA Hired</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2 client_employees_count">-</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 text-center">Profile Rating</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center h2">N/A</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item  m-0" role="presentation">
                <a class="nav-link title-personal-info active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#posts-pro" role="tab" aria-controls="home" aria-selected="true">
                    posts
                </a>
            </li>
            <li class="nav-item  m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#company-pro" role="tab" aria-controls="profile" aria-selected="false">
                    company profile
                </a>
            </li>
            <li class="nav-item  m-0" role="presentation" >
                <a class="nav-link title-personal-info active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#comments-pro" role="tab" aria-controls="profile" aria-selected="false">
                    comments
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane h-auto fade show active" id="posts-pro" role="tabpanel" aria-labelledby="home-tab">
                <div class="container pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            Showing <span class="client_job_posts-per_page">-</span> posts out of <span class="client_job_posts-total">-</span>
                        </div>
                    </div>
                </div>
                <div class="container h-auto " style="gap:10px;">
                    <div class="client_job_post_container row">

                    </div>

                </div>
                <div class="container">
                    <hr>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination client_job_posts-pagination justify-content-center">
                          <!-- <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li> -->
                        </ul>
                      </nav>
                </div>
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="company-pro" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="row my-3">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a class="btn btn-light back-btn" style="border-radius: 50px; font-family: 'oswald',san-serif;" href="/BusinessProfilePersonal">Edit</a>
                        </div>
                    </div>
                    <div class="card p-4">
                        <div class="card-title d-flex">
                            <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                            <img class="client_business_info-business_logo" src="https://thumbs.dreamstime.com/z/realty-flat-apartment-modern-building-logo-design-graphic-style-realty-flat-apartment-modern-building-logo-design-graphic-style-158041756.jpg" alt="" />
                            </div>
                            <div class="my-auto pl-2">
                                <h3 style="font-size:15px; margin:0;" class="client_business_info-business_name">My Company Name</h3>
                                <p style="font-size: 10px; margin:0;">
                                    <a href="/BusinessProfilePersonal" class="client_business_info-type_of_business">Type of business</a></p>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text client_business_info-business_description" style="margin-bottom:60px;">
                            -
                        </p>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="comments-pro" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            Showing <span class="comments-per_page"></span> comments out of <span class="comments-total"></span>
                        </div>
                    </div>
                </div>
                <div class="container h-auto" style="gap:10px;">
                    {{-- comments --}}
                    <div class="row comments_container">
                        <div class="col-md-4 my-2 shadow" style="border-radius: 10px;" >
                            <div class="card-body">
                              <h5 class="card-title d-flex" style="font-size:15px;">
                                <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                                </div>
                                <div class="my-auto pl-2">
                                    <h3 style="font-size:15px;" class="title-personal-info m-0">
                                        My Company Name
                                    </h3>
                                    <p style="font-size: 10px; " class="title-personal-info m-0">
                                       Type of business
                                    </p>
                                </div>
                              </h5>

                              <hr class="lsep">
                              <p class="card-text title-personal-info m-0" style="font-size:10px;">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur
                                <br><br>
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur
                                <br><br>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum.
                              </p>
                              <div class="row py-4">
                                <div class="col-md-12 text-center">
                                  <a href="#" style="text-transform: uppercase; font-size:0.6em; font-family:'oswald',san-serif;" class="card-link btn btn-outline-secondary">read more</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                     {{-- comments end--}}
                </div>
                <div class="container">
                    <hr>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination comments-pagination justify-content-center">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
<script>
    let client_job_posts;
    let client_business_info;
    let comments;
    let client_job_posts_current_page = 0;
    let comments_current_page = 0;


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


    if(client_id) {
        getData('/api/Client/'+client_id, ({data:res}) => {
            if(res.success) {
                let client = res.data;
                client_business_info = client.client_business_info;


                let client_employees = client.client_employees.filter(p => p.status == 'Hired');

                $('.client_job_posts_count').html(client.client_job_posts.length);
                $('.client_employees_count').html(client_employees.length);



                Object.keys(client).map((field, key) => {
                    let element = $('.job_post-'+field);
                    if(element.length) {
                        element.html(client[field]);
                        element.val(client[field]);
                    }
                });

                Object.keys(client).map((field, key) => {
                    let element = $('.client-'+field);
                    if(element.length) {
                        element.html(client[field]);
                    }
                });

                Object.keys(client_business_info).map((field, key) => {
                    let element = $('.client_business_info-'+field);
                    if(element.length) {
                        element.html(client_business_info[field]);
                    }
                });

                let client_job_posts_per_page = 10;
                client_job_posts = paginate(client.client_job_posts, client_job_posts_per_page);

                $('.client_job_posts-total').html(client.client_job_posts.length);
                populateJobPosts(0);



                let comments_per_page = 1;
                comments = paginate(client.user.comments, comments_per_page);
                console.log('client.comments',client.user.comments);
                $('.comments-total').html(client.user.comments.length);
                populateComments(0);

            }
        });

        function populateJobPosts(page_number) {
            $('.client_job_post_container').empty();
            client_job_posts_current_page = page_number;
            $('.client_job_posts-per_page').html(client_job_posts[client_job_posts_current_page].length);
            client_job_posts[client_job_posts_current_page].map((client_job_posts, key) => {
                $('.client_job_post_container').append(
                    '<div class="col-md-4 my-2 card  shadow" style="border-radius: 10px;" >'+
                        '<div class="card-body">'+
                            '<h5 class="card-title" style="font-size:15px;"> '+client_job_posts.job_title+'</h5>'+
                            '<h6 class="card-subtitle mb-2 text-muted">'+
                                '<div class="row" style="text-transform: capitalize;">'+
                                    '<div class="col-md-2 pr-0" style="font-size:9px;">'+
                                    '<div class="border border-primary rounded px-1" style="width: 42px;">'+client_job_posts.job_type+'</div>'+
                                    '</div>'+
                                    '<div class="col-md-4 " style="font-size:9px;">'+
                                    '<i class="fas fa-building"></i>'+
                                    ''+client_business_info.business_name+''+
                                    '</div>'+
                                    '<div class="col-md-3 " style="font-size:8px;">'+
                                    '<i class="fas fa-money-bill-wave-alt"></i>'+
                                    ''+client_job_posts.salary+''+
                                    '</div>'+
                                    '<div class="col-md-3 " style="font-size:8px;">'+
                                    '<i class="fas fa-clock"></i>'+
                                    'posted: '+client_job_posts.start_date+''+
                                    '</div>'+
                                '</div>'+
                            '</h6>'+
                            '<hr class="lsep">'+
                            '<p class="card-text" style="font-size:10px;">'+
                            ''+client_job_posts.job_description+''+
                            '</p>'+
                            '<div class="row pb-4">'+
                                '<div class="col-md-12 text-center">'+
                                '<a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            })

            populateJobPostsPagination();
        }

        function populateJobPostsPagination() {
            $('.client_job_posts-pagination').empty();
            let prev_disabled = client_job_posts_current_page == 0 ? 'disabled' : '';
            let next_disabled = client_job_posts_current_page == client_job_posts.length -1 ? 'disabled' : '';
            $('.client_job_posts-pagination').append(
                '<li class="page-item '+prev_disabled+'">'+
                    '<a class="page-link client_job_posts-prev_page" href="#" tabindex="-1" aria-disabled="true">Previous</a>'+
                '</li>'
            );
            for (let index = 0; index < client_job_posts.length; index++) {
                let active = (index == client_job_posts_current_page ? 'active' : '');
                $('.client_job_posts-pagination').append(
                    '<li class="page-item '+active+'"><a class="page-link client_job_posts-page" href="#">'+(index + 1)+'</a></li>'
                );

            }
            $('.client_job_posts-pagination').append(
                '<li class="page-item '+next_disabled+'">'+
                    '<a class="page-link client_job_posts-next_page" href="#">Next</a>'+
                '</li>'
            );
        }


        $('body').on('click', '.client_job_posts-page', function(e) {
            e.preventDefault();

            let page = $(this).html();
            page = page -1;
            populateJobPosts(page);
        });

        $('body').on('click', '.client_job_posts-prev_page', function(e) {
            e.preventDefault();
            populateJobPosts(client_job_posts_current_page -1);
        });

        $('body').on('click', '.client_job_posts-next_page', function(e) {
            e.preventDefault();
            populateJobPosts(client_job_posts_current_page +1);
        });


        function populateComments(page_number) {
            $('.comments_container').empty();
            comments_current_page = page_number;
            $('.comments-per_page').html(comments[comments_current_page].length);
            console.log('comments[comments_current_page]',comments[comments_current_page]);
            comments[comments_current_page].map((comment, key) => {
                console.log('comment',comment);
                let jobseeker = comment.created_by.jobseeker; //jobseeker_photo
                console.log('jobseeker',jobseeker);
                let name = comment.created_by.firstname + ' ' + comment.created_by.lastname;
                let image = jobseeker.jobseeker_photo ? jobseeker.jobseeker_photo : 'https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png';

                $('.comments_container').append(
                    '<div class="col-md-4 my-2 shadow" style="border-radius: 10px;" >'+
                        '<div class="card-body">'+
                            '<h5 class="card-title d-flex" style="font-size:15px;">'+
                            '<div class="profile-pic shadow my-auto" style="height:50px; width:50px;">'+
                                '<img src="'+image+'" style="height:50px;" alt="" />'+
                            '</div>'+
                            '<div class="my-auto pl-2">'+
                                '<h3 style="font-size:15px; margin:0;">'+name+'</h3>'+
                                '<p style="font-size: 10px; margin:0;">'+
                                    ''+jobseeker.jobseeker_profession.job_title+''+
                                '</p>'+
                            '</div>'+
                            '</h5>'+

                            '<hr class="lsep">'+
                            '<p class="card-text" style="font-size:10px;">'+
                            ''+comment.content+''+
                            '</p>'+
                            '<div class="row pb-4">'+
                                '<div class="col-md-12 text-center">'+
                                '<a href="#" style="text-transform: uppercase; font-size:8px" class="card-link btn btn-outline-secondary">read more</a>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'
                );
            });

            populateCommentsPagination();

        }

        function populateCommentsPagination() {
            $('.comments-pagination').empty();
            let prev_disabled = comments_current_page == 0 ? 'disabled' : '';
            let next_disabled = comments_current_page == comments.length -1 ? 'disabled' : '';
            $('.comments-pagination').append(
                '<li class="page-item '+prev_disabled+'">'+
                    '<a class="page-link comments-prev_page" href="#" tabindex="-1" aria-disabled="true">Previous</a>'+
                '</li>'
            );
            for (let index = 0; index < comments.length; index++) {
                let active = (index == comments_current_page ? 'active' : '');
                $('.comments-pagination').append(
                    '<li class="page-item '+active+'"><a class="page-link comments-page" href="#">'+(index + 1)+'</a></li>'
                );

            }
            $('.comments-pagination').append(
                '<li class="page-item '+next_disabled+'">'+
                    '<a class="page-link comments-next_page" href="#">Next</a>'+
                '</li>'
            );
        }


        $('body').on('click', '.comments-page', function(e) {
            e.preventDefault();

            let page = $(this).html();
            page = page -1;
            populateComments(page);
        });

        $('body').on('click', '.comments-prev_page', function(e) {
            e.preventDefault();
            populateComments(comments_current_page -1);
        });

        $('body').on('click', '.comments-next_page', function(e) {
            e.preventDefault();
            populateComments(comments_current_page +1);
        });

    }

});
</script>
@endsection

