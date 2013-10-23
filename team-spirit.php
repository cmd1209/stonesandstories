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
        <?php
$pageChildren = get_pages('child_of=145');
if ( $pageChildren ) {
  foreach ( $pageChildren as $pageChild ) {
    echo '<a class="post-categories" href="' . get_permalink($pageChild->ID) . '">'. $pageChild->post_title.'</a>';
    echo ''.$pageChild->excerpt.' ';
  }
}
?>

      </div>



    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>