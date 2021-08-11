@extends('layouts.app')

@section('front')
<div class="container-fluid overflow-hidden px-0">
    <section class="contactUs-section-02 h-auto " >
        <div class="container-fluid text-xl-center text-sm-center h-auto">
            <div class="row flex-row-reverse " style="min-height: 90vh;">
                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-center ">
                    <div class="card shadow rounded container w-50 py-4">
                        <div class="card-body ">
                            <form>
                                <div class="form-group text-left">
                                    <label >Full Name</label>
                                    <input type="text" class="form-control" placeholder="Your full name">
                                </div>
                                <div class="form-group text-left">
                                    <label >Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group text-left">
                                    <label >Contact Number</label>
                                    <input type="text" class="form-control" placeholder="Contact Number">
                                </div>
                                <div class="form-group text-left">
                                    <label >Subject</label>
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group text-left">
                                   
                                    <input type="text" class="form-control" placeholder="Type something..">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-center text-white ">
                    <div class="text-justify w-75 mr-xl-4 mx-auto float-none  float-xl-right" style="padding-left:60px;">
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </h2>
                        <p> 
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, 
                            sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, 
                            sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur 
                            adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, 
                            sit amet consectetur adipisicing elit. 
                        </p>
                        <div class="mt-4 pt-4"></div>
                        <div class="row">
                            <div class="col-md-6">email info</div>
                            <div class="col-md-6"> contact number</div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>

    </section>
</div>

@endsection



