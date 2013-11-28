<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent"main>
      
      <div class="col col100">
        <div class="module">
          <h1><strong><?php single_cat_title(); ?></strong></h1>
          <div class="textwrap">
            <?php the_content(); ?>
            <div class="col col100">
             <ul class="post-categories">
                  <?php if( get_field('custom-links') ): ?>
                    <li> <?php the_field('custom-links'); ?></li>
                  <?php endif; ?>   
                </ul> 
            </div>
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