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
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, alias!</h2>
                <img src="{{URL::to('/images/aboutAssets/imghappyclient.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="text-justify">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                </div>
            </div>



                <div class="card testimonial">
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

<section class="aboutSection-GV">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <div class="card text-center shadow">
                    <div class="col">
                        <h2>OUR GOALS</h2>
                        <p>VA Job Market’s primary goal is to help business owners secure the right virtual assistants for their requirements who would play a vital role in growing their businesses further. Alternatively, we also would want to provide an avenue for displaced professionals in the workforce to earn a living and continue with their career and professional growth</p>
                    </div>

                    <div class="col">
                        <h2>THE VISION</h2>
                        <p>
                        Our vision is to become the top-of-mind choice when it comes to sourcing out virtual assistants for most clients as much as possible, but it is world-class services and client satisfaction that we put premium on. We envision our organization to have an environment for individuals to learn the basics, explore their potentials and further improve themselves to become more equipped and competitive.
                        </p>
                    </div>

                </div>

            </div>

            <div class="col-md-6">

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
