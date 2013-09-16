<?php /* Template Name: grafik */ get_header(); ?>

<div class="grafik">
            <?php query_posts('orderby=rand&cat=12'); ?>
              <?php while (have_posts()) : the_post(); ?>
  <div class="col col25">
    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
  </div>
            <?php endwhile; ?>
</div>

<?php get_footer(); ?>