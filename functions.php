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
}
add_action('wp_enqueue_scripts', 'powercoders_enqueue_scripts');

function powercoders_widgets_init()
{
    // https://codex.wordpress.org/Widgets_API
}
add_action('widgets_init', 'powercoders_widgets_init');
