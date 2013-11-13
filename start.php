<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent" style="min-height:1100px;">

      <div class="col col100 H500 S">
        <div class="module">
          <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="modulecontent">
              <div class="moduleheader" style="width:50%;">
                <h2><?php the_title(); ?>
                  <?php if( get_field('subheadline') ): ?>
                    <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
                </div>
                <div class="textwrap" >
                  <?php echo excerpt(80); ?>
                </div>  
              </div>
              <div class="heroimage H500">
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div> 
            </div>
            <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <?php endwhile; ?>
        </div>
     
        <div class="col col50 L">  
        <div class="col col100 S H300">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/hot/"><h3>Hot</h3></a>
          <div class="module">
             <?php $ids = array(751); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="heroimage H300 shift2"><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
                
              <div class="col60 yellow">
              <div class="moduleheader">
                <h2>Bühnenbild für<br>Das St. Pauli-Theater   <!-- manually added -->
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap">
                    <?php echo excerpt(40); ?>
                  </div>
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
                  <div class="moduleheader">
                <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap">
                  <?php echo excerpt(60); ?>
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

