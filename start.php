<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">


        <div class="col col75 L H450">
          <div class="module">
            <div class="col col40">
             <?php $ids = array(73,69,65,102); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="textwrap">
                  <h2><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(60); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>              
            </div>
            <div class="col col60">
              <div class="imagecontainer H400">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>  
            </div>
            <?php endwhile; ?>
          </div>
        </div>


        <div class="col col25 R H400">
          <div class="module">
            <?php $ids = array(106,231,506,751,486,71,424); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
                  <div class="textwrap">
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
     
        <div class="col col50 L" style="padding-bottom:0;">

        <div class="col col50 L H200">
          <div class="module">
             <?php $ids = array(380,318); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="imagecontainer H200"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
            <?php endwhile; ?>
          </div>
        </div>

        <div class="col col50 R H200">
          <div class="module">
             <?php $ids = array(619,592,566,307,229,527,225,633); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <div class="textwrap">
                  <h2 style="margin-top:5px;"><?php the_title(); ?></h2>
                  <?php if( get_field('subheadline') ): ?>
                    <h3><?php the_field('subheadline'); ?></h3>
                  <?php endif; ?>
                  <?php echo excerpt(15); ?>
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </div>
            <?php endwhile; ?>
          </div>
        </div>
          
        <div class="col col100 S H300">
          <div class="module">
             <?php $ids = array(527,227,238,213,222); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
               <div class="imagecontainer H300"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div> 
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
        
        <div class="col col50 R" style="padding-bottom:0;" >
        <div class="col col50 L H500">
          <div class="module">
            <?php $ids = array(592,631); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($medium->ID, 'medium');?></a>
                  <div class="textwrap">
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

        <div class="col col50 R H500">
          <div class="module">
            <?php $ids = array(219,421,519,629); query_posts(array('orderby' => 'rand', 'post_type' => 'post', 'post__in' => $ids, 'showposts' => 1) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="imagecontainer H500">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a>
              </div>
                  <div class="textwrap yellow col100">
                  <h2 style="margin-top:5px;"><?php the_title(); ?></h2>
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

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>

<?php get_footer(); ?>

