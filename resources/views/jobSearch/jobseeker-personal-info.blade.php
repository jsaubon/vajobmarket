@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/jobseeker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/stepper.css')}}" rel="stylesheet">
<div class="container-fluid personal-info">
    <div class="container d-flex flex-column justify-content-center h-100" style="padding-top: 100px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="stepper-container">
            <div class="row">
                <div class="col-xs-12 col-md-8 offset-md-2 block border">
                  <div class="wrapper-progressBar">
                    <ul class="progressBar">
                      <li class="active">Beong Processed</li>
                      <li class="active">Waiting for payment</li>
                      <li>Paid</li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>

     </div>

</div>

@endsection

