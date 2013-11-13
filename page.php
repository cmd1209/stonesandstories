<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent" style="min-height:1100px;">
      
      <div class="col col100">
        <div class="module">
          <div class="moduleheader">
                <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
          <div class="textwrap">
            <?php the_content(); ?>
             <?php if( get_field('custom-links') ): ?>
                    <div class="col col100 post-categories"><?php the_field('custom-links'); ?></div>
                  <?php endif; ?>
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