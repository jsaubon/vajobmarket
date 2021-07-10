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
                            <a href="<?= $obj[$row] ?>" class="p-2"><b><small><b><?= $row ?></b></small></b></a>
                            <?php
                        } else {
                            ?>
                            <a href="<?= $obj[$row] ?>" class="p-2 text-light"><small><b><?= $row ?></b></small></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="d-flex m-2 justify-content-around">
                <a href="#home" class="p-2 ml-3 postJobBtn"><small><b>JOB SEARCH</b></small></a>
                <a href="#home" class="p-2 ml-3 postJobBtn"><small><b>POST A JOB</b></small></a>
                <a href="#home" class="p-2 text-light"><small><b>SIGN-IN</b></small></a>
            </div>
        </div>
    </div>
</div>