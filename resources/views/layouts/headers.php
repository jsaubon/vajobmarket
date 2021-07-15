<?php 
$brand = ["JOB MARKET" => "/"];
$navBrand = array_keys($brand);
$obj = [
    "ABOUT" => "/about",
    "SOLUTION" => "#solution",
    "PRICING" => "/pricing",
    "BLOGS" => "#blogs",
    "JOB ACADEMY" => "#academy"
];

?>

<div class="header">
    <div class="container">
        <div class="d-flex justify-content-between navlinks">
            <div class="d-flex justify-content-between">
                <small class="title"><a style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>"><b><i><?= $navBrand[0]; ?></i></b></a></small>
                <div class="m-3">
                    <?php 
                    foreach(array_keys($obj) as $row) {
                        if ($row == "JOB ACADEMY") {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="p-2 navitemsPlus navitems"><b><small><b><?= $row ?></b></small></b></a>
                            <?php
                        } else {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="p-2 text-light navitems"><small><b><?= $row ?></b></small></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around">
                <a href="/jobs" class="p-1 ml-3 postJobBtn noDeco"><small><b>JOB SEARCH</b></small></a>
                <a href="/posts" class="p-1 ml-3 mr-3 postJobBtn noDeco"><small><b>POST A JOB</b></small></a>
                <button type="button" class="btn text-light" data-toggle="modal" data-target="#exampleModal">
                <small><b>SIGN-IN</b></small>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="d-flex justify-content-end">
        <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center"><b>SIGN IN</b></p>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation" style="width:50%;">
            <a class="nav-link active text-center text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                As a Business Owner
            </a>
        </li>
        <li class="nav-item" role="presentation" style="width:50%;">
            <a class="nav-link text-center text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                As a Job Seeker
            </a>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="p-5">
                <form action="/dashboard">
                    <input type="text" class="form-control" placeholder="*email" />
                    <input type="password" class="form-control" placeholder="*password" />
                    <button class="btn btn-primary form-control">
                        Sign-In
                    </button>
                </form>
                <br/>
                <br/>
                <div class="p-3">
                    <p class="text-center">
                        Sign-up using your social media account
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <span class="p-1">Facebook</span>
                        <span class="p-1">Twitter</span>
                        <span class="p-1">Google</span>
                    </div>
                    <p class="text-center">Don't have an account? <a href="/signup">SIGN UP</a></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="p-5">
                <form action="/dashboard">
                    <input type="text" class="form-control" placeholder="*email" />
                    <input type="password" class="form-control" placeholder="*password" />
                    <br/>
                    <button class="btn btn-primary form-control">
                        Sign-In
                    </button>
                </form>
                <br/>
                <div class="p-3">
                    <p class="text-center">
                        Sign-up using your social media account
                    </p>
                    <div class="d-flex justify-content-center mb-5">
                        <span class="p-1">Facebook</span>
                        <span class="p-1">Twitter</span>
                        <span class="p-1">Google</span>
                    </div>
                    <p class="text-center">Don't have an account? <a href="/signup">SIGN UP</a></p>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>