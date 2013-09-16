<?php /* Template Name: grafik */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section role="main" >
    <div class="grafik">
          <?php query_posts( array( 'category__in' => array(11), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="col col25">
              <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              <a href="#" class="trigger"><?php the_title(); ?></a>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>     
    </div>
      
    </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>