<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent" style="min-height:1100px;">

        <div class="col col100 H500 S">
          <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <div class="module">
            <div class="col30">
             <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="moduleheader">
                <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                <div class="textwrap">
                  <?php echo excerpt(70); ?>
                </div>              
            </div>
            <div class="col70">
              <div class="heroimage H500">
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
        </div>
     
        <div class="col col50 L">
          
        <div class="col col100 S H500">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/hot/"><h3>Hot</h3></a>
          <div class="module">
             <?php $ids = array(751); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="H200"><a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
              <div class="moduleheader">
                <h2>Bühnenbild für Das St. Pauli-Theater   <!-- manually added -->
                <?php if( get_field('subheadline') ): ?>
               <span><?php the_field('subheadline'); ?></span></h2>
                  <?php endif; ?>
              </div>
                  <div class="textwrap">
                    <?php echo excerpt(32); ?>
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
        <div class="col col100 S H800">
        <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
          <div class="module">
            <?php $ids = array(69); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class=""><a class="thumbnail H500" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
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

