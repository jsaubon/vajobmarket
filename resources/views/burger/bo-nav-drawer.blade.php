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

    .bo-nav-drawer {

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

    .bo-nav__list {
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

    .bo-nav__link {
        color: inherit;
        font-weight: var(--fw-bold);
        font-size: var(--fs-h2);
        text-decoration: none;
    }

    .bo-nav__link:hover {
        color: var(--clr-accent);
    }

    .bo-nav-toggle {
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

    .bo-nav-open .bo-nav-drawer {
        transform: translateX(0);
    }

    .nav-open .bo-nav-toggle {
        position: fixed;
    }

    .bo-nav-open .hamburger {
        transform: rotate(.625turn);
    }

    .bo-nav-open .hamburger::before {
        transform: rotate(90deg) translateX(-6px);
    }

    .bo-nav-open .hamburger::after {
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
        .bo-nav-toggle {
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
    <nav class="bo-nav-drawer">
            <div class="container w-100 mx-auto" stlye="min-width:400px; ">


                <div class="accordion border-0" id="accordionExample" style="padding-top:90px;  outline:none !important;box-shadow: none!important;">
                    <div class="accordion-item border-0" style=" outline:none !important;box-shadow: none!important;">
                      <h2 class="accordion-header border-0" style=" outline:none !important;box-shadow: none!important;" id="headingOne" >
                        <button class="accordion-button  secondary bg-secondary border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                            <div class="p-1 ml-3 border-0 mr-3 noDeco user-btn user-btn-bo">
                                <b class="my-auto user-firstname font-weight-bolder" style="color:#efeeee; font-size:1.3em;" >Username</b>
                            </div>
                        </button>
                      </h2>
                      <div id="collapseOne" style=" outline:none !important;box-shadow: none!important;" class="accordion-collapse  border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-0 border-0 bo-accordion-nav" style="background-color: #303030; outline:none !important;box-shadow: none!important;">

                            <ul class="border-0 p-0">
                                <a href="/DashboardBusiness" class=" py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                    <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        dashboard
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessProfile" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        profile
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessAllJobPost" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        Job Posts
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessApplications" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        application
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessEmployment" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        employment
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessMessages" class="py-3 bo-small-nav-link  d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        message
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="/BusinessInfoSettings" class="py-3 bo-small-nav-link d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                     <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        settings
                                    </li>
                                </a>
                                <hr class=" m-0">
                                <a href="#" class="py-3 bo-small-nav-link btn-logout d-flex justify-content-center" style="background-color:#ECF6FF !important;">
                                    <li class="bo-small-nav-list  m-0 font-weight-bolder" style="font-size:1.3em;">
                                        logout
                                    </li>
                                </a>
                            </ul>


                        </div>
                      </div>
                    </div>

                  </div>

                <div class="bo-header-items-right bo-nav hide">
                    <a href="/posts" class="p-1 ml-3 mr-3 postJobBtn noDeco"><small><b>POST A JOB</b></small></a>

                    {{-- <div class="p-1 ml-3 mr-3 noDeco user-btn user-btn-bo">
                        <small><b class="my-auto user-firstname ">Username</b></small>
                        <i class="fas fa-chevron-down my-auto" style="font-size:10px;"></i>
                    </div> --}}



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
    const bonavToggle = document.querySelector('.bo-nav-toggle');
    const bonavLinks = document.querySelectorAll('.bo-nav__link')

    bonavToggle.addEventListener('click', () => {
        document.body.classList.toggle('bo-nav-open');
    });

    bonavLinks.forEach(link => {
        link.addEventListener('click', () => {
            document.body.classList.remove('bo-nav-open');
        })
    })
    </script>
