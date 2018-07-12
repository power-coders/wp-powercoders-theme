<?php /* FAQ Page Template */ ?>

<?php
 get_header();
?>



<?php
 while (have_posts()) : the_post(); 
?>
        <div class="parallax-container valign-wrapper">
            <div class="parallax">
                <!--show hero image -->
                <?php $hero = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                <!-- get the alt image else take the title as a alt of the image-->
                <?php 
                     $alt=get_the_post_thumbnail_caption();
                     if ($alt != get_the_post_thumbnail_caption()) {
                         $alt = get_the_title();
                     }
                 ?>
                <img src="<?php echo $hero['0'];?>" alt="<?php echo $alt?> ">
            </div>
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
        <div>
        <hr class="whitespace">
        <!-- The loop for the first repeater-->
        <?php 
            if (have_rows('faq')):
            while (have_rows('faq')): the_row();
        ?>
        <h2> <?php the_sub_field('general');?></h2>
        <?php if have_rows('general')?>
        <ul class="collapsible">
           <?php 
                while (have_rows('general')) : the_row;
            ?>
            <li><div class="collapsible-header"><?php the_sub_field('questions'); ?></div>
            <div class="collapsible-body"><?php the_sub_field('answers');?></div></li>
            <?php endwhile;?>
        </ul>
         <?php endif;?>
       <?php endwhile;?>
        <?php endif?>
     </div>
<?php 
endwhile;
?>


<?php
get_footer();
?>