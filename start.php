<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col maincontent" style="padding: 0 5px 0 0;">

        <div class="col col100 S">
          <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <div class="module">
            <div class="col30">
             <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="moduleheader">
                <h2 style="padding-top:10px;"><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                <div class="textwrap" style="padding-top:0;">
                  <?php echo excerpt(70); ?>
                </div>              
            </div>
            <div class="col70">
              <div>
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><img style="height:100%!important;" src="<?php echo home_url(); ?>/wp-content/uploads/2013/11/EHM-Wand.jpg" alt=""></a>
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
        </div>
     
        <div class="col col50 L">
          
        <div class="col col100 S H500">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/hot/"><h3>Hot</h3></a>
          <div class="module">
             <?php $ids = array(2203); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="H300 shift2" style="overflow:hidden;"><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
              <div class="moduleheader">
                <h2 style="padding-top:10px;"><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap" style="padding-top:0;">
                    <?php echo excerpt(32); ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
       
        <div class="col col100 H400 S">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/grafik/"><h3>Grafik</h3></a>
          <div class="module">
             <?php $ids = array(1136); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="heroimage H400 shift2">
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
              <div class=""><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
                  <div class="moduleheader">
                <h2 style="padding-top:10px;"><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap" style="padding-top:0;">
                  <?php echo excerpt(60); ?>
                </div>
            <?php endwhile; ?>
          </div>
        </div>

        <div class="col col100 S H300">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/ausstellung/"><h3>Auss</h3></a>
          <div class="module">
            <?php $ids = array(71); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class=""><a class="thumbnail shift" href="<?php echo get_permalink(); ?>"><?php
                if (class_exists('MultiPostThumbnails')) :
                  if ( MultiPostThumbnails::has_post_thumbnail( get_post_type(), 'secondary-image', NULL, 'secondary-image') ) :
                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-image');
                  else : ?>
                  <?php the_post_thumbnail('large'); ?>
                  <?php
                  endif;
                  endif;
                  ?></a></div>
                  <div class="moduleheader">
                <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap">
                  <?php echo excerpt(20); ?>
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

