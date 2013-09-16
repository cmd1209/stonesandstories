<?php /* Template Name: grafik */ get_header(); ?>


    <section role="main" >
    <div class="col col100">
      <?php query_posts('orderby=rand&cat=12'); ?>
    <div class="col col25">
      <?php while (have_posts()) : the_post(); ?>
          <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medum->ID, 'medium');?></a>
    </div>
    </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>     
      
    </section>

<?php get_footer(); ?>



