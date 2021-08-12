@extends('layouts.app')

@section('front')

<div class="container-fluid overflow-hidden px-0">
    <section class="js-aboutSection-1">
        <div class="container-fluid text-center">
            <button class="playIcon"></button>
        </div>
    </section>

     <!-- js-about -->
    <section class="aboutSection-2">
        <div class="container-fluid text-xl-center text-sm-center">
            <div class="row flex-row-reverse">
                <div class="col-xl-6 col-lg-12">
                   
                    <img class="img-fluid ml-4 float-none float-xl-left"src="{{URL::to('/images/aboutAssets/js-about-s2.jpg')}}" alt="">
                </div>
                <div class="col-xl-6 col-lg-12 ">
                    <div class="text-justify w-75 mr-xl-4 mx-auto float-none  float-xl-right" style="padding-left:60px;">
                        <h2>What is VAJobMarket?</h2>
                        <p>As you know by now, VA Job Market is an online outsourcing platform
                           that will help you find job opportunities which you may consider applying for. 
                           You may consider us as your “bridge” towards your next employer: we’ll show you 
                           all the job postings, sort things out based on your skills and job preference, 
                           get yourself hired by one of the business owners, and we’ll still be there for 
                           you during the duration of your deployment with our client. It’s going to be a 
                           commitment and we hope you’re ready for this!
                        </p>
                        <p><b>1.) Why VAJobMarket? </b></p>
                        <p>Unlike other job platforms, VAJobMarket makes it super easy for you to be hired 
                            by companies internationally. May it be full time, part time or just project 
                            based, we got you covered! It’s easy, hassle free and most importantly,
                             you earn while you’re just at home!
                        </p>
                      
                        <p><b>2.) Your Benefits when you get hired through VAJobMarket</b></p>

                            <ul>
                                <li>
                                    <p>
                                        <em> Organized Job Grid</em>
                                        <br>
                                        &emsp; &emsp;
                                        We offer a ton of postings and what we do is to keep everything
                                         organized or systematic for a more efficient view of available 
                                         job opportunities; not to mention, the platform also reads the 
                                         information in your profile and tries its best to only show you 
                                         what could possibly match yours.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                       <em> Profile Matching with Job Postings</em>
                                        <br>
                                        &emsp; &emsp;
                                        Overwhelming as it may be for most, we also do our own profile 
                                        matching against the open requisitions we have in the platform. 
                                        We try to recommend certain job openings for candidates, aside 
                                        from what is based on your profile information, based on your 
                                        credentials and also certain aptitude exercises so that we can
                                         better see your capabilities.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                       <em> Get You Hired ASAP</em>
                                        <br>
                                        &emsp; &emsp;
                                        It would be anyone’s desire to get the role that they want, 
                                        ASAP! With all considerations in place and favoring you, we will 
                                        do our best to guide you all the way from getting you selected as 
                                        a potential candidate, going through interviews and examinations
                                         as needed, and finally obtaining that affirmation of being hired
                                          as the new Virtual Assistant.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <em> Assist You with Client Relationship</em>
                                       
                                        <br>
                                        &emsp; &emsp;
                                        We highly value the work environment and client-virtual assistant 
                                        relationship within VA Job Market and you’re assured that we may not
                                         be involved in the nitty gritty of your workload, but we’ll be more 
                                         than happy to properly onboard and deploy you with your client and 
                                         quickly assist you if you have any concerns with your employment.
                                    </p>
                                </li>
                                
                            </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
      <!-- js-about end -->

    <section class="aboutSection-Testimonial">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card shadow testimonial">
                        <div class="row">

                            <div class="col-md-4 text-center">
                                <img src="{{URL::to('/images/frontAssets/dummy.jpg')}}" class="img-fluid img-circle" alt="">
                                <h4>Ms. Maggie Sales</h4>
                                <p>Client</p>
                            </div>

                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quos repellendus tenetur quod beatae voluptatum debitis nesciunt vel delectus similique?</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
    </section>

    <section class="aboutSection-3">
        <div class="container-fluid">
            <div class="text-center">

               <div class="row">
                    <div class="col-md-12">
                        <h2>OUR SERVICES</h2>
                    </div>
                    <div class="col-md-12">
                        <p >We offer a wide array of services which will help you and your business grow further!</p>

                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 fixed-width">
                        <div class="d-flex justify-content-start p-4 w-100 specialized-sm   mx-auto">
                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2" src="{{URL::to('/images/aboutAssets/job.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Job Posting
                                    </h4>
                                    <p>
                                        We’ll post available and updated positions on your behalf
                                        based on your requirements
                                    </p>
                                    <div class="my-3"></div>
                                    <button class="btn-learn mt-4 w-100">Learn More</button>
                                </div>
                            </div>

                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2" src="{{URL::to('/images/aboutAssets/approved.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Professional Hiring
                                    </h4>
                                    <p>
                                        Course through applications and get to select the appropriate
                                        candidates for the roles
                                    </p>
                                    <div class="my-3"></div>
                                    <button class="btn-learn w-100 mt-4">Learn More</button>
                                </div>
                            </div>

                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2" src="{{URL::to('/images/aboutAssets/marketing.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Client Liason
                                    </h4>
                                    <p>
                                        Ensure a smooth and seamless transitions of your chosen VAs into
                                         their corresponding role in your organization
                                    </p>
                                    <div class="my-1"></div>
                                    <button class="btn-learn mt-4 w-100">Learn More</button>
                                </div>
                            </div>

                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2" src="{{URL::to('/images/aboutAssets/value.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Permanent Staffing
                                    </h4>
                                    <p>
                                        Facilitate required candidates for long-term employment based
                                        on specified factors
                                    </p>
                                    <div class="my-3"></div>
                                    <button class="btn-learn w-100 mt-4">Learn More</button>
                                </div>
                            </div>

                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2" src="{{URL::to('/images/aboutAssets/finance.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Payroll Management
                                    </h4>
                                    <p >
                                        We are responsible in providing all financial records and release
                                        of compensations/benefits
                                    </p>
                                    <div class="my-3"></div>
                                    <button class="btn-learn w-100 mt-4">Learn More</button>
                                </div>
                            </div>

                            <div class="col-md-2 text-wrap fixed-width h-auto w-auto">
                                <div class="card shadow p-3 w-auto h-100">
                                    <img class="pb-4 mx-auto  mt-4 mb-2"  src="{{URL::to('/images/aboutAssets/support.png')}}" alt="" >
                                    <h4 class="pb-4 mx-auto my-2">
                                        Premium Support
                                    </h4>
                                    <p>
                                        End-to-end support with all that you’ll need from hiring, training,
                                        monitoring, and evaluating your virtual assistant so as to ensure that
                                        we’re aligned with your goals
                                    </p>
                                    <button class="btn-learn w-100 mt-2">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

  
    <section class="aboutSection-4 h-auto">
        <div class="container-fluid h-auto">
            <div class="row">

            <div class="col-md-12 h-auto">
                <div class="row h-auto">
                    <div class="col-lg-12  d-none d-xl-block col-xl-4 h-100 position-relative">
                        <img class="about-va-background" src="{{URL::to('/images/aboutAssets/iHR-Buddy-VAs.png')}}" alt="">
                        <img class="about-bosskenn-background" src="{{URL::to('/images/aboutAssets/kenncollier.png')}}" alt="">

                     </div>
                    <div class="col-lg-12 col-xl-7 p-4 ">

                        <div class="row mx-lg-auto">

                            <div class="col-lg-4 d-lg-none d-xl-block">

                            </div>
                            <div class="col-xl-8 col-12">

                                <div class="my-4 py-4"></div>
                                        <div class="card p-4 shadow h-auto mx-0 mx-lg-auto m-xl-0" style="z-index: 3">
                                            <h2>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.

                                            </p>

                                            <p class="text-left">
                                                <span>Kenn Collier</span><br>
                                                Chief Executive Officer
                                            </p>
                                            <div class="my-4 py-4"></div>
                                            <div class="my-4 py-4"></div>
                                            <div class="my-4 py-4"></div>
                                        </div>
                                </div>
                             </div>

                    </div>

                    <div class="col-lg-12  d-xl-none d-block col-xl-4 h-auto text-lg-center">
                        <img class="img-fluid" src="{{URL::to('/images/aboutAssets/kenncollier.png')}}" alt="">
                    </div>
                </div>
            </div>





            </div>
        </div>
    </section>
</div>

@endsection
