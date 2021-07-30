<style>

:root {
    --ff-primary: 'Source Sans Pro', sans-serif;
    --ff-secondary: 'Source Code Pro', monospace;

    --fw-reg: 300;
    --fw-bold: 900;

    --clr-light: #fff;
    --clr-dark: #303030;


    --fs-h1: 3rem;
    --fs-h2: 2.25rem;
    --fs-h3: 1.25rem;
    --fs-body: 1rem;

    --bs: 0.25em 0.25em 0.75em rgba(0,0,0,.25),
          0.125em 0.125em 0.25em rgba(0,0,0,.15);
}

.nav-drawer {
    width: 100vw;
    position: fixed;
    background: var(--clr-dark);
    color: var(--clr-light);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 100;
    transform: translateX(100%);
    transition: transform 250ms cubic-bezier(.5, 0, .5, 1);
}

.nav__list {
    list-style: none;
    display: flex;
    height: 100%;
    width: 100%;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    margin: 0;
    padding: 0;
}

.nav__link {
    color: inherit;
    font-weight: var(--fw-bold);
    font-size: var(--fs-h2);
    text-decoration: none;
}

.nav__link:hover {
    color: var(--clr-accent);
}

.nav-toggle {
    display:none;
    padding: .5em;
    background: transparent;
    border: 0;
    cursor: pointer;
    position: absolute;
    right: 1em;
    top: 2em;
    z-index: 1000;
}

.nav-open .nav-drawer {
    transform: translateX(0);
}

.nav-open .nav-toggle {
    position: fixed;
}

.nav-open .hamburger {
    transform: rotate(.625turn);
}

.nav-open .hamburger::before {
    transform: rotate(90deg) translateX(-6px);
}

.nav-open .hamburger::after {
    opacity: 0;
}
.nav-burger:hover{
    background-color:#6c757d;
}
.hamburger {
    display: block;
    position: relative;
}

.hamburger,
.hamburger::before,
.hamburger::after {
    background: whitesmoke;
    width: 2em;
    height: 3px;
    border-radius: 1em;
    transition: transform 250ms ease-in-out;
}


.hamburger::before,
.hamburger::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
}


.hamburger::before { top: 6px; }
.hamburger::after { bottom: 6px; }

@media screen and (max-width: 768px ) {
    .nav-toggle {
    display:block;
    }

}



</style>
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
<nav class="nav-drawer ">
        <div class="container w-100 mx-auto" stlye="min-width:400px; ">

            <div class=" row header-items-right-hamburger not_logged_in_nav">
                <div class="col-md-12" style="padding-top:90px;">
                    <button type="button " class="btn text-light btn-warning w-100" data-toggle="modal" data-target="#modalLogin">
                       <h5 class=" text-uppercase py-2 my-auto h-100 font-weight-bolder text-secondary">sign in</h5>
                    </button>
                </div>

                <div class="col-md-12 pt-4">
                    <div class="row d-flex">
                        <a href="/jobs" class="w-50  mx-auto" style="display: inline !important;">
                            <div class=" d-flex justify-content-center">
                               <b class="btn btn-outline-light" style="font-size: 1.2em; border-radius:20px;">JOB SEARCH</b>
                            </div>
                        </a>
                        <a href="/posts" class="w-50  mx-auto"style="display: inline !important;">
                            <div class=" d-flex justify-content-center">
                             <b class="btn btn-outline-light"  style="font-size: 1.2em; border-radius:20px;">POST A JOB</b>
                            </div>
                        </a>
                    </div>
                </div>


            </div>



            <div class="row w-100  mx-auto nav-titles-hamburger my-auto" style="padding-top:20px; min-width:300px;">
                <?php
                foreach(array_keys($obj) as $row) {
                    if ($row == "JOB ACADEMY") {
                        ?>
                        <a href="<?= $obj[$row] ?>" style="font-size:20px;" class=" col-md-12 nav-burger d-flex justify-content-center  py-4  navitemsPlus navitems my-auto text-decoration-none"><b><small><b><?= $row ?></b></small></b></a>
                        <?php
                    } else {
                        ?>
                        <a href="<?= $obj[$row] ?>" style="font-size:20px;" class=" col-md-12 nav-burger d-flex justify-content-center py-4  text-light navitems my-auto text-decoration-none"><small><b><?= $row ?></b></small></a>

                        <?php
                    }
                }
                ?>
            </div>



        </div>
</nav>

<script>
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link')

navToggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    })
})
</script>
