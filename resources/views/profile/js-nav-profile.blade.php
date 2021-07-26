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
<style>


.hide {
    display: none;
}
</style>
<div class="header" style="z-index:100;">
            <div class="header-items-left">
                <a class="my-auto px-3 mb-3" style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>">
                    <div class="title my-auto h-100  mylogo"></div>
                </a>
                <div class="nav-titles my-auto ml-4 px-3">
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
            <div class="header-items-right">
                <a href="/jobs" class="text-decoration-none">
                <div  class="px-2 py-1 ml-3 postJobBtn d-flex justify-content-around" style="margin:0 !important; width:95px;color:#383232 ">
                    <i class="fas fa-search-plus my-auto" style="font-size:12px;" ></i>&nbsp;
                    <b class="my-auto">Job Search</b>
                </div>
                </a>
                <div  class="p-1 noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-bell noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div  class="p-1  noDeco ml-2" style="color:#383232;">
                    <i class="fas fa-user noDeco shadow" style="font-size:15px;"></i>
                </div>
                <div class="p-1 ml-3 mr-3 noDeco user-btn">
                    <small><b class="my-auto">Username</b></small>
                    <i class="fas fa-chevron-down my-auto" style="font-size:10px;"></i>
                </div>
            </div>
            <div class="small-nav shadow">
                <ul>
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          dashboard
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/jobseekerProfile" class="small-nav-link">
                        <li class="small-nav-list">
                          profile
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                            job application
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          employment
                        </li>
                    </a>
                    <hr class=" m-0">
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          messages
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/jobseekerUpdateDetails" class="small-nav-link">
                        <li class="small-nav-list">
                          settings
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="#" class="small-nav-link">
                        <li class="small-nav-list">
                          logout
                        </li>
                    </a>
                </ul>
            </div>

            <div class="chat-support"></div>


</div>





