<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      
        <div class="col col100">
          <div class="module">
            <div class="textwrap categorysingle">
<div class="testcontainer">                <h2><?php the_title(); ?></h2>
                <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?></div>
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