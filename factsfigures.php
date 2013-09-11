<?php /* Template Name: factsfigures */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      
        <div class="col col100">
          <div class="module">
             <?php query_posts('orderby=rand'); ?>
              <?php while (have_posts()) : the_post(); ?>

                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>

            <?php endwhile; ?>
          </div>
        </div>

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>