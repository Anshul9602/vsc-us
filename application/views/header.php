<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
        Basic Page Needs
        =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>VSC OFFSHORE - Value Synergy Creation </title>

    <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
        Favicons
        =============================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/images/vsc-us.png">
    <link rel="apple-touch-icon" href="<?php echo base_url(''); ?>assets/images/vsc-us.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(''); ?>assets/images/vsc-us.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(''); ?>assets/images/vsc-us.png">

    <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/slider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/icons-fa.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/animation.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/gallery.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/vendor/cookie-notice.min.css">

    <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/default.css">

    <!-- ==============================================
        Theme Color
        =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
        Theme Settings
        =============================================== -->
    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #eef4ed;
            --section-2-bg-color: #ffffff;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
        }

        .faq .accordion .accordion-item .accordion-button:not(.collapsed):before {
            background: rgb(255 255 255 / 14%);
        }

        @media (max-width: 768px) {
            .testi-text-slider .testimonial-card {
                display: block !important;
            }

            .section-part .testi-text-slider .icon {
                margin-right: auto !important;

            }

            .section-part .testi-text-slider .testimonial-content {
                width: 100% !important;
            }

            .faq .accordion .accordion-item .accordion-button,
            .faq .accordion .accordion-item:last-of-type .accordion-button.collapsed {
                padding: 15px 40px 15px 50px;
                font-size: 16px;
            }

            .faq .accordion .accordion-item .accordion-button,
            .faq .accordion .accordion-item:last-of-type .accordion-button.collapsed {
                font-family: sans-serif !important;
                padding: 15px;
            }

            .faq .accordion .accordion-item .accordion-button::before {
                display: none !important;
            }

            header .navbar-expand .navbar-brand img {
                height: auto;
            }
        }




        /* Base style for nav links */
      .nav-link1 {
            position: relative;
            /* padding-bottom: 8px; */
            /* Space for underline effect */
        }

        /* Active underline */
        .nav-link1.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            /* Position at the bottom of the link */
            left: 0;
            width: 100%;
            height: 3px;
            /* Thicker underline for active */
            background-color: #1A406D;
            /* Color for active underline */  
        }

        /* Hover underline */
        .nav-link1::before {
            content: "";
            position: absolute;
            bottom: -5px;
            /* Lower than active underline */
            left: 0;
            width: 0;
            height: 2px;
            /* Thinner underline */
            background-color: #1A406D;
            transition: width 0.4s ease;
            /* Smooth expansion on hover */
        }

        .nav-link1:hover::before {
            width: 100%;
            /* Expands on hover */
        }

        /* Smooth dropdown effect */
        .navbar .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.3s ease;
            transform: translateY(-10px);
        }

        .navbar .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }




    </style>

</head>

<body class="home">

    <!-- Preloader -->
    <!-- <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div> -->

    <!-- Header -->
    <header id="header">

        <!-- Top Navbar -->


        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-fixed sub">
            <div class="container header">
                <div class="col-md-2">
                    <a class="navbar-brand" href="<?php echo base_url(''); ?>">
                        <!-- <span class="brand">
                            <span class="featured">
                                <span class="first">GLO</span>
                            </span>
                            <span class="last">BUS</span>
                        </span> -->


                        <img src="<?php echo base_url(''); ?>assets/images/logo.png" alt="logo" style="width:100%">

                    </a>
                </div>
                <!-- Navbar Brand-->


                <!-- Nav holder -->
                <div class="ml-auto"></div>
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand top">
                        <div class="container header">

                            <!-- Navbar Items [left] -->
                            <!-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                        </li>
                    </ul> -->

                            <!-- Nav holder -->
                            <div class="ml-auto"></div>

                            <!-- Navbar Items [right] -->
                            <ul class="navbar-nav">
                                <li class="nav-item" style="margin: auto;justify-content: center;align-items: center;">
                                    <a href="#" class="nav-link"> USA</a>|
                                </li>
                                <li class="nav-item" style="margin: auto;justify-content: center;align-items: center;">
                                    <a href="#" class="nav-link"> UK</a>|
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">UAE</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i> +91 9829787040</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>Support@vscoffshore.com</a>
                                </li>
                            </ul>

                            <!-- Navbar Icons -->
                            <ul class="navbar-nav icons">
                                <li class="nav-item social">
                                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item social">
                                    <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="nav-item social">
                                    <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!-- Navbar Items -->
                    <div class="row d-flex justify-content-end">
                        <ul class="navbar-nav items col-md-11 p-0">
                            <li class="nav-item ">
                                <a href="main" class="nav-link nav-link1 n-menu">HOME </a>

                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link  n-menu">ABOUT US<i class="icon-arrow-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="team">Our Team </a>

                                    </li>
                                    <li class="nav-item"><a href="onboarding" class="nav-link">Onboarding Process</a></li>
                                    <li class="nav-item"><a href="why" class="nav-link">Why VSC Offshore </a></li>
                                    <li class="nav-item"><a href="data" class="nav-link">Data Security & Confidentiality</a></li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a href="<?php echo base_url('Services'); ?>" class="nav-link  n-menu">SERVICES <i class="icon-arrow-down"></i></a>

                                <div class="dropdown-menu newmenu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Tax_Preparation_Service'); ?>">Tax Preparation Service</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Multistate_Tax_Preparation_Service'); ?>">Multistate Tax Preparation Service</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Back_Year_Tax_Preparation'); ?>">Back Year Tax Preparation</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Forensic_Accounting_Services'); ?>">Forensic Accounting Services</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Tax_Litigation_Resolution_Services'); ?>">Tax Litigation Resolution Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Management_Accounting_Reporting_Services'); ?>">Management Accounting & Reporting Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Payroll_Services'); ?>">Payroll Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Business_Valuation_Services'); ?>">Business Valuation Services</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Bookkeeping_Services'); ?>">Bookkeeping Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Secretarial_Services'); ?>">Secretarial Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Audit_Services'); ?>">Audit Services</a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url('Employee_Retention_Tax_Credit'); ?>">Employee Retention Tax Credit (ERTC)</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link  n-menu">RESOURCES<i class="icon-arrow-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog </a>

                                    </li>
                                    <li class="nav-item"><a href="<?php echo base_url('event'); ?>" class="nav-link">Event</a></li>
                                    <li class="nav-item"><a href="<?php echo base_url('press'); ?>" class="nav-link">Press Release</a></li>
                                </ul>
                            </li>
                            <li class="nav-item  nav-link1  ">
                                <a href="<?php echo base_url('FAQ'); ?>" class="nav-link  n-menu">FAQ'S </a>
                            </li>
                            <li class="nav-item  nav-link1  ">
                                <a href="contact" class="nav-link  n-menu ">CONTACT US </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" target="_blank" class="btn ml-lg-auto primary-button nav-link  n-menu ">SCHEDULE CALL </a>
                            </li>



                        </ul>
                        <!-- <ul class="navbar-nav action col-md-3 p-0 justify-content-end" style>
                            <li class="nav-item ">
                                <a href="#" target="_blank" class="btn ml-lg-auto primary-button">SCHEDULE CALL </a>
                               
                            </li>
                        </ul> -->
                    </div>

                </div>
                <!-- Navbar Toggle -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="icon-menu m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action -->

            </div>
        </nav>

    </header>
    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .inner-page ol,
    .inner-page ul {
        padding-left: 0;
    }
</style>

</html>