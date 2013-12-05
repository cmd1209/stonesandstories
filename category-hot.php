<?php get_header(); ?>

<!-- section -->
<section role="main">
  <div class="col maincontent">
    <div class="col col100">
      <div class="module">


<div class="col100">
<h1><strong><?php single_cat_title(); ?></strong></h1>
        <?php query_posts( array( 'category__in' => array(31,16), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap singletitle col col50">
            <h2><?php the_title(); ?><br><span><?php the_field('subheadline'); ?></span></h2>
            
            <div class="col col40">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>  
            </div>
            <div class="col col60" style="padding-left:10px;">
              <?php echo excerpt(35); ?>
            </div>
          </div>
        <?php endwhile; else: ?>
      <?php endif; ?>   
      <?php wp_reset_query(); ?>
</div>

<div class="col100">
<h1><strong><?php single_cat_title(); ?></strong></h1>
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 2, 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap singletitle col col50">
            <h2><?php the_title(); ?><br><span><?php the_field('subheadline'); ?></span></h2>
            
            <div class="col col40">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>  
            </div>
            <div class="col col60" style="padding-left:10px;">
              <?php echo excerpt(35); ?>
            </div>
          </div>
        <?php endwhile; else: ?>
      <?php endif; ?>   
      <?php wp_reset_query(); ?>
</div>





      <div class="archives col col100">
        <h2>Archives</h2>
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 4, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><div class="col col60"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
                    <div class="col col40"><?php the_date(); ?></div></li>
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





