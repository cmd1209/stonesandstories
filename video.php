<?php /* Template Name: video */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">

        <?php the_content() ?>
        
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