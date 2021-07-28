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



                <div class="card">
                    <div class="row">

                        <div class="col-sm-6 text-center">
                            <img src="{{URL::to('/images/frontAssets/dummy.jpg')}}" class="img-fluid img-circle" alt="">
                            <h4>Ms. Maggie Sales</h4>
                            <p>Client</p>
                        </div>

                        <div class="col-sm-6">
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aspernatur alias nobis pariatur expedita eum ullam amet modi, quas consequuntur dolores laudantium nisi, eos qui impedit architecto voluptas, quaerat iste!</p>

            <div class="row">

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Job Posting</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Professional Hiring</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Client Liason</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Permanent Staffing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Payroll Management</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>

                    <div class="col-md-2 card">
                        <img src="{{URL::to('/images/aboutAssets/job.png')}}" alt="">
                        <h4>Premium Support</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, commodi repellendus ipsam consectetur ipsa molestiae ipsum nobis voluptatum. Tempora nesciunt sunt similique earum est, ab esse nemo reprehenderit nobis laboriosam.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

            </div>

            <div class="col-md-6 testimonial">
                <div class="card">
                    <h2>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo iure sequi aspernatur, commodi non laboriosam aliquid assumenda exercitationem nisi at facere pariatur qui excepturi. Eos deserunt suscipit quidem quos vitae!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
