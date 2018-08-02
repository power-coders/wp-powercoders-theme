<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>

    </a>
    <nav role="navigation">
        <div class="nav-wrapper container">
            <ul id="nav-mobile" class="sidenav">
                <!-- add the menu navigation (location , id , container, class name ) -->
                <?php
                $args = array(
                    'theme_location' => 'main',
                    'menu_id' => 'nav-mobile',
                    'menu-class' => 'sidenav'
                );
                wp_nav_menu('$args'); ?>
                <!-- <li class="active"><a href="/">Home</a></li>
                            <li ><a href="/program">Program</a></li>
                            <li ><a href="/about">About</a></li>
                            <li ><a href="/press">Press</a></li>
                            <li ><a href="/faq">FAQ</a></li>-->
            </ul>
        </div>
    </nav>

    <header class="center">
        <a href="<?php echo site_url(); ?>" class="logo center">
     <img src="<?php echo get_template_directory_uri();?>\images\powercoders-logo-CMYK.svg" alt="POWERCODERS Logo">
      </a>
    </header>
