@section('front')
<section class="frontSection-1">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <h1>YOUR GO-TO PARTNER IN HIRING THE BEST VIRTUAL ASSISTANTS</h1>
                <P>The leading marketplace in helping entrepreneurs in finding great talents to scale their business that offers the most affordable rates. Hire your Virtual Assistant Today</P>

                <button class="btn btn-cta">CLICK HERE TO FIND OUT</button>

                <form action="#" class="d-flex justify-content-around p-3">
                    
                        <input type="text" class="form-control" placeholder="Start Your Search Here">

                        <select class="form-control">
                            <option value="1">Select Category</option>
                        </select>

                        <button class="btn btn-block btn-search">SEARCH</button>

                </form>
            </div>
        </div>
    </div>

</section>

<section class="frontSection-2">

    <!-- <div class="container-fluid h-50">
        <div class="row text-center">
            <div class="col col-md-6  ">
                {{-- <div class="text-center" style="width:500px;"> --}}
                    <div class="container py-3 h-100 d-flex flex-column justify-content-end">
                        <h4 class="text-light w-75 mx-auto ">{{ $subs['title'] }}</h4>
                        <hr class="bg-light " />
                        <p class=" w-50 mx-auto text-light">{{ $subs['body'] }}</p>
                        <button class="btn w-50 mx-auto text-light hiringProcessBtn">{{ $subs['btnTxt'] }}</button>
                    </div>
                {{-- </div> --}}
            </div>
            <div class=" col col-md-6 ">
                <div class="card p-5 m-4 shadow" style="border-radius: 20px;">
                    <b class="text-center">{{ $subs['cardTitle'] }}</b>
                    <h4 class="text-center">{{ $subs['cardSubtitle'] }}</h4>
                    <p class="text-center">{{ $subs['cardBody'] }}</p>
                    @foreach($subs['checkList'] as $list)
                        <span>
                            <input class="mr-2" type="checkbox" checked />
                            <label>{{ $list }}</label>
                        </span>
                    @endforeach

                    <button class="btn learnBtn">{{ $subs['learnBtn'] }}</button>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center leftColumn">
                <h2>
                    Handpicked Candidates with Great Potentials
                </h2>
                <p>
                    With our skilled Virtual Assistants on out marketplace, any business can tackle a wide range of projects. From Graphic Designing to SEO blogging, name it all. We got you covered!
                </p>

                <button class="btn btn-hire">START YOU HIRING PROCESS NOW</button>

            </div>
            
            <div class="col-md-6 rightColumn">
                <div class="card text-center">
                    <h2>
                        SUBSCRIBE TO OUR PREMIUM PACKAGE AND HIRE YOUR OWN VIRTUAL STAFF
                    </h2>
                    <h4>
                        PRO ENTREPRENEUR PACKAGE
                    </h4>
                    <p>We'll help you find your skilled virtual staff to scale your business.</p>

                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>
                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>
                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>
                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>
                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>
                    <span>
                        <input class="mr-2" type="checkbox" checked />
                        <label>UNLIMITED JOB POSTING</label>
                    </span>

                    <button class="btn btn-learn">LEARN MORE ABOUT THE ADVANTAGES</button>

                </div>
            </div>

        </div>
    </div>

</section>

<section class="frontSection-3">
    <!-- <div class="container h-100 d-flex flex-column justify-content-center">
        <div class=" text-center">
            <h1 class="content">{{ $media['title'] }}</h1>
            <button class="playIcon"></button><br />
            <button class="btn findOutBtn">{{ $media['btnTitle'] }}</button>
        </div>
    </div> -->
    
    <div class="container-fluid text-center">
        <h1>Upskill your Virtual Assistants to their full Potential</h1>
        <button class="playIcon"></button> <br>
        <button class="btn btn-foh">WATCH THE VIDEO AND FIND OUT HOW</button>
    </div>

</section>

<section class="frontSection-4">

    <!-- <div class="container h-100">
        <br /><br />
        <h2 class="text-center">{{ $careers['title'] }}</h2>
        <center>
            <span class="btn findOutMore mt-3"><small>{{ $careers['btnTitle'] }}</small></span>
        </center>
        <br/>
        <div class="container mt-4">
               <div class="row d-flex ">
            @foreach($careers['careers'] as $row)
            <div class="col-md-2 career-margin">
                <div class="card shadow h-100 py-2 mx-4 carrer-box" style="width:180px;">
                    <div class="my-4 img-career-container{{ $row['img'] }}"></div>
                    <h5 class="pb-4 text-center">{{ $row['name'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <h2>
            Specialized Careers
        </h2>
        <button class="btn-fom">FIND OUT MORE</button>

        <div class="row">
            <div class="col-md-2">
                <div class="card shadow">
                    <img src="{{url('../../public/assets/images/frontAssets/social-media@2x.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>

</section>

<section class="frontSection-5">
    <!-- <div class="container">
        <br /><br />
        <center>
            <h2>{{ $teams['title'] }}</h2>
            <h5 class="text-center teamsBody">{{ $teams['body'] }}</h5>
            <span class="btn findOutMoreBtn"><small> {{ $teams['btnTxt'] }} </small></span>
        </center>
        <br/>
        <div class="d-flex justify-content-between">
            @foreach($teams['workers'] as $row)
            <div>
                <img src="{{ $row['img'] }}" />
                <p class="text-center"><b>{{ $row['name'] }}</b></p>
                <p class="text-center">{{ $row['ratings'] }}</p>
            </div>
            @endforeach
        </div>
    </div> -->

    <div class="container-fluid">
        <h2>
            Our Top Remote Workers
        </h2>
        <p>
            Be with only the best. Meet our top performing Virtual Assistants, see how they love working remotely and how they will help you level up your business!
        </p>

        <button class="btn-fom">FIND OUT MORE</button>

        <div class="row">
            <div class="col-md-3">
                <img src="" alt="" class="img-fluid">
                <h4>
                    Jane Doe
                </h4>
                <p>
                    Credit Repair Specialist
                </p>

            </div>
        </div>

    </div>

</section>

<section class="frontSection-6">
    <div class="container py-4">

                @foreach($testimonials as $row)
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center flex-column">
                        <div class="{{ $row['img'] }}"> </div>
                    </div>
                    <div class="col-md-6  d-flex justify-content-center flex-column">
                        <h5><b>{{ $row['title'] }}</b></h5>
                        <div class="d-flex justify-content-start">
                            @foreach(array_keys($row['metaData']) as $data)
                            <p class="p-2">Icon {{ $row['metaData'][$data] }}</p>
                            @endforeach
                        </div>
                        <p> {{ $row['body'] }} </p>
                        {{-- <div class="d-flex justify-content-between mt-5">
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
                @endforeach
            </div>

</section>

@endsection
