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
$pageChildren = get_pages('sort_column=menu_order&hierarchical=0&child_of='.$post->ID);
if ( $pageChildren ) {
  foreach ( $pageChildren as $pageChild ) {
    echo '<p>And the title is: '. $pageChild->post_title.'</p>';
    if (!empty($pageChild->post_excerpt)){
echo '<p><a href="' . get_permalink($pageChild->ID) . '">' . $pageChild->post_excerpt.'</a> </p> ';
}
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