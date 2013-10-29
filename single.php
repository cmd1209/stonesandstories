<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      
        <div class="col col100">
          <div class="module">
            <div class="textwrap categorysingle">
                <h2><?php the_title(); ?></h2>
                <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                    

                    <div class="factbox" id="<?php the_title(); ?>">
                      <?php if( get_field('factsfigures') ): ?>
                    <a class="post-categories facts" href="#">Facts & Figures</a>
                <?php endif; ?>
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>

          
              <div class="toggle">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>     
          </div>
                  <?php endif; ?>
              <?php the_content(); ?>

                <?php the_category(); ?>              
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