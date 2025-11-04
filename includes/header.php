<div class="headerbar">
    <div class="container-fluid">
        <div class="headerGrid">
            <div>
                <p class="text-light"> <i class="fa fa-map-marker" aria-hidden="true"></i> Level 13, Suite 17, 401
                    Docklands Drive, Docklands, Melbourne, VIC 3008</p>

            </div>
            <div>
                <a href="mailto:info@aiit.vic.edu.au"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    info@aiit.vic.edu.au </a>
            </div>
            <div>
                <a href="callto:+61 3 96497691"><i class="fa fa-phone" aria-hidden="true"></i> +61 3 96497690</a>
            </div>
            <div class="headerGridBtn">
                <a class="btn btn-sm btn-light text-dark" href="https://aiit-vic-lms.moodlecloud.com/login/index.php">
                    <img src="<?php echo BASE_PATH; ?>img/icons/Moodle_Icon.png" width="70px" alt=""></a>
                <a href="callto:+61 3 96497691" class="btn text-dark btn-sm btn-light"><img src="img/icons/submit.png"
                        alt=""> apply
                    online</a>
            </div>
        </div>
    </div>
</div>
<header class="header" id="header">

    <section class="wrapper container">
        <div class="logo">
            <a href="<?php echo BASE_PATH; ?>index.php">
                <img src="<?php echo BASE_PATH; ?>img/logo.png" class="img-fluid" alt="">
            </a>
        </div>
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <span class="overlay"></span>
        <nav class="navbarcstm" id="navbarcstm">
            <ul class="menu" id="menu">
                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>index.php" class="menu-link">Home</a></li>
                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>onlinePortal.php" class="menu-link">online
                        portals</a></li>

                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>aboutus.php" class="menu-link">about us</a></li>
                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>courses.php" class="menu-link">courses</a></li>
                <li class="menu-item menu-dropdown" onclick="showdrop(this)">
                    <span class="menu-link drop" data-toggle="submenu">student information <i class="fa fa-caret-down"
                            aria-hidden="true"></i></span>

                    <ul class="submenu">
                        <li class="submenu-item"><a href="<?php echo BASE_PATH; ?>courseFees.php"
                                class="submenu-link">courses Fees</a>
                        </li>
                        <li class="submenu-item"><a href="<?php echo BASE_PATH; ?>studentAdmissionProcess.php"
                                class="submenu-link">Student Admission Process</a></li>
                        <li class="submenu-item"><a href="<?php echo BASE_PATH; ?>student-services-and-support.php"
                                class="submenu-link">Student Service Support</a></li>

                    </ul>
                </li>
                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>agents.php" class="menu-link">agents </a></li>
                <li class="menu-item"><a href="<?php echo BASE_PATH; ?>contactus.php" class="menu-link">contact us</a>
                </li>
            </ul>
            <div class="studentinformation">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="dropinfo">
                                <ul class="row">
                                    <li class="col-sm-6">
                                        <a href="<?php echo BASE_PATH; ?>studentAdmissionProcess.php"><i
                                                class="fa fa-yelp" aria-hidden="true"></i> How to Apply</a>
                                    </li>

                                    <li class="col-sm-6">
                                        <a href="<?php echo BASE_PATH; ?>courseFees.php"><i class="fa fa-money"
                                                aria-hidden="true"></i> Tuition Fees and Charges</a>
                                    </li>
                                    <li class="col-sm-6">
                                        <a href="<?php echo BASE_PATH; ?>student-services-and-support.php"> <i
                                                class="fa fa-info-circle" aria-hidden="true"></i> Student Services And
                                            Support</a>
                                    </li>
                                    <li class="col-sm-6">
                                        <a href="<?php echo BASE_PATH; ?>policies.php"><i class="fa fa-file-o"
                                                aria-hidden="true"></i> Policies and Procedures</a>
                                    </li>
                                    <li class="col-sm-6">
                                        <a href="<?php echo BASE_PATH; ?>useful-links.php"><i class="fa fa-link"
                                                aria-hidden="true"></i> Useful Links</a>
                                    </li>

                                    <li class="col-sm-6">
                                        <a
                                            href="<?php echo BASE_PATH; ?>assets/forms-and-policies/AIIT_45485_Student_Handbook_RT.pdf"><i
                                                class="fa fa-book" aria-hidden="true"></i> Student Hand Book</a>
                                    </li>

                                    <li class="col-sm-6">
                                        <a href="student-application-form.php"><i class="fa fa-globe"
                                                aria-hidden="true"></i> Student Online Application Form</a>
                                    </li>
                                    <li class="col-sm-6">
                                        <a
                                            href="assets/forms-and-policies/forms/AIIT_45485_FORM_Admissions_Application_RT.pdf">
                                            <b class="text-white"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                Student PDF Application Form</b> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dropimg">
                                <img src="<?php echo BASE_PATH; ?>img/studentinformation.png" class="img-fluid"
                                    width="60%" alt="">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </section>

</header>