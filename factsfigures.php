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
            <div style="width:100%;overflow:hidden;">
            <div class="col col60" style="padding-right: 20px;">
                            <?php if( get_field('factsfigures') ): ?>
                                <a class="trigger up" href="#"></a>
                              <?php else: ?>
                                <a class="blanktrigger" href="#"></a>
                            <?php endif; ?>
                            <?php if($post->post_content != "") : ?>
                              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                            <?php else: ?>
                              <a href="#"><?php the_title(); ?></a>
                            <?php endif; ?>
                            
                        </div>

                        <div class="col col10">
                          <?php the_date('Y', '<p>', '</p>'); ?>
                        </div>
                        <div class="col col30" style="min-height: 1px;">
                           <?php if( get_field('location') ): ?>
                                <?php the_field('location'); ?>
                            <?php endif; ?>
                        </div>

              </div>
              <div class="toggle" style="width:75%;float:left;">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>
              <div class="col col25">
                <ul class="post-categories"><li><?php if( get_field('custom-links') ): ?> <?php the_field('custom-links'); ?></li><?php endif; ?></ul>
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