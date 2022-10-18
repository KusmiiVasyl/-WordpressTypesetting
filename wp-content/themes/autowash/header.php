<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autowash
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AutoWash</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
								<!-- <h1>Auto<span>Wash</span></h1> -->
                                <img src="<?php the_field('logotype') ?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p><?php the_field('work_schedule')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p><?php the_field('telephone') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p><?php the_field('email') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo get_template_directory_uri() ?>/index.html" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo get_template_directory_uri() ?>/about.html" class="nav-item nav-link">About</a>
                            <a href="<?php echo get_template_directory_uri() ?>/service.html" class="nav-item nav-link">Service</a>
                            <a href="<?php echo get_template_directory_uri() ?>/price.html" class="nav-item nav-link">Price</a>
                            <a href="<?php echo get_template_directory_uri() ?>/location.html" class="nav-item nav-link">Washing Points</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo get_template_directory_uri() ?>/blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="<?php echo get_template_directory_uri() ?>/single.html" class="dropdown-item">Detail Page</a>
                                    <a href="<?php echo get_template_directory_uri() ?>/team.html" class="dropdown-item">Team Member</a>
                                    <a href="<?php echo get_template_directory_uri() ?>/booking.html" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div>
                            <a href="<?php echo get_template_directory_uri() ?>/contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="#">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->