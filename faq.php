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
                    <?php 
                    if( have_rows('sections') ):
                        while( have_rows('sections') ): the_row();
                       $title = get_sub_field('title');//get the title of the section
                        ?>
                    <h2><?php echo $title;?></h2>
                    <?php
                    if( have_rows('questions_answers') ): ?>
                    <ul class="collapsible">
                   <?php while( have_rows('questions_answers') ): the_row();
                    $question = get_sub_field('question');//get the questions
                    $answer = get_sub_field('answer');//get bthe answers
                    ?>
                        
                            <li>
                                <div class="collapsible-header">
                                    <?php echo $question;?>
                                </div>
                                <div class="collapsible-body">
                                    <?php echo $answer;?>
                                </div>
                            </li>

                        
                        <?php
                    endwhile; // End While have_rows('questions_answers')
                     echo '</ul>';
                    endif;//End if have_rows('questions_answers')
                    endwhile;//End while  have_rows('sections') 
                    endif;//first if  have_rows('sections') 
                    ?>
                </div>
            </div>
        </div>
        <div>

            <?php endwhile;?>

            <?php
get_footer();
?>
