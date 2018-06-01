<?php

function powercoders_setup_theme()
{
    add_theme_support('title-tag');         // https://codex.wordpress.org/Title_Tag
    add_theme_support('post-thumbnails');   // https://codex.wordpress.org/Post_Thumbnails

    register_nav_menu('main', 'Main Menu'); // we will be using one menu for navigation
}
add_action('after_setup_theme', 'powercoders_setup_theme');

function powercoders_enqueue_scripts()
{
    // https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts

    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array() );
}
add_action('wp_enqueue_scripts', 'powercoders_enqueue_scripts');

function powercoders_widgets_init()
{
    // https://codex.wordpress.org/Widgets_API
}
add_action('widgets_init', 'powercoders_widgets_init');


// Theme support added
if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
  add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));

    // Add Support for Custom Header - Uncomment below if you're going to use
  add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('personal_website', get_template_directory() . '/languages');
}
