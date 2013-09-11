<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">

      <div class="col col75 L">

          <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t1'); ?>
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

      
      <div class="col col50 L">
        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t2'); ?>
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

      <div class="col col50 R">
        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t3'); ?>
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



        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t4'); ?>
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


      <div class="col col25 R">
        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t5'); ?>
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

        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=t6'); ?>
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

        <div class="module">
          <?php query_posts('orderby=rand&showposts=1&tag=b3'); ?>
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

