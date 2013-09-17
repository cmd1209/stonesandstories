<?php /* Template Name: Start */ get_header(); ?>

  <section role="main">
    <div class="col startcontent">


        <div class="col col75 L H400">
          <div class="module">
            <div class="col col40">
             <?php query_posts('orderby=rand&showposts=1&post_id=73,65'); ?>
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
            <?php query_posts('orderby=rand&showposts=1&tag=t2'); ?>
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
             <?php query_posts('orderby=rand&showposts=1&tag=b3'); ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="imagecontainer H200"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($large->ID, 'large');?></a></div>
            <?php endwhile; ?>
          </div>
        </div>

        <div class="col col50 R H200">
          <div class="module">
             <?php query_posts('orderby=rand&showposts=1&tag=t3'); ?>
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
             <?php query_posts('orderby=rand&showposts=1&tag=t4'); ?>
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
            <?php query_posts('orderby=rand&showposts=1&tag=t5'); ?>
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
            <?php query_posts('orderby=rand&showposts=1&tag=t6'); ?>
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

