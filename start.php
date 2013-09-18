<?php /* Template Name: Start */ get_header(); ?>
  <section role="main">
    <div class="col startcontent">
      <div class="row clear">
        <div class="col col75 L">

          <?php $ids = array(73, 65); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
            <?php while (have_posts()) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
                <?php if( get_field('subheadline') ): ?>
                  <h3><?php the_field('subheadline'); ?></h3>
                <?php endif; ?>
              <?php echo excerpt(60); ?>
            <a href="<?php echo get_permalink(); ?>"> mehr...</a>
          <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
          <?php endwhile; ?> 

        </div>
        <div class="col col25 R">

          <?php $ids = array(506,421); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
            <?php while (have_posts()) : the_post(); ?>
              <h2><?php the_title(); ?></h2>
                <?php if( get_field('subheadline') ): ?>
                  <h3><?php the_field('subheadline'); ?></h3>
                <?php endif; ?>
              <?php echo excerpt(60); ?>
            <a href="<?php echo get_permalink(); ?>"> mehr...</a>
          <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
          <?php endwhile; ?> 
          
        </div>
        

      </div>


    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
<?php get_footer(); ?>




