<?php
$brand = ["JOB MARKET" => "/"];
$navBrand = array_keys($brand);
$obj = [
    "ABOUT" => "#about",
    "SOLUTION" => "#solution",
    "PRICING" => "/pricing",
    "BLOGS" => "#blogs",
    "JOB ACADEMY" => "#academy"
];

?>
<style>


.hide {
    display: none;
}
</style>
<div class="header" style="z-index:100;">
            <div class="header-items-left">
                <a class="my-auto px-3 mb-3" style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>">
                    <img src="{{ asset('images/frontAssets/vajm-header-logo.png') }}" alt="" class="myLogo">
                </a>
                <div class="nav-titles my-auto ml-4 px-3">
                    <?php
                    foreach(array_keys($obj) as $row) {
                        if ($row == "JOB ACADEMY") {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4 navitemsPlus navitems my-auto text-decoration-none"><b><small><b><?= $row ?></b></small></b></a>
                            <?php

                        } 
                        
                        else if ($row == "SOLUTION"){
                            ?>
                              <div class="nav-item dropdown d-md-inline ">
                                    <a class=" px-2 ml-4 text-light navitems my-auto text-decoration-none  d-md-inline dropdown-toggle dropdown " data-toggle="dropdown" href="<?= $obj[$row] ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                       <small><b> <?= $row ?></b></small>
                                    </a>

                                    <div class="dropdown-menu main-nav-dropdown">
                                    {{-- <a class="dropdown-item" href="#">Job Posting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Professional Hiring</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Client Liason</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Permanent Staffing</a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Payroll Management</a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Premium Support</a>
                                    </div> --}}

                                    <a class="dropdown-item" href="#">Feature is not yet ready but we are brewing something cool...</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Come back later..</a>
                                    </div>
                                </div>
                            <?php
                        }
                        else if ($row == "ABOUT"){
                            ?>
                              <div class="nav-item dropdown d-md-inline ">
                                    <a class=" px-2 ml-4 text-light navitems my-auto text-decoration-none  d-md-inline dropdown-toggle dropdown " data-toggle="dropdown" href="<?= $obj[$row] ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                       <small><b> <?= $row ?></b></small>
                                    </a>

                                    <div class="dropdown-menu main-nav-dropdown">
                                        <a class="dropdown-item" href="/about">business owners</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/jsAboutUs">jobseekers</a>
                                        {{-- <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Client Liason</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Permanent Staffing</a>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Payroll Management</a>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Premium Support</a> --}}
                                    </div>
                                </div>
                            <?php
                        }

                        else {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4  text-light navitems my-auto text-decoration-none"><small><b><?= $row ?></b></small></a>
                            <?php
                        }
                    }
                    ?>
                </div>

            </div>


            @include('layouts.bo-nav')
            @include('burger.bo-nav-drawer')



</div>






