<?php /* Template Name: grafik */ get_template_part('grafikheader'); ?>

<div class="grafik">
            <?php query_posts('orderby=rand&cat=12'); ?>
              <?php while (have_posts()) : the_post(); ?>
  <div class="col col25">
              <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
            <?php endwhile; ?>
    
  </div>
</div>


<?php get_template_part('grafikfooter'); ?>

