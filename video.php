<?php /* Template Name: video */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="videoatmo">
      <div class="col col75 L">
        <?php the_content(); ?>
      </div>
      <div class="col col25 R">
        
      </div>
    </div>
  </section>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>