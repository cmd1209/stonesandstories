<?php /* Template Name: factsfigures */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
          <?php query_posts( array( 'category__in' => array(1,10), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox">
            <div class="col col40">
              <a href="#"> <?php the_title(); ?></a>
            </div>
            <div class="col col10">
              <?php the_date('Y', '<span>', '</span>'); ?>
            </div>
            <div class="col col20">
              <?php the_category(); ?>
            </div>
            <div class="col col10">
              <a href="<?php echo get_permalink(); ?>"> mehr...</a>
            </div>
            <div class="col col20">
              
            </div>     
          </div>
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