<?php /* Template Name: factsfigures */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
        <h1><span><?php the_title(); ?></span></h1>
          <div class="textwrap">

          <div class="col100">
            <h2>Aktuelle Projekte</h2>
          <?php query_posts( array( 'category__in' => array(88), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox" id="<?php the_title(); ?>">
          <div class="factsheader">
          <div class="col col2">
            <a href="#" class="trigger"></a>
          </div>
          <div class="col col55">
            <?php if($post->post_content != "") : ?>
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              <?php else: ?>
              <a href="#" class="title"><?php the_title(); ?></a>
              <?php endif; ?>
          </div>
          <div class="col col5">
            <p>Aktuell</p>
          </div>
          <div class="col col10">
            <?php if( get_field('location') ): ?>
              <p><?php the_field('location'); ?></p>
            <?php endif; ?>
          </div>
          <div class="col col28">
            <ul class="post-categories">
              <li>
            <?php if( get_field('divsions') ): ?>
                  <?php the_field('divsions'); ?>
            <?php endif; ?>
              </li>
            </ul>
          </div>
          </div>
   
              <div class="toggle">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>  
          </div> 


          <div class="col100">
            <h2>Projekte</h2>
          <?php query_posts( array( 'category__in' => array(60,11), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' 'post__not_in' => array(73)); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox" id="<?php the_title(); ?>">
          <div class="factsheader">
          <div class="col col2">
            <a href="#" class="trigger"></a>
          </div>
          <div class="col col55">
            <?php if($post->post_content != "") : ?>
              <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              <?php else: ?>
              <a href="#" class="title"><?php the_title(); ?></a>
              <?php endif; ?>
          </div>
          <div class="col col5">
            <p><?php the_date('Y'); ?></p>
          </div>
          <div class="col col10">
              <p><?php the_field('location'); ?></p>
          </div>
          <div class="col col28">
            <ul class="post-categories">
              <li>
            <?php if( get_field('divsions') ): ?>
                  <?php the_field('divsions'); ?>
            <?php endif; ?>
              </li>
            </ul>
          </div>
          </div>
   
              <div class="toggle">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>  
          </div> 
          </div>   


    </div>
    </div>
    </div>

    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>