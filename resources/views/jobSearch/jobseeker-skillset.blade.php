@extends('layouts.app')

@section('content')
<div class="container-fluid h-auto personal-info">
    <div class="container h-100" style="padding-top: 100px; padding-bottom:10px;">
        <div class="d-flex justify-content-end">
            <a href="/">Cancel</a>
        </div>
        <div class="container w-75 stepper-container">
            <ul class="d-flex justify-content-around  progress-steps">
                <li class="text-active">
                    <div class="shape ">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    personal information
                    <div class="line1 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape ">
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    professional details
                    <div class="line2 line-active"></div>
                </li>
                <li class="text-active">
                    <div class="shape shape-active" >
                        <div class="dot dot-active"></div>
                    </div>
                    <br>
                    skill sets
                    <div class="line3"></div>
                </li>
                <li>
                    <div class="shape">
                        <div class="dot"></div>
                    </div>
                    <br>
                    profile review
                </li>
            </ul>
        </div>
        <div class="container w-75 d-flex justify-content-center">
            <div class="container">
                {{-- Profession --}}

                <form class="container" action="">
                    <h2 class="title-personal-info">List of Specialized Skills</h2>
                    <hr>
                    {{-- skill-1 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title1">
                                    <option>Title</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items "  id="skill-experience1">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency1">
                                <option>Proficiency</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                        </div>
                    </div>

                    {{-- skill-2 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title2">
                                    <option>Title</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items "  id="skill-experience2">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency2">
                                <option>Proficiency</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                        </div>
                    </div>

                    {{-- skill-3 --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control personal-info-forms-items" id="skill-title3">
                                    <option>Title</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items "  id="skill-experience3">
                                <option>Experience</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                        <div class="col-md-2 ">
                            <select class="form-control personal-info-forms-items"  id="skill-proficiency3">
                                <option>Proficiency</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <textarea placeholder="Description"class="jobseeker-textarea p-2 w-100" rows="2" style=" resize: none; min-height:50px !important;"></textarea>
                        </div>
                    </div>

                    <br>
                    {{-- button --}}
                    <div class="row m-auto">
                        <div class="col-md-12 d-flex justify-content-center p-2 btn-container">
                            <div class="btn-plus"></div>
                        </div>
                    </div>



                    <div class="row" style="padding-top:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="text-center">ligula, cursus id sagittis eu,
                                volutpat id sapien. Cras scelerisque
                                ullamcorper tellus, sed efficitur odio iaculis a.
                                Pellentesque habitant morbi tristique senectus
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row" style="margin-bottom:70px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8 d-flex justify-content-center">
                            <a class="btn btn-light mr-2 back-btn" href="/personalDetails">Back</a>
                            <a class="btn btn-primary proceed-btn" href="/jobseekerProfileReview">Proceed Next</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>

     </div>
</div>

@endsection

