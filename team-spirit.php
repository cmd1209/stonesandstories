<?php /* Template Name: Team-Spirit */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">    
      <div class="col col100">
        <div class="module">
          <div class="textwrap">
            <?php the_content(); ?>
             <div class="col col100">
<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <div class="col col50" id="post-<?php the_ID(); ?>">
          <h1><span><?php the_title(); ?></span></h1>
        <div class="textwrap" id="<?php echo $page->post_name; ?>">
            <?php echo the_content(); ?>
        </div>

        </div>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>


      </div>
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