<?php /* Template Name: Team-Spirit */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section role="main">
<div class="col maincontent">    
<div class="col col100">
<div class="module">
<div class="textwrap">
  <?php $ids = array(162); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php endif; ?>
  <?php echo the_content(); ?>
  <?php endwhile; ?>
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