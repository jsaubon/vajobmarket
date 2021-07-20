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
                <a class="nav-link active text-center text-dark" style="width:50%;" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                    <b>Job Posts</b>
                </a>
                <a class="nav-link text-center text-dark" style="width:50%;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    <b>Candidates</b>
                </a>
            </div>
        </nav>
        <br/>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Showing 5 Job Posts out of 25</p>
                <div class="row mt-4">

                    @foreach($jobPosts as $post)
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
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p>Showing 5 Job Posts out of 25</p>
                <div class="row mt-4">

                    @foreach($candidates as $cand)
                    <div class="col-sm-6">
                        <div class="card shadow p-4" style="border-radius: 20px;">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:80px; width:80px; border-radius: 40px; object-fit:cover;" />
                                </div>
                                <div class="col-sm-6" style="margin: 10px 0px;">
                                    <b>{{ $cand['name'] }}</b>
                                    <p>{{ $cand['occupation'] }}</p>
                                </div>
                                <div class="col-sm-3">
                                    Ratings: {{ $cand['ratings'] }}
                                </div>
                            </div>
                            <hr/>
                            <p>{{ $cand['coverLetter'] }}</p>
                            <button class="btn" style="border:1px solid #000;">{{ $post['btnTxt'] }}</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <hr/>
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    let current_page = 1;
    let page_count = 1;
    $(document).ready(function() {
        getJobPosts(1);
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
            // alert();
            getJobPosts(1, $(this).val());
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


   
</script>
@endsection
