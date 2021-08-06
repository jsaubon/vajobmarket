@extends('layouts.app')

@section('front')

<section class="aboutSection-1">
    <div class="container-fluid text-center">
        <button class="playIcon"></button>
    </div>
</section>

<section class="aboutSection-2">
    <div class="container-fluid text-right">
        <div class="row">
            <div class="col-md-6">
                <h2>WHY HIRE A VIRTUAL ASSISTANT?</h2>
                <img src="{{URL::to('/images/aboutAssets/imghappyclient.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="text-justify">
                    <p><b>1.) What Is a Virtual Assistant? </b></p>
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

<section class="aboutSection-Testimonial">
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
</section>

<section class="aboutSection-3">
    <div class="container-fluid">
        <div class="text-center">
            <h2>OUR SERVICES</h2>
            <p class="subTitle">We offer a wide array of services which will help you and your business grow further!</p>

            <div class="row">

                    <div class="col-md-2 h-100 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Job Posting</h4>
                        <p>We’ll post available and updated positions on your behalf based on your requirements
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/approved.png')}}" alt="">
                        <h4>Professional Hiring</h4>
                        <p>Course through applications and get to select the appropriate candidates for the roles
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/marketing.png')}}" alt="">
                        <h4>Client Liason</h4>
                        <p>Ensure a smooth and seamless transitions of your chosen VAs into their corresponding role in your organization
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/value.png')}}" alt="">
                        <h4>Permanent Staffing</h4>
                        <p>Facilitate required candidates for long-term employment based on specified factors
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/finance.png')}}" alt="">
                        <h4>Payroll Management</h4>
                        <p>We are responsible in providing all financial records and release of compensations/benefits
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card shadow">
                        <img src="{{URL::to('/images/aboutAssets/support.png')}}" alt="">
                        <h4>Premium Support</h4>
                        <p>End-to-end support with all that you’ll need from hiring, training, monitoring, and evaluating your virtual assistant so as to ensure that we’re aligned with your goals
                        </p>
                        <button class="btn-learn">Learn More</button>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection-4">
    <div class="container-fluid">
        <div class="row">

        <div class="col-md-3"></div>

            <div class="col-md-3">

            </div>

            <div class="col-md-6">
                <div class="card shadow">
                    <h2>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </h2>
                    <p>

                    </p>

                    <p class="text-left">
                        <span>Kenn Collier</span><br>
                        Chief Executive Officer
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
