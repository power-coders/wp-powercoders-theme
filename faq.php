<?php /*Template Name: FAQ Page Template */ ?>

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
                    <hr class="whitespace">
                    <?php if (have_rows('sections')):
                        while(have_rows('sections')):the_row();?>    
                    <h2><?php the_sub_field('title');?></h2>
                    <!--if the section has a question&answer -->
                        <?php if(have_rows('questions_answers')):?>
                            <ul class="collapsible">
                               <?php while (have_rows('questions_answers')): the_row();?>
                                <li>
                                    <div class="collapsible-header"><?php the_sub_field('question');?></div>
                                    <div class="collapsible-body"><?php the_sub_field(' answer');?></div>
                                </li>
                                <?php endwhile;?><!-- End while (have_rows('questions_answers')) -->
                            </ul>
                    
                        <?php endif;?><!-- End if(have_rows('questions_answers'))-->
                    <?php endwhile;?><!-- End while (have_rows('sections') -->
                    <?php endif;?><!-- End if (have_rows('sections') -->
                </div>
            </div>
        </div>
        <div>
      
<?php endwhile;?>

<?php
get_footer();
?>