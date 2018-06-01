<?php /* Default Page Template */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section>
  <?php the_post_thumbnail( 'full' ); ?>
  <?php the_content(); ?>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
