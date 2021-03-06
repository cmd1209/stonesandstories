<?php get_header(); ?>

<!-- section -->
<section role="main">
  <div class="maincontent">
    <div class="col col100">
      <div class="module">

<h1><strong><?php single_cat_title(); ?></strong></h1>
<div class="col100" style="overflow:hidden;">
        <?php query_posts( array( 'category__in' => array(31,16), 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap singletitle col col50">
            <h2 style="width:100%;display:block;"><?php the_title(); ?><br><span><?php the_field('subheadline'); ?></span></h2>

            <div class="col col40">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>
            </div>
            <div class="col col60" style="padding-left:5px;padding-top:0;margin-top:-25px;">
              <p>
                <?php echo excerpt(35); ?>
              </p>
            </div>
          </div>
        <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
</div>
<div class="col100" style="overflow:hidden; margin-bottom:30px;">
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 2, 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap singletitle col col50">
            <h2 style="width:100%;display:block;"><?php the_title(); ?><br><span><?php the_field('subheadline'); ?></span></h2>

            <div class="col col40">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>
            </div>
            <div class="col col60"  style="padding-left:5px;padding-top:0;margin-top:-25px;">
              <p>
                <?php echo excerpt(35); ?>
              </p>
            </div>
          </div>
        <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
</div>
<div class="col100" style="overflow:hidden; margin-bottom:30px;">
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 4, 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="textwrap singletitle col col50">
            <h2 style="width:100%;display:block;"><?php the_title(); ?><br><span><?php the_field('subheadline'); ?></span></h2>

            <div class="col col40">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>
            </div>
            <div class="col col60"  style="padding-left:5px;padding-top:0;margin-top:-25px;">
              <p>
                <?php echo excerpt(35); ?>
              </p>
            </div>
          </div>
        <?php endwhile; else: ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
</div>
<div class="archives col col100">
        <h2><a href="#" class="archtrigger">Archives</a></h2>
        <div class="archstuff">
        <?php query_posts( array( 'category__in' => array(31,16), 'offset' => 6, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
        <?php while (have_posts()) : the_post(); ?>
            <li>
              <div class="col col60">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </div>
              <div class="col col40">
                <?php the_date(); ?>
              </div>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </div>

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
