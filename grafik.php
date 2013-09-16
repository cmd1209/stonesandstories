<?php /* Template Name: grafik */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section role="main" >
    <div class="grafik">
           <?php query_posts('orderby=rand&cat=12'); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="col col25">
              <div class="imagecontainer"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>     
    </div>
      
    </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>