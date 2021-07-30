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
<div class="header ">
            <div class="header-items-left">

                    <a class="my-auto px-3 mb-3" style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>">

                       <img src="{{ asset('images/frontAssets/vajm-header-logo.png') }}" alt="" class="mylogo">

                    </a>

                <div class="nav-titles  my-auto ml-4 px-3">
                    <?php
                    foreach(array_keys($obj) as $row) {
                        if ($row == "JOB ACADEMY") {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4 navitemsPlus navitems my-auto text-decoration-none"><b><small><b><?= $row ?></b></small></b></a>
                            <?php
                        } else {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="px-2 ml-4  text-light navitems my-auto text-decoration-none"><small><b><?= $row ?></b></small></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="header-items-right not_logged_in_nav">
                <a href="/jobs" class="p-1 ml-3 postJobBtn noDeco btn-outline-light"><small><b>JOB SEARCH</b></small></a>
                <a href="/posts" class="p-1 ml-3 mr-3 postJobBtn noDeco btn-outline-light"><small><b>POST A JOB</b></small></a>
                <button type="button " class="btn text-light" data-toggle="modal" data-target="#modalLogin">
                <small class="btn-signin"><b>SIGN-IN</b></small>
                </button>

            </div>
            @include('layouts.js-nav')
            @include('layouts.bo-nav')
            @include ('burger.nav-drawer')
            @include ('burger.bo-nav-drawer')
            @include ('burger.js-nav-drawer')



            <!-- <div class="chat-support"></div> -->


</div>

