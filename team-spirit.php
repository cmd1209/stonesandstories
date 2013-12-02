<?php /* Template Name: Team-Spirit */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section role="main">
<div class="col maincontent">    
<div class="col col100">
<div class="module">
<div class="textwrap">

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