<?php /* Default Page Template */ ?>

<?php
    get_header(); 
?>
<?php
    while (have_posts()) : the_post(); { 
?>
<div class="parallax-container valign-wrapper">
    <div class="parallax">
        <!--show hero image -->
        <?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
        <!-- get the alt image else take the title as a alt of the image-->
        <?php if ($alt=get_the_post_thumbnail_caption()){
    
              } else {
                    $alt = get_the_title();
              }
        ?>
        <img src="<?php echo $hero['0'];?>" alt="<?php  echo $alt?> "></div>
</div>
<h1 class="center">    
    <?php  echo the_title();?>
</h1>

<div class="container">
    <div class="row">
<div class="col s12 offset-l2 l8">

        <?php  the_content();?>
</div>
    </div>
</div>





<?php }
endwhile;
?>

<?php get_footer(); ?>
