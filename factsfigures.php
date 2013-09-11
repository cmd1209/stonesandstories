<?php /* Template Name: factsfigures */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      
        <div class="col col100">
          <div class="module">
             <?php query_posts( array( 'category__in' => array(1,10), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_time(); ?></p>
                  <?php the_category(); ?>   
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>