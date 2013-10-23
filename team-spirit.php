<?php /* Template Name: Team-Spirit */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">    
      <div class="col col100">
        <div class="module">
          <div class="textwrap">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col col100">
<?php $thePostIdArray = array("168","1460", "162", "41", "8", "35"); ?>
<?php $limit = 4 ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); $counter++; ?>
<?php if ( $counter < $limit + 1 ): ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php $post_id = $thePostIdArray[$counter-1]; ?>
<?php $queried_post = get_post($post_id); ?>
<h2><?php echo $queried_post->post_title; ?></h2>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
      </div>



    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>