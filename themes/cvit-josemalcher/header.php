<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- ==== Google Font ==== -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700,800" rel="stylesheet">

    <!-- ==== Font Awesome ==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- ==== Bootstrap ==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- ==== jQuery UI ==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet">

    <!-- ==== Owl Carousel Plugin ==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">

    <!-- ====Main Stylesheet==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- ====Custom Stylesheet==== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom-style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--bounce">
            <div class="preloader-bouncer--1"></div>
            <div class="preloader-bouncer--2"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Start -->
    <div id="header">
        <nav class="header--navbar">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-header">
                        <!-- Header Custom Button Start -->
                        <div class="header--custom-btn hidden-lg hidden-md">
                            <a href="#hireMeModal" class="btn--default" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
                        </div>
                        <!-- Header Custom Button End -->

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo Start -->
                        <a class="logo navbar-brand" href="#">
                            <div class="logo--img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="">
                            </div>

                            <div class="logo--content">
                                <h1>JOSÉ <strong>MALCHER JR.</strong></h1>
                                <p><strong>DESENVOLVEDOR </strong> WEB</p>
                            </div>
                        </a>
                        <!-- Logo End -->
                    </div>

                    <!-- Header Custom Button Start -->
                    <div class="header--custom-btn hidden-sm hidden-xs">
                        <a href="#hireMeModal" class="btn--default" data-toggle="modal">CONTRATE-ME</a>
                    </div>
                    <!-- Header Custom Button End -->

                    <!-- Header Nav Start -->
                    <div id="headerNav" class="header--nav navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right AnimateScroll">
                            <li><a href="#banner">INÍCIO</a></li>
                            <li><a href="#about">SOBRE</a></li>
                            <li><a href="#services">SERVIÇOS</a></li>
                            <li><a href="#gallery">TRABALHOS</a></li>
                            <li><a href="#feedback">FEEDBACK</a></li>
                            <li><a href="#blog">BLOG</a></li>
                            <li><a href="#contact">CONTATOS</a></li>
                        </ul>
                    </div>
                    <!-- Header Nav End -->
                </div>
            </div>
        </nav>
    </div>
    <!-- Header Area End -->
