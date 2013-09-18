<?php /* Template Name: grafik */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main" class="black">
    <?php the_content(); ?>

    <?php query_posts('cat=12'); ?>  
      <div class="col col50">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a class="grafiklinks col" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
          <?php endwhile; endif; ?>
      </div>
  </section>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>



  

          

