<?php /* Template Name: Start */ get_header(); ?>

<section role="main">
  <div class="gridrow">
    <div class="stuff">
      <article>
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
        <?php $ids = array(69); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
        <?php while (have_posts()) : the_post(); ?>
          <h2 style="padding-top:10px;"><?php the_title(); ?><?php if( get_field('subheadline') ): ?><span><?php the_field('subheadline'); ?></span></h2><?php endif; ?>
          <?php echo excerpt(70); ?>
          <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>    
        <?php endwhile; ?>
      </article>
    </div>
    <div class="aside">
      <?php get_sidebar(); ?>
      </div
    </div>
  </section>

<?php get_footer(); ?>