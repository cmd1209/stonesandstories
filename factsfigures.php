<?php /* Template Name: factsfigures */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
        <h1><span><?php the_title(); ?></span></h1>
          <div class="textwrap">

          <?php query_posts( array( 'category__in' => array(60,12,11), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox" id="<?php the_title(); ?>">
          <div class="factsheader">
          <div class="col col5">
            <a href="#" class="trigger"></a>
          </div>
          <div class="col col60">
            <?php if($post->post_content != "") : ?>
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              <?php else: ?>
              <a href="#"><?php the_title(); ?></a>
              <?php endif; ?>
          </div>
          <div class="col col5">
            <?php the_date('Y'); ?>
          </div>
          <div class="col col5">
            <?php if( get_field('location') ): ?>
              <?php the_field('location'); ?>
            <?php endif; ?>
          </div>
          <div class="col col25">
            <?php if( get_field('divisions') ): ?>
                  <?php the_field('divisions'); ?>
            <?php endif; ?>
          </div>
          </div>
   
              <div class="toggle">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>  
          </div>   


    </div>
    </div>
    </div>

    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>