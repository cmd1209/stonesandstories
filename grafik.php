<?php /* Template Name: grafik */ get_header(); ?>

<div class="grafik">
 
</div>

<?php get_footer(); ?>

<div class="gprojects">
   <?php query_posts('cat=12'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <a class="grafiklinks col" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>

  <?php endwhile; endif; ?>


</div>