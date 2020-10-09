<?php
    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package _s
     */
    
    ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <!-- <html lang="en"> -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/icons/favicon.jpg">
        <title>Million Tree</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/Header_menu.css"> -->
        <link href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet"/>
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/magnific-popup.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/base.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174565272-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-174565272-1');
        </script>
    </head>
    <body>
        <header class="sticky-header">
            <!-- navbar-fixed-top -->
            <nav class="navbar " id="myHeader">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand off-scroll-display" href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.svg" alt=""></a>
                        <a class="navbar-brand on-scroll-display" href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-mt.svg" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <nav role='navigation'>
                            <div class="header_download_button hidden-xs">
                                <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" alt="" class="download_btn"></a>
                            </div>
                            <div id="menuToggle">
                                <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                                <ul id="menu">
                                    <?php 
                                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'Header Menu' ) );?>
                                </ul>
                            </div>
                        </nav>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content">