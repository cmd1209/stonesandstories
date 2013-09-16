<?php /* Template Name: grafik */ get_header(); ?>

  <section role="main">
    <div class="col100">
          <div class="module">
            <?php query_posts('orderby=rand&cat=12'); ?>
              <?php while (have_posts()) : the_post(); ?>
              <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
            <?php endwhile; ?>
          </div>
    </div>
  </section>

<?php get_footer(); ?>

