<?php /* Default Page Template */ ?>

<?php get_header(); ?>

<div class="parallax-container valign-wrapper">
    <div class="parallax">
        <!--show hero image -->
       <?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
     
        <?php
        $image_alt = get_post_meta( $hero, '_wp_attachment_image_alt', true );//get_alt_of_the_image
         ?>
        <img src="<?php echo $hero['0'];?>" alt="<?php echo $image_alt; ?>" style="transform: translate3d(-50%, 229.106px, 0px); opacity: 1;"></div>
</div>
<h1 class="center">
    <?php  echo get_the_title();?>
</h1>

<div class="container">
    <div calss="row">
        <div class="col s12 offset-l2 l8">
            <h2></h2>
            <p><?php  echo get_the_content();?> </p>
        </div>
    </div>
</div>







<?php get_footer(); ?>
