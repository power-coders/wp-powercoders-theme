<?php get_header(); ?>

<h1> <?php the_title();?> </h1>
<h1> <?php the_field("home_page_header_text"); ?></h1>

<p><?php the_field("home_page_header_description"); ?></p>

<!-- image field -->
<img src="<?php the_field("home_page_header_image"); ?>" alt="" width="200"/>


<?php get_footer(); ?>
