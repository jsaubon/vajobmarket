@extends('layouts.profile-layout')
@section('content')
    <div class="container-fluid h-auto">
        <ul class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <a class="nav-link active-bottom active border-top-0  border-left-0 border-right-0 text-center text-dark" id="first-choice" data-toggle="tab" href="#business" role="tab" aria-controls="home" aria-selected="true">
                    Personal
                </a>
            </li>
            <li class="nav-item" role="presentation" >
                <a class="nav-link active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="second-choice" data-toggle="tab" href="#job" role="tab" aria-controls="profile" aria-selected="false">
                    Business
                </a>
            </li>
            <li class="nav-item" role="presentation" >
                <a class="nav-link active-bottom border-top-0  border-left-0 border-right-0  text-center text-dark" id="third-choice" data-toggle="tab" href="#job" role="tab" aria-controls="profile" aria-selected="false">
                    Billing
                </a>
            </li>
        </ul>
    </div>

@endsection
