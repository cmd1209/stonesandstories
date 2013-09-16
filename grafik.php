<?php /* Template Name: grafik */ get_header(); ?>

<div class="grafik">
            <?php query_posts('orderby=rand&cat=11'); ?>
              <?php while (have_posts()) : the_post(); ?>
  <div class="col col25">
    <div class="biglinks H500">
        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
    </div>
  </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>