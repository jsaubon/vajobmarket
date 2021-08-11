@section('front')

    <section  id="carouselExampleIndicators" class=" frontSection-1 p-0 carousel slide carousel-fade  w-auto " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="container-fluid d-flex flex-column justify-content-center">
            <div class="row mx-auto mx-md-0">
                <div class="col-md-12 w-auto text-wrap">

                    <h1 >YOUR GO - TO PARTNER IN HIRING THE BEST VIRTUAL ASSISTANTS</h1>
                    <P class="text-wrap">The leading marketplace in helping entrepreneurs in finding great talents to scale their business that offers the most affordable rates. Hire your Virtual Assistant Today</P>

                    <button class="btn btn-cta">CLICK HERE TO FIND OUT</button>

                    <div class="row w-md-75 mx-md-1 mx-lg-0">
                        <div class="col-xl-6 col-lg-12 p-sm-auto p-md-0   mx-sm-auto">
                            <form action="#" class="row flex-sm-column py-sm-3 mx-auto mx-sm-auto mx-md-auto mx-lg-0 w-md-75 flex-md-row">
                                <div class="col-md-4  col-sm-12">
                                    <input type="text" class="form-control mx-0 input-search" placeholder="Start Your Search Here">
                                </div>
                                <div class="col-md-4 col-sm-12">

                                        <select class="form-control my-sm-2 my-md-0 mx-0">
                                            <option value="1">Select Category</option>
                                        </select>
                                </div>
                                <div class="col-md-4   col-sm-12">
                                        <button class="btn btn-block btn-search mx-0" type="button">SEARCH</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 w-auto p-sm-3">

                    <h1 >YOUR GO - TO PARTNER IN HIRING THE BEST VIRTUAL ASSISTANTS</h1>
                    <P class="text-wrap">The leading marketplace in helping entrepreneurs in finding great talents to scale their business that offers the most affordable rates. Hire your Virtual Assistant Today</P>

                    <button class="btn btn-cta">CLICK HERE TO FIND OUT</button>

                <div class="row  w-sm-75 w-md-100">
                    <div class=" col-lg-6 col-md-12">
                        <form action="#" class="row flex-sm-column flex-md-row">
                            <div class="col-md-4 col-sm-12">
                                <input type="text" class="form-control mx-0 input-search" placeholder="Start Your Search Here">
                            </div>
                            <div class="col-md-4 col-sm-12">

                                    <select class="form-control my-sm-2 my-md-0 mx-0">
                                        <option value="1">Select Category</option>
                                    </select>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                    <button class="btn btn-block btn-search mx-0" type="button">SEARCH</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12">

                    </div>
                </div>
                </div>
            </div>
        </div> --}}

        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> --}}

            <div class="carousel-inner">

                <div class="carousel-item  active carousel-1" >

                </div>
                <div class="carousel-item carousel-2" >
                    <img src="" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item carousel-3" >
                    <img src="" class="d-block w-100" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> --}}
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span> --}}
            </a>
      {{-- </div> --}}


</section>

<section class="h-auto min-vh-100 overflow-hidden">
    <div class="row flex-column h-100">
        <div class="col-md-12 p-0 h-100  frontSection-2 overflow-hidden" style="min-height: 50vh">
                <div class="row flex-sm-column flex-md-row h-100 ">
                    <div class="col-md-1 d-lg-none d-xl-block">

                    </div>
                    <div class="col-md-12 col-lg-5 text-center leftColumn ">

                        <div class="row" style="z-index:10; position:relative;">
                            <div class="col-md-12 text-wrap">
                                <h2 class="mx-lg-auto">
                                    Handpicked Candidates with Great Potentials
                                </h2>
                            </div>
                            <div class="col-md-12 ">
                                <div class="row w-100 mx-auto container-fluid">
                                    <div class="col-md-2 d-none d-lg-block"></div>
                                    <div class="col-md-12 col-lg-12 border-top">
                                      <p>
                                          With our skilled Virtual Assistants on out marketplace, any business can tackle a wide range of projects. From Graphic Designing to SEO blogging, name it all. We got you covered!
                                      </p>
                                    </div>
                                    <div class="col-md-2  d-none d-lg-block"></div>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <button class="btn btn-hire">START YOU HIRING PROCESS NOW</button>
                            </div>
                        </div>
                        <div class="opacity_div"></div>
                        <img src="{{URL::to('/images/frontAssets/landing-2-va.png')}}" alt="">
                    </div>
                    <div class="col-md-1 p-0 d-lg-none d-xl-block">
                    </div>
                    <div class="col-md-4 p-4 h-100 text-center my-auto rightColumn">
                        <div class="card py-4 ">
                            <h2>
                                SUBSCRIBE TO OUR PREMIUM PACKAGE AND HIRE YOUR OWN VIRTUAL STAFF
                            </h2>
                            <h4>
                                PRO ENTREPRENEUR PACKAGE
                            </h4>
                            <p>We'll help you find your skilled virtual staff to scale your business.</p>

                            <div class="row w-75 text-left mx-auto">
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>UNLIMITED JOB POSTING</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Job Displayed for 30 Days</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Weekly Featured Ad Jobs</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Email and Chat Support 24/7</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Unlimited Download of Candidate Resume PDF</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Quick VA Skilled Matching</label>
                                </div>
                                <div class="col-md-12">
                                    <input class="mr-2" type="checkbox" checked />
                                    <label>Access to Exckysuve Facebook Community</label>
                                </div>
                            </div>

                            <button class=" mx-auto w-75 btn-learn">LEARN MORE ABOUT THE ADVANTAGES</button>
                        </div>
                    </div>

                    <div class="col-md-1 d-lg-none d-xl-block">
                    </div>
                </div>
        </div>
        <div class="d-xl-none col-lg-12 p-3"  style="min-height: 20vh">

            <div class="container">
                @include('primary-pages.front.right-col')
            </div>

        </div>
        <div class="col-md-12 h-100  frontSection-3" style="min-height: 50vh">
            <div class="container-fluid h-auto text-center">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <h2 >
                            Upskill your Virtual Assistants to their full Potential
                        </h2>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <button class="playIcon"></button> <br>
                <button class="btn-foh">WATCH THE VIDEO AND FIND OUT HOW</button>

            </div>
        </div>


        {{-- section 2 bottom portion --}}
        {{-- <div class="col-md-12 h-50 frontSection-3 p-0">

            <div class="container-fluid h-auto text-center">

                    <h2>Upskill your Virtual Assistants to their full Potential</h2>
                    <button class="playIcon"></button> <br>
                    <button class="btn-foh">WATCH THE VIDEO AND FIND OUT HOW</button>

            </div>
        </div> --}}
    </div>

</section>

<section class="frontSection-4 h-auto">

    <div class="text-center px-0 py-4 d-flex my-4 flex-column justify-content-center container-fluid">

        <div class="row ">

            <div class="col-md-12 text-center">
                <h2>
                    SPECIALIZED CAREERS
                </h2>
            </div>

            <div class="col-md-12 text-center">
                <button class="btn-fom">FIND OUT MORE</button>
            </div>


            <div class="col-md-12 fixed-width">
                <div class="d-flex justify-content-start p-4 w-100 specialized-sm   mx-auto">
                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/social-media@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Social Media Manager
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/content@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Content Writer
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/credit-card@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Credit Repair Assistant
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/digital-assistant@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Executive Assistant
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/30-appointment@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Appointment Setter
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-2 text-wrap fixed-width h-auto w-auto ">
                        <div class="card shadow p-3 w-auto h-100">
                            <img class="pb-4 mx-auto my-2" src="{{URL::to('/images/frontAssets/media-monitor-screen-Digital Marketing@2x.png')}}" alt="" >
                            <h4 class="pb-4 mx-auto my-2">
                                Digital Marketing Specialist
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>

<section class="frontSection-5 h-auto p-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            OUR TOP REMOTE WORKERS
                        </h2>
                    </div>
                    <div class="col-12">
                        <p>
                            Be with only the best. Meet our top performing Virtual Assistants, see how they love working remotely and how they will help you level up your business!
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn-fom">FIND OUT MORE</button>
                    </div>
                </div>
               

                <div class="row mb-0">
                    <div class="col-md-3">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="" class="img-fluid img-circle">
                        <h4>
                            John Adams
                        </h4>
                        <p>
                            Web Developer
                        </p>

                    </div>

                    <div class="col-md-3">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="" class="img-fluid img-circle">
                        <h4>
                            Jane Doe
                        </h4>
                        <p>
                            Credit Repair Specialist
                        </p>

                    </div>

                    <div class="col-md-3">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="" class="img-fluid img-circle">
                        <h4>
                            Megan Schmidth
                        </h4>
                        <p>
                            Executive Assistant
                        </p>

                    </div>

                    <div class="col-md-3">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt="" class="img-fluid img-circle">
                        <h4>
                            Mark Cameron
                        </h4>
                        <p>
                            Graphic Designer
                        </p>

                    </div>

                </div>

            </div>


</section>

<section class="frontSection-6 h-auto">
    <div class="row">
        <div class="col-md-1 my-auto text-right">
            <button  class="mx-auto rotate-button border-0 p-0 bg-transparent" >
                <img  class="a-left" src="{{URL::to('/images/frontAssets/arrow-go-right@2x.png')}}" alt="">
            </button>
        </div>
        <div class="col-md-10">
            <div class="container py-4">

                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center flex-column">
                            <img src="{{URL::to('/images/frontAssets/blog-imag01@2x.png')}}" alt="">
                        </div>
                        <div class="col-md-6  d-flex justify-content-center flex-column">
                              <div class="d-flex justify-content-start flex-column">
                                <div class="row  w-75">
                                    <div class="col-md-12">
                                    <h5>
                                        <b>
                                            Our top ReWill Hiring a Virtual Assistant Help
                                                you Survive this Crisis?
                                        </b>
                                    </h5>
                                    </div>
                                </div>
                                <div class="row w-75">
                                    <div class="col-md-3 pr-0">
                                        <i class="fas fa-clock"></i>
                                        1 hr ago
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fas fa-heart"></i>
                                        609
                                    </div>
                                    <div class="col-md-3">
                                        <i class="far fa-comment-dots"></i>
                                        120
                                    </div>
                                    <div class="col-md-3">
                                       <b class="text-uppercase"> share</b>
                                    </div>
                                </div>
                                <div class="row w-75 pt-3">
                                    <p>
                                        the pandemic had made this year a tough year for all of us.
                                        As everyone stays at home on lockdown, so are business. But as business owners,
                                        we're also just humans that worry about our own family and want to take care
                                        of them, but how dow we do such, without pausing our business?
                                    </p>
                                </div>
                            </div>
                            {{-- <p> {{ $row['body'] }} </p>
                            <div class="d-flex justify-content-between mt-5">
                                <div class="d-flex">
                                    <img src="{{ $row['user']['img'] }}" class="userImg" />
                                    <span class="userContext">
                                        <p>{{ $row['user']['name'] }}{{ $row['user']['job'] }}</p>
                                    </span>
                                </div>
                                <a href="#seemore"><span class="btn readMoreBtn"><small>READ MORE</small></span></a>
                            </div> --}}
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="col-md-1 my-auto text-left">
            <button  class=" border-0 p-0 bg-transparent" >
                <img class="a-right"src="{{URL::to('/images/frontAssets/arrow-go-right@2x.png')}}" alt="">
            </button>
        </div>
    </div>


</section>



<script>
    $('.btn-search').on('click', function() {
        let search = $('.input-search').val();
        window.location.href = '/jobs?search='+search;
    })

    var testimonials = document
    // $('.carousel').carousel({

    // touch:true;
    // })
</script>
@endsection
