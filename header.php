<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?php  bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>

</head>
<body>

<nav id="mainNavbar" class="navbar fixed-top navbar-expand-lg ">
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Geosinformatica</a>
    <div class="nav__mobileButton navbar-toggler" id="toogleMenuButton" type="button" data-toggle="collapse" 
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">

        <?php
            if ( is_home() ) {
                // This is the blog posts index
                get_sidebar( 'blog' );
            } else {
                // This is not the blog posts index
                get_sidebar();
            }
        ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php if ( !is_home() ) {echo get_home_url();} ?>#AboutUs">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ( !is_home() ) {echo get_home_url();} ?>#Projects">Projekty</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Info
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item"
                       href="http://www.informatica.agh.edu.pl/index.php/category/newsy/">Archiwum</a>
                    <a class="dropdown-item"
                       href="https://get.google.com/albumarchive/105194706630229846053?source=pwa">Galeria</a>
                    <a class="dropdown-item" href="http://www.informatica.agh.edu.pl/_PLIKI/Statut.pdf">Statut</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="!0" data-toggle="modal" data-target="#adminModal">Panel</a>
                </div>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="<?php if ( !is_home() ) {echo get_home_url();} ?>#News">Aktualności</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php if ( !is_home() ) {echo get_home_url();} ?>#Contact">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>