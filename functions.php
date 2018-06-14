<?php

function powercoders_setup_theme(){
    add_theme_support('title-tag');         // https://codex.wordpress.org/Title_Tag
    add_theme_support('post-thumbnails');   // https://codex.wordpress.org/Post_Thumbnails
    add_theme_support('menus');             // Add Menu Support

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

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

    register_sidebar( array(
      'name' => 'Content Footer', 'powercoders',
      'id' => 'content-footer',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Get Involved Footer', 'powercoders',
      'id' => 'get-involved-footer',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Powercoders Footer', 'powercoders',
      'id' => 'powercoders-footer',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Mailinglist Footer', 'powercoders',
      'id' => 'mailinglist-footer',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Donate Footer', 'powercoders',
      'id' => 'donate-footer',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
}
add_action('widgets_init', 'powercoders_widgets_init');

function powercoders_post_types(){
    //person post type
    register_post_type('person',array(
        'supports' => array('title', 'editor',),
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
    add_action('init','powercoders_post_types');




