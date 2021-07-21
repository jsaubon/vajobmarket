@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/jobSearch.css')}}" rel="stylesheet">
<section class="jobsSection">
    <div class="container">
        <br/> <br/> <br/> <br/>
        <div class="d-flex justify-content-center">
            <div style="width:500px;">
                <h3 class="text-center"><b>
                    {{ $title }}
                </b></h3>
                <input type="text" id="search_job" class="form-control" placeholder="{{ $placeholder }}" />
                <div class="d-flex justify-content-around mt-2 tags">
                    @foreach($tags as $tag)
                    <button class="btn m-1">{{ $tag }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <br/>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active text-center text-dark" style="width:50%;" type="job_posts" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <b>Job Posts</b>
                </a>
                <a class="nav-link text-center text-dark" style="width:50%;" type="candidates" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <b>Candidates</b>
                </a>
            </div>
        </nav>
        <br/>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Showing <span id="job_posts_showing_count">-</span> Job Posts out of <span id="job_posts_all_count">-</span></p>
                <div class="row mt-4" id="job_posts_list">

                    <!-- @foreach($jobPosts as $post)
                    <div class="col-sm-6">
                        <a href="/123">
                            <div class="card shadow p-4" style="border-radius: 20px;">
                                <p class="text-center">{{ $post['title'] }}</p>
                                <div class="d-flex justify-content-between">
                                    @foreach($post['basicInfo'] as $basic)
                                    <span><small>{{ $basic }}</small></span>
                                    @endforeach
                                </div>
                                <hr/>
                                <p>{{ $post['body'] }}</p>
                                <button class="btn">{{ $post['btnTxt'] }}</button>
                            </div>
                        </a>
                    </div>
                    @endforeach -->

                </div>
                <hr/>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" id="job_posts_pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p>Showing <span id="job_seekers_showing_count">-</span> Candidates out of <span id="job_seekers_all_count">-</span></p>
                <div class="row mt-4" id="job_seekers_list">

                </div>
                <hr/>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" id="job_seekers_pagination">
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
                    

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let current_page = 1;
    let page_count = 1;
    
    
    $(document).ready(function() {
        getJobPosts(1);
        getCandidates(1);
        $(document).on('click','.page-link-pages',function(e) {
            e.preventDefault();
            let page = $(this).attr('page');
            getJobPosts(page);
        });
        $(document).on('click','.page-link-previous',function(e) {
            e.preventDefault();

            if(current_page != 1) {
                let page = current_page - 1;
                getJobPosts(page);
            }
            
        });
        $(document).on('click','.page-link-next',function(e) {
            e.preventDefault();
            if(current_page != page_count) {
                let page = current_page + 1;
                getJobPosts(page);
            }
            
        });

        $('#search_job').on('keydown', function() {
            const timeOutId = setTimeout(() => {
                getJobPosts(1, $(this).val());
                getCandidates(1, $(this).val());
            }, 500);
            
        });
 
    });

    function getJobPosts(page, search = '') {
        var url = window.location.origin+'/api/public_job_posts?search='+search+'&page='+page+'&sort_field=start_date&sort_order=asc';
        axios.get(url).then(function({data: res}) {
            console.log(res);
            let data = res.data;
            page_count = res.data.last_page;
            current_page = res.data.current_page;
            
            console.log('res.data.per_page',res.data.per_page);
            $('#job_posts_showing_count').html(res.data.data.length);
            $('#job_posts_all_count').html(res.data.total);
            $('#job_posts_list').empty();

            $('#job_posts_pagination').empty();
            
            res.data.data.map((job_post) => {
                $('#job_posts_list').append('\
                    <div class="col-sm-6">\
                        <a href="/123">\
                            <div class="card shadow p-4" style="border-radius: 20px;">\
                                <p class="text-center">'+job_post.job_title+'</p>\
                                <div class="d-flex justify-content-between">\
                                    <span><small>'+job_post.job_type+'</small></span>\
                                    <span><small>'+job_post.client.client_business_info.business_name+'</small></span>\
                                    <span><small>'+job_post.salary+'</small></span>\
                                    <span><small>'+job_post.start_date+'</small></span>\
                                </div>\
                                <hr/>\
                                <p>'+job_post.job_description+'</p>\
                                <button class="btn">READ MORE</button>\
                            </div>\
                        </a>\
                    </div>\
                ');
            });


            $('#job_posts_pagination').append('\
                    <li class="page-item">\
                        <a class="page-link page-link-previous" href="#" aria-label="Previous">\
                            <span aria-hidden="true">&laquo;</span>\
                        </a>\
                    </li>\
            ');

            for (let index = 0; index < page_count ; index++) {
                let page = (index+1);
                $('#job_posts_pagination').append('\
                    <li class="page-item"><a class="page-link page-link-pages" page="'+page+'" href="#">'+page+'</a></li>\
                ');
            }

            $('#job_posts_pagination').append('\
                    <li class="page-item">\
                        <a class="page-link page-link-next" href="#" aria-label="Next">\
                            <span aria-hidden="true">&raquo;</span>\
                        </a>\
                    </li>\
            ');

        });
    }

    function getCandidates(page, search = '') {
        var url = window.location.origin+'/api/public_job_seekers?search='+search+'&page='+page+'&sort_field=start_date&sort_order=asc';
        axios.get(url).then(function({data: res}) {
            console.log('public_job_seekers',res);
            let data = res.data;
            page_count = res.data.last_page;
            current_page = res.data.current_page;
            
            console.log('res.data.per_page',res.data.per_page);
            $('#job_seekers_showing_count').html(res.data.data.length);
            $('#job_seekers_all_count').html(res.data.total);
            $('#job_seekers_list').empty();

            $('#job_seekers_pagination').empty();
            
            res.data.data.map((job_seeker) => {
                let name = job_seeker.user.firstname+ ' ' + job_seeker.user.lastname;
                let photo = job_seeker.job_seeker_photo ? job_seeker.job_seeker_photo : 'https://i.ibb.co/L1xT86W/profileworkers.jpg';
                $('#job_seekers_list').append('\
                    <div class="col-sm-6">\
                        <div class="card shadow p-4" style="border-radius: 20px;">\
                            <div class="row">\
                                <div class="col-sm-3">        \
                                    <img src="'+photo+'" style="height:80px; width:80px; border-radius: 40px; object-fit:cover;" />\
                                </div>\
                                <div class="col-sm-6" style="margin: 10px 0px;">\
                                    <b>'+name+'</b>\
                                    <p>'+job_seeker.jobseeker_profession.job_title+'</p>\
                                </div>\
                                <div class="col-sm-3">\
                                    Ratings: 100%\
                                </div>\
                            </div>\
                            <hr/>\
                            <p>'+job_seeker.jobseeker_profession.skills_summary+'</p>\
                            <button class="btn" style="border:1px solid #000;">SEE PROFILE</button>\
                        </div>\
                    </div>\
                ');
            });


            $('#job_seekers_pagination').append('\
                    <li class="page-item">\
                        <a class="page-link page-link-previous" href="#" aria-label="Previous">\
                            <span aria-hidden="true">&laquo;</span>\
                        </a>\
                    </li>\
            ');

            for (let index = 0; index < page_count ; index++) {
                let page = (index+1);
                $('#job_seekers_pagination').append('\
                    <li class="page-item"><a class="page-link page-link-pages" page="'+page+'" href="#">'+page+'</a></li>\
                ');
            }

            $('#job_seekers_pagination').append('\
                    <li class="page-item">\
                        <a class="page-link page-link-next" href="#" aria-label="Next">\
                            <span aria-hidden="true">&raquo;</span>\
                        </a>\
                    </li>\
            ');

        });
    }


   
</script>
@endsection