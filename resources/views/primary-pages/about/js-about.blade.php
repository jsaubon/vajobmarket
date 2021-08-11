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
                        <h2>WHY HIRE A VIRTUAL ASSISTANT?</h2>
                        <p>A virtual assistant is an independent contractor who provides administrative services to clients while operating outside of the client's office. They typically operate from a home-office but have complete access with the necessary planning documents, such as shared calendars, mailboxes, files, etc. People employed as virtual assistants often have several years of experience as an administrative assistant or office manager. However, new opportunities are opening up for virtual assistants who are skilled in social media, content management, blog post writing, graphic design, and Internet marketing. <br><br>

                        As working from home has become more accepted for both workers and employers, the demand for skilled virtual assistants is expected to grow.
                    </p>
                        <p><b>2.) When Should I Hire a Virtual Assistant? </b></p>
                        <p>Anytime is a good time to add another skilled professional to your team. You might especially want to hire a virtual assistant if:

                            <p>Overwhelmed with your current workload</p>
                            <p>More paperwork than you/your staff can handle</p>
                            <p>Desire to utilize your time more productively</p>
                            <p>Can’t afford another full-time hire</p>
                            <p>Don’t have the skills to perform something with your skillset</p>

                        </p>
                        <p><b>3.) Benefits of Having a Virtual Assistant</b></p>

                            <p>A virtual assistant is a self-employed worker who specializes in offering administrative services to clients from a remote location, usually a home office.</p>
                            <p>Typical tasks include scheduling appointments, making phone calls, making travel arrangements, and managing email accounts.</p>
                            <p>Some specialize in offering graphic design, blog writing, bookkeeping, social media, and marketing services.</p>
                            <p>Increased productivity as virtual assistants tend to be more focused even at home, dedicate their time in accomplishing tasks and put premium with the number one goal of client satisfaction.</p>
                            <p>Greater flexibility as they would be working based on your schedule and would make themselves readily available when needed.</p>
                            <p>Improved work quality as you get the luxury of focusing on business essentials while your VA takes on administrative and/or skill-specific tasks.</p>
                            <p>Another advantage of hiring a virtual assistant is the flexibility to contract only for specific services, which also reduces labor costs rather than hiring a full-time employee and avoids you from risk in scaling operations.</p>

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
