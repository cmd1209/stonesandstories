<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">

        <div class="col col100 H400 S">
          <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <div class="module">
            <div class="col40">
             <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="textwrap">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(200); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>              
            </div>
            <div class="col60">
              <div class="heroimage H400">
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
        </div>
     
        <div class="col col50 L">
          
        <div class="col col100 S H300">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/hot/"><h3>Hot</h3></a>
          <div class="module">
             <?php $ids = array(751); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="heroimage H300 shift"><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
              <div class="textwrap yellow col60">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(20); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
       
        <div class="col col100 H300 S">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/grafik/"><h3>Grafik</h3></a>
          <div class="module">
             <?php $ids = array(1136); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="heroimage H300 shift">
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        </div>
        
        <div class="col col50 R">
        <div class="col col100 S H600">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <div class="module">
            <?php $ids = array(69); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="heroimage"><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
                  <div class="textwrap">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(55); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>
            <?php endwhile; ?>
          </div>
        </div>
  
        </div>

    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>

<?php get_footer(); ?>

