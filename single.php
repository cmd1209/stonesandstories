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
                    
                    <div class="factbox" style="margin-bottom: 30px;" id="<?php the_title(); ?>">
                      <?php if( get_field('factsfigures') ): ?>
                    <ul class="post-categories facts">
                      <li><?php if( get_field('custom-links') ): ?> <?php the_field('custom-links'); ?></li>
                      <li><a id="factstoggle" href="#">Facts & Figures</a></li>
                    </ul>
                    
                  <?php endif; ?>          
                <?php endif; ?>

         
              <div class="toggle">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>     
          </div>
                  <?php endif; ?>
              <?php the_content(); ?>   
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