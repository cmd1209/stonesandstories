<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">

      <div class="col col75">
        <div class="module">
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t1'); ?>
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
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t2'); ?>
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
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t3'); ?>
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
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t4'); ?>
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


      <div class="col col25">
        <div class="module">
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t5'); ?>
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
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=t6'); ?>
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
        <?php while (have_posts()) : the_post(); ?>
          <?php query_posts('orderby=rand&showposts=1&tag=b3'); ?>
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

