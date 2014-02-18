<?php /* Template Name: Start */ get_header(); ?>
<section role="main">
  <div class="col maincontent" style="padding: 0 5px 0 0;">

<div class="col col100">

      <div class="col col50 L">

<div class="col col100 S">
<a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
        <div class="module">
          <?php $ids = array(73); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
          <?php while (have_posts()) : the_post(); ?>
            <a class="thumbnail" style="margin-top:-100px;" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
            <div class="moduleheader">
              <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
                 <span><?php the_field('subheadline'); ?></span></h2>
               <?php endif; ?>
             </div>
             <div class="textwrap">
              <?php echo excerpt(80); ?>
            </div>
          <?php endwhile; ?>
        </div>
        </div>
      </div>

        <div class="col col50 R">
          <div class="col col100 S">
            <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
            <div class="module">
              <?php $ids = array(69); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
                <div class="moduleheader">
                  <h2><?php the_title(); ?>
                    <?php if( get_field('subheadline') ): ?>
                     <span><?php the_field('subheadline'); ?></span></h2>
                   <?php endif; ?>
                 </div>
                 <div class="textwrap">
                  <?php echo excerpt(30); ?>
                </div>
              <?php endwhile; ?>
            </div>
          </div> <!-- end column 100 -->


            <div class="col col100 S">
              <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
              <div class="module">
                <?php $ids = array(2819); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
                <?php while (have_posts()) : the_post(); ?>
                  <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
                  <div class="moduleheader">
                    <h2><?php the_title(); ?>
                      <?php if( get_field('subheadline') ): ?>
                       <span><?php the_field('subheadline'); ?></span></h2>
                     <?php endif; ?>
                   </div>
                   <div class="textwrap">
                    <?php echo excerpt(30); ?>
                  </div>
                <?php endwhile; ?>        
              </div>
            </div>
          </div>  <!-- end column 100 -->

<div class="col col100">
            <div class="col col50 L">
              <div class="col col100 S">
              <a class="triangle shadow" href="<?php echo home_url(); ?>/category/architecture/"><h3>Arch</h3></a>
              <div class="module">
                <?php $ids = array(71); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
                <?php while (have_posts()) : the_post(); ?>
                  <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
                  <div class="moduleheader">
                    <h2 style="padding-top:10px;"><?php the_title(); ?>
                      <?php if( get_field('subheadline') ): ?>
                       <span><?php the_field('subheadline'); ?></span></h2>
                     <?php endif; ?>
                   </div>
                   <div class="textwrap" style="padding-top:0;">
                    <?php echo excerpt(30); ?>
                  </div>
                <?php endwhile; ?>
              </div>                
              </div>
            </div>
  
              <div class="col col50 R">
              <div class="col col100 S">
                <a class="triangle shadow" href="<?php echo home_url(); ?>/category/grafik/"><h3>Grafik</h3></a>
                <div class="module">
                 <?php $ids = array(2754); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
                 <?php while (have_posts()) : the_post(); ?>
                  <div class="heroimage H600">
                    <a class="thumbnail" href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
                  </div>
                <?php endwhile; ?>
              </div>
                     
              </div>
            </div>
      </div>

  
</div>


          </div>

          <div class="sidebar">
            <?php get_sidebar(); ?>
          </div>


        </section>

        <?php get_footer(); ?>