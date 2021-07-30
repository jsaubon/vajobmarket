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

    .js-nav-drawer {
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

    .js-nav__list {
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

    .js-nav__link {
        color: inherit;
        font-weight: var(--fw-bold);
        font-size: var(--fs-h2);
        text-decoration: none;
    }

    .js-nav__link:hover {
        color: var(--clr-accent);
    }

    .js-nav-toggle {
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

    .js-nav-open .js-nav-drawer {
        transform: translateX(0);
    }

    .js-nav-open .js-nav-toggle {
        position: fixed;
    }

    .js-nav-open .hamburger {
        transform: rotate(.625turn);
    }

    .js-nav-open .hamburger::before {
        transform: rotate(90deg) translateX(-6px);
    }

    .js-nav-open .hamburger::after {
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
        .js-nav-toggle {
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
    <button class="js-nav-toggle js-nav" aria-label="toggle navigation">
        <span class="hamburger"></span>
    </button>
    <nav class="js-nav-drawer  js-nav">
            <div class="container w-100 mx-auto" >


                <div class="accordion border-0" id="js-accordion-drawer" style="padding-top:90px;  outline:none !important;box-shadow: none!important;">
                    <div class="accordion-item border-0" style=" outline:none !important;box-shadow: none!important;">
                      <h2 class="accordion-header border-0" style=" outline:none !important;box-shadow: none!important;" id="js-headingOne" >
                        <button class="accordion-button  secondary bg-secondary border-0" type="button" data-bs-toggle="collapse" data-bs-target="#js-drawer" aria-expanded="true" aria-controls="js-drawer">
                            <div class="p-1 ml-3 border-0 mr-3 noDeco user-btn user-btn-bo">
                                <b class="my-auto user-firstname font-weight-bolder" style="color:#efeeee; font-size:1.3em;" >Username</b>
                            </div>
                        </button>
                      </h2>
                      <div id="js-drawer" style=" outline:none !important;box-shadow: none!important;" class="accordion-collapse  border-0 collapse show" aria-labelledby="js-headingOne" data-bs-parent="#js-accordion-drawer">
                        <div class="accordion-body p-0 border-0 bo-accordion-nav" style="background-color: #303030; outline:none !important;box-shadow: none!important;">

                            <ul class="border-0 p-0">
                                <a href="/jobseekerDashboard" class=" py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                    <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        dashboard
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/jobseekerProfile" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        profile
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/jobseekerApplications" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        job application
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/jobseekerCurrentEmployment" class="py-3 bo-small-nav-link  d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                  <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                     employment
                                 </li>
                                 </a>
                                <hr class=" m-0">
                                   <a href="/jobseekerMessages" class="py-3 bo-small-nav-link  d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        message
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/jobseekerSettings" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        settings
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="#" class="py-3 js-small-nav-link btn-logout d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                    <li class="js-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        logout
                                    </li>
                                </a>
                            </ul>


                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row p-4">
                    <div class="col-md-12 pt-4">

                      <a href="/jobs" class="w-50 mx-auto" style="display: inline !important;">
                          <div class=" d-flex justify-content-center">
                             <b class="btn btn-outline-light font-weight-bolder text-uppercase" style="font-size: 1.2em; border-radius:20px;">JOB SEARCH </b>
                          </div>
                      </a>

                    </div>
                 </div>


                <div class="row w-100  mx-auto bo-nav-titles my-auto" style="padding-top:20px; min-width:300px;">
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
    const jsnavToggle = document.querySelector('.js-nav-toggle');
    const jsnavLinks = document.querySelectorAll('.js-nav__link')

    jsnavToggle.addEventListener('click', () => {
        document.body.classList.toggle('js-nav-open');
    });

    jsnavLinks.forEach(link => {
        link.addEventListener('click', () => {
            document.body.classList.remove('js-nav-open');
        })
    })
    </script>
