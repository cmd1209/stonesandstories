<?php /* Template Name: video */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="videoatmo">


        <?php the_content(); ?>
        

    </div>
  </section>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>

      <div id="overlay">
        <div class="glass">
          <img src="<?php echo get_template_directory_uri(); ?>/img/brokenglass.png" alt="glass">
        </div> 
      </div>