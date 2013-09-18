<?php /* Template Name: grafik */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main" class="black">
  <div class="col col100">
    <?php query_posts('cat=12'); ?>  
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col col50">
        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
          <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>



  

          

