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

function powercoders_post_types(){
    //person post type
    register_post_type('person',array(
        'supports' => array('title', 'editor','excerpt'),
        'rewrite' => array('slug' => 'persons'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Persons',
            'add_new_item' => 'Add New Person',
            'edit_item' => 'Edit Person',
            'all_items' => 'All Persons',
            'singular_name' => 'Person'
            ),
        'menu_icon' =>'dashicons-admin-users'
    ));
       //Program post type
     register_post_type('program',array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,      
        'public' => true,
        'labels' => array(
            'name' => 'programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
            ),
        'menu_icon' =>'dashicons-awards'
    ));
}
    add_action('init','university_post_types');

