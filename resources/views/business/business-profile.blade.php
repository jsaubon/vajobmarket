@extends('layouts.profile-layout')
@section('content')
    <div class="container-fluid h-auto nav-style">
        <div class="card-banner mx-auto w-50 d-flex  justify-content-center">
            <div class="profile-stats container">
                <div class="row card-deck mb-4">
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body ">
                        This is some text within a card body.
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                        This is some text within a card body.
                        </div>
                    </div>
                    <div class="col-md-4 card shadow card-banner">
                        <div class="card-body">
                        This is some text within a card body.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs d-flex justify-content-around " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active-bottom active border-top-0 nav-link-style border-left-0 border-right-0 text-center text-dark" data-toggle="tab" href="#first-choice" role="tab" aria-controls="home" aria-selected="true">
                    posts
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#second-choice" role="tab" aria-controls="profile" aria-selected="false">
                    company profile
                </a>
            </li>
            <li class="nav-item " role="presentation" >
                <a class="nav-link active-bottom border-top-0 nav-link-style border-left-0 border-right-0  text-center text-dark"  data-toggle="tab" href="#third-choice" role="tab" aria-controls="profile" aria-selected="false">
                    comments
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid h-auto py-4 my-4">
        <div class="tab-content " id="myTabContent">
            {{-- first--}}
            <div class="tab-pane fade show active" id="first-choice" role="tabpanel" aria-labelledby="home-tab">
                POSTS
            </div>
            {{-- second --}}
            <div class="tab-pane fade" id="second-choice" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container ">
                    <div class="card p-4">
                        <div class="card-title d-flex">
                            <div class="profile-pic shadow my-auto" style="height:50px; width:50px;">
                                <img src="https://i.ibb.co/L1xT86W/profileworkers.jpg" style="height:50px;" alt="" />
                            </div>
                            <div class="my-auto pl-2">
                                <h3 style="font-size:15px; margin:0;">My Company Name</h3>
                                <p style="font-size: 10px; margin:0;">
                                    <a href="/BusinessProfilePersonal">Type of business</a></p>
                            </div>
                        </div>
                        <hr>
                        <p class="card-text " style="margin-bottom:60px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Mauris imperdiet ante hendrerit massa dignissim scelerisque.
                            Nunc pellentesque blandit placerat. Suspendisse viverra porta dolor,
                            commodo eleifend mauris pretium ac. Nam pellentesque magna id quam suscipit
                            ellentesque. Proin a ultricies lectus. Phasellus ut mauris nec lacus lobortis
                            posuere. Aliquam dignissim pretium neque, id semper diam ornare sit amet.
                            Cras massa augue, luctus quis pharetra vel, egestas nec lectus. Maecenas vel
                            tellus tempus, tristique urna et, mattis nunc. Integer aliquet rutrum leo,
                            vitae condimentum libero porta ut. Donec pharetra ut ex sit amet ornare.
                            Donec elit neque, egestas quis purus ut, faucibus dignissim lacus. Nunc
                            mollis porttitor ligula porttitor faucibus.
                            Praesent ut orci rhoncus enim laoreet elementum
                            id a ligula. Aenean fringilla hendrerit pretium. Morbi ut
                            lacus tincidunt justo interdum blandit sit amet vel dui.
                            Nam vestibulum sapien id leo ornare elementum. In mollis
                            mauris eu nunc aliquet, ac mollis lectus faucibus. Pellentesque
                            posuere nisl id turpis aliquet, at fermentum lectus commodo. Sed tincidunt
                            dolor vitae cursus pellentesque. Curabitur sollicitudin maximus ipsum, id
                            euismod augue pretium quis. Morbi gravida pellentesque egestas. Donec vel
                            urna pretium, aliquam quam sed, commodo tellus. Sed ipsum eros, dignissim
                            eget finibus eu, rutrum eget sapien. Phasellus ante lacus, volutpat vel velit
                            sed, porta euismod felis.
                        </p>
                    </div>
                </div>
            </div>
            {{-- third --}}
            <div class="tab-pane fade" id="third-choice" role="tabpanel" aria-labelledby="profile-tab">
              COMMENTS
            </div>
        </div>
    </div>

@endsection
