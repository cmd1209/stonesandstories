<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">

      <div class="col col100">
        <div class="module">
          <div class="textwrap categorysingle">
            <h2><?php the_title(); ?></h2>
            <div class="col col100">
              <div class="col col25">
               <?php if( get_field('subheadline') ): ?>
                <h3><?php the_field('subheadline'); ?></h3>
              </div>
              <div class="col col75">
                <div class="factbox" id="<?php the_title(); ?>">
                  <?php if( get_field('factsfigures') ): ?>
                    <li class="post-categories facts"><a href="#">Facts & Figures</a></li>
                  <?php endif; ?>                  
                  <div class="toggle">
                   <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                  <?php endif; ?>
                </div>     
              </div>
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