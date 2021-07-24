@extends('layouts.profile-layout')

@section('content')

<div class="user-dashboard">
    <div class="container fullwidth">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"> <a href="#">Job Post</a></li>
                <li class="breadcrumb-item" aria-current="page">New Post</li>
            </ol>
        </nav>

        <div class="card w-100">
            <div class="card-header">
                    JOB DETAILS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Job Title">
                    </div>
                    <div class="col-md-4">
                        <select name="sector" id="" class="form-control">
                            <option value="1">1</option>
                            <option value="2">1</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control" name="jobType" id="">
                            <option value="1">Job Type</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" name="jobType" id="">
                            <option value="1">Job Type</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Hourly Rate">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" class="form-control placeholder="Start Date">
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-header">
                    REQUIRED SKILLS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Job Title">
                    </div>
                    <div class="col-md-4">
                        <select name="proficiency" id="" class="form-control">
                            <option value="1">Proficiency</option>
                        </select>
                    </div>
                </div>
                <br>
                <button class="btn btn-block btn-dark">+</button>

            </div>

            <div class="card-header">
                JOB DESCRIPTION
            </div>

            <div class="card-body text-center">
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>

                <button class="btn btn-md btn-transparent text-center">Discard</button>
                <button class="btn btn-md btn-primary text-center">Update</button>
            </div>
        </div>

    </div>
</div>

<script>
    $('#modalLogin').modal('show');
    if(!token) {
    }
</script>

@endsection
