<?php /* Template Name: factsfigures */ get_header("static"); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
        
            <div class="textwrap">
          <?php query_posts( array( 'category__in' => array(60), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
            <h2>Architecture</h2>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox">
            <div class="col col50" style="padding-right: 20px;">
                <?php if( get_field('factsfigures') ): ?>
                    <a class="trigger up" href="#"></a>
                <?php endif; ?><a class="name"name="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="col col10">
              <?php the_date('Y', '<p>', '</p>'); ?>
            </div>
            <div class="col col20" style="min-height: 1px;">
               <?php if( get_field('location') ): ?>
                    <?php the_field('location'); ?>
                <?php endif; ?>
            </div>
            <div class="col col20">
              <?php the_tags('<ul class="post-categories"><li>','</li><li>','</li></ul>'); ?>
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

          <div class="textwrap">
          <?php query_posts( array( 'category__in' => array(11), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
            <h2>Ausstellungsdesign</h2>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox">
            <div class="col col50" style="padding-right: 20px;">
                              <?php if( get_field('factsfigures') ): ?>
                    <a class="trigger up" href="#"></a>
                <?php endif; ?><a name="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="col col10">
              <?php the_date('Y', '<p>', '</p>'); ?>
            </div>
            <div class="col col20" style="min-height: 1px;">
               <?php if( get_field('location') ): ?>
                    <?php the_field('location'); ?>
                <?php endif; ?>
            </div>
            <div class="col col20">
              <?php the_tags('<ul class="post-categories"><li>','</li><li>','</li></ul>'); ?>
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


          <div class="textwrap">
          <?php query_posts( array( 'category__in' => array(12), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
            <h2>Grafikdesign</h2>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox">
            <div class="col col50" style="padding-right: 20px;">
                <?php if( get_field('factsfigures') ): ?>
                    <a class="trigger up" href="#"></a>
                <?php endif; ?>
              <a name="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="col col10">
              <?php the_date('Y', '<p>', '</p>'); ?>
            </div>
            <div class="col col20" style="min-height: 1px;">
               <?php if( get_field('location') ): ?>
                    <?php the_field('location'); ?>
                <?php endif; ?>
            </div>
            <div class="col col20">
              <?php the_tags('<ul class="post-categories"><li>','</li><li>','</li></ul>'); ?>
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