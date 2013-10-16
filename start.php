<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">

        <div class="col col100 H400 S">
          <div class="labels"><a href="<?php echo home_url(); ?>/category/architecture/"><h3>Architecture</h3></a></div>
          <div class="module">
            <div class="col col40">
             <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="textwrap">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(80); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>              
            </div>
            <div class="col col60">
              <div class="heroimage H400">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
        </div>

     
        <div class="col col50 L">
        <div class="col col100 H300 S">
        <div class="labels"><a href="<?php echo home_url(); ?>/category/grafik/"><h3>Grafik Design</h3></a></div>
          <div class="module">
             <?php $ids = array(1136); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="heroimage H300 shift">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>

          
        <div class="col col100 S H300">
        <div class="labels"><a href="<?php echo home_url(); ?>/category/hot/"><h3>Hot</h3></a></div>
          <div class="module">
             <?php $ids = array(751); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="heroimage H300 shift"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
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
       
        </div>
        
        <div class="col col50 R">
        <div class="col col100 S H600">
        <div class="labels"><a href="<?php echo home_url(); ?>/category/architecture/"><h3>Architecture</h3></a></div>
        <div class="labels"><h3>Architecture</h3></div>
          <div class="module">
            <?php $ids = array(69); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="heroimage"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
                  <div class="textwrap">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(50); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>
            <?php endwhile; ?>
          </div>
        </div>

  
        </div>

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>

<?php get_footer(); ?>

