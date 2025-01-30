<!DOCTYPE html>
<html lang="en">
<?php
$base_url = "http://" . $_SERVER['HTTP_HOST']."/aiit-main/";  // or just "/"

?>
<base href="<?php echo $base_url; ?>" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIIT COLLAGE</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">
<link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>

<body>
    
    <div class="headerbar">
        <div class="container-fluid">
            <div class="headerGrid">
                <div>
                    <p class="text-light"> <i class="fa fa-map-marker" aria-hidden="true"></i> Ground Floor 313 -315 Flinders Lane, Melbourne VIC 3000</p>

                </div>
                <div>
                    <a href="mailto:info@aiit.vic.edu.au"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@aiit.vic.edu.au </a>
                </div>
                <div>
                    <a href="callto:+61 3 96497691"><i class="fa fa-phone" aria-hidden="true"></i> +61 3 96497690</a>
                </div>
                <div class="headerGridBtn">
                    <a class="btn btn-sm btn-light text-dark" href="https://aiit-vic-lms.moodlecloud.com/login/index.php"> 
                        <img src="img/icons/Moodle_Icon.png" width="70px" alt=""></a>
                    <a href="callto:+61 3 96497691" class="btn text-dark btn-sm btn-light"><img
                            src="img/icons/submit.png" alt=""> apply
                        online</a>
                </div>
            </div>
        </div>
    </div>
    <header class="header" id="header">

        <section class="wrapper container">
            <div class="logo">
                <a href="./index.php">
                    <img src="./img/logo.png" class="img-fluid" alt="">
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
                    <li class="menu-item"><a href="index.php" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="onlinePortal.php" class="menu-link">online portals</a></li>

                    <li class="menu-item"><a href="aboutus.php" class="menu-link">about us</a></li>
                    <li class="menu-item"><a href="courses.php" class="menu-link">courses</a></li>
                    <li class="menu-item menu-dropdown"  onclick="showdrop(this)" >
                        <span class="menu-link drop"   data-toggle="submenu">student information <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                  
                        <ul class="submenu">
                            <li class="submenu-item"><a href="courseFees.php" class="submenu-link">courses Fees</a>
                            </li>
                            <li class="submenu-item"><a href="studentAdmissionProcess.php" class="submenu-link">Student Admission Process</a></li>
                            <li class="submenu-item"><a href="studentServiceSupport.php" class="submenu-link">Student Service Support</a></li>

                        </ul>
                    </li>
                    <li class="menu-item"><a href="agents.php" class="menu-link">agents <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
                    <li class="menu-item"><a href="contactus.php" class="menu-link">contact us</a></li>
                </ul>
                <div class="studentinformation">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="dropinfo">
                                    <ul class="row">
                                        <li class="col-sm-6">
                                            <a href="studentAdmissionProcess.php"><i class="fa fa-yelp" aria-hidden="true"></i> How to Apply</a>
                                        </li>
                                        
                                        <li class="col-sm-6">
                                            <a href="courseFees.php"><i class="fa fa-money" aria-hidden="true"></i> Tuition Fees and Charges</a>
                                        </li>
                                        <li class="col-sm-6">
                                            <a href="studentServiceSupport.php"> <i class="fa fa-info-circle" aria-hidden="true"></i> Student Services And Support</a>
                                        </li>
                                        <li class="col-sm-6">
                                            <a href="policies.php"><i class="fa fa-file-o" aria-hidden="true"></i> Policies and Procedures</a>
                                        </li>
                                        <li class="col-sm-6">
                                            <a href="useful-links.php"><i class="fa fa-link" aria-hidden="true"></i> Useful Links</a>
                                        </li>
                                    
                                        <li class="col-sm-6">
                                            <a href="PDF/AIIT_45485_Student_Handbook_RT.pdf"><i class="fa fa-book" aria-hidden="true"></i> Student Hand Book</a>
                                        </li>
                                        
                                        <li class="col-sm-6">
                                            <a href="std_online_form.php"><i class="fa fa-globe" aria-hidden="true"></i> Student Online Application Form</a>
                                        </li>
                                        <li class="col-sm-6">
                                            <a href="PDF/forms/AIIT_45485_FORM_Admissions_Application_RT.pdf"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Student PDF Application Form </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dropimg">
                                    <img src="img/studentinformation.svg" class="img-fluid" width="60%" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </nav>
        </section>

    </header>