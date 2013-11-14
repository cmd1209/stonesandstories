<?php get_header(); ?>

<!-- section -->
<section role="main">
  <div class="col maincontent">
    <div class="col col100">
      <div class="module">
        <h1><span><?php single_cat_title(); ?></span></h1>

        <?php query_posts( array( 'category__in' => array(31,16), 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap col col50 underline">
            <h2 style="font-size: 45px;"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <?php if( get_field('subheadline') ): ?>
              <h2><?php the_field('subheadline'); ?></h2>
            <?php endif; ?>
            <div class="col col40" style="padding-right: 15px;">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>  
            </div>
            <div class="col col60">
              <?php echo excerpt(35); ?>
              <a href="<?php echo get_permalink(); ?>"> mehr...</a>
              <?php the_category(); ?>  
            </div>
          </div>

        <?php endwhile; else: ?>
      <?php endif; ?>   
      <?php wp_reset_query(); ?>  

      <div class="archives col col100">
        <h2>Archives</h2>
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 4, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?><span><strong><br><?php the_date(); ?></strong></span></a></li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>  
      </div>

    </div>
  </div>

</div>
<div class="sidebar">
  <?php get_sidebar(); ?>
</div>

</section>
<!-- /section -->


<?php get_footer(); ?>





