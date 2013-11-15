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
          
          <div style="width:100%;overflow:hidden;" class="factsheader">
            <?php if($post->post_content != "") : ?>
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              <?php else: ?>
              <a href="#"><?php the_title(); ?>
              <?php endif; ?>
              <ul>
              <li><?php the_date('Y', '<p>', '</p>'); ?></li>
              <li><?php if( get_field('location') ): ?><?php the_field('location'); ?><?php endif; ?></li>
              </ul>
          </div>

          <div class="col100">
                <ul class="post-categories" style="overflow:hidden;margin-bottom:0px;"><li><?php if( get_field('factsfigures') ): ?><?php if( get_field('custom-links') ): ?> <?php the_field('custom-links'); ?><?php endif; ?><a href="#" class="trigger">facts & figures</a><?php endif; ?></li></ul>
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