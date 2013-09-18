<?php /* Template Name: grafik */ get_header(); ?>

  <section role="main" class="black">
  <div class="col col100">
      <?php query_posts( array( 'category__in' => array(12), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
      <?php while (have_posts()) : the_post(); ?>
    <div class="col col50">
      <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
    </div>
  </div>
  </section>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

<?php get_footer(); ?>








  

          

