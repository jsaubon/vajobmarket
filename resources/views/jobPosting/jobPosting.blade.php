@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/jobPost.css')}}" rel="stylesheet">
<section class="jobPostSection">
    <div class="container">
        <br/> <br/>
        <div class="d-flex justify-content-between">
        <a href="/dashboard">Back</a>
        <span>
            <p>Monthly Job Posting Limit: <b>1/10</b></p>
        </span>
        </div>
        <div class="card p-4 shadow" style="border-radius: 20px;">
            <div class="card-title">
                <h4>JOB DETAILS</h4>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Job Title" />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Sector" />
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Job Type" />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Monthly Rate" />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Hourly Rate" />
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="start date" />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="end date" />
                    </div>
                </div>
                <br/>
            </div>
            <div class="card-title">
                <h4>REQUIRED SKILLS</h4>
                <hr/>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Skills" />
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Profeciency" />
                    </div>
                </div>
                <br/>
                <button class="btn btn-secondary form-control">
                    add another skill
                </button>
            </div>
            <div class="card-title">
                <h4>JOB DESCRIPTION</h4>
                <hr/>
            </div>
            <div class="card-body">
                <textarea name="jobDesc" id="jobDesc" style="width:100%;" rows="10"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary m-2 p-3">DISCARD</button>
                <button class="btn btn-primary m-2 p-3">POST NOW</button>
            </div>
        </div>
        <br/><br/>
    </div>
</section>
@endsection
