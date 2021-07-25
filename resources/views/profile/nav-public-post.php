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
                <a class="my-auto" style="color:#fff; text-decoration:none;" href="<?= $brand[$navBrand[0]]; ?>">
                    <small class="title m-3 mylogo"> </small>
                </a>
                <div class="nav-titles m-3">
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
            <div class="header-items-right">
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
                    <a href="/DashboardBusiness" class="small-nav-link">
                        <li class="small-nav-list">
                          dashboard
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessProfile" class="small-nav-link">
                        <li class="small-nav-list">
                          profile
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessAllJobPost" class="small-nav-link">
                        <li class="small-nav-list">
                            Job Posts
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessApplications" class="small-nav-link">
                        <li class="small-nav-list">
                          application
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessEmployment" class="small-nav-link">
                        <li class="small-nav-list">
                          employment
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessMessages" class="small-nav-link">
                        <li class="small-nav-list">
                          message
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/BusinessProfilePersonal" class="small-nav-link">
                        <li class="small-nav-list">
                          settings
                        </li>
                    </a>
                    <hr class=" m-0">
                    <a href="/" class="small-nav-link">
                        <li class="small-nav-list">
                          logout
                        </li>
                    </a>
                </ul>
            </div>

            <div class="chat-support"></div>


</div>





