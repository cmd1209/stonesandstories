<?php /* Template Name: factsfigures */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
        <h1><strong><?php the_title(); ?></strong></h1>
          <div class="textwrap">
          <div class="col100">
          <?php query_posts( array( 'category__in' => array(88), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox" id="<?php the_title(); ?>">
          <div class="factsheader">
          <div class="col tab2">
            <?php if($post->post_content != "") : ?>
              <a href="#" class="trigger"></a>
              <?php else: ?>
              <a href="#"></a>
              <?php endif; ?>
          </div>
          <div class="col tab50">
              <p class="title"><?php the_title(); ?></p>
          </div>
          <div class="col tab5">
            <p  style="text-align:right">Aktuell</p>
          </div>
          <div class="col tab15">
              <p><?php the_field('location'); ?></p>
          </div>
          <div class="col tab28">
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

          <?php query_posts( array( 'category__in' => array(60,11,42,95), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC', 'post__not_in' => array(73,2141,225,1605,1637,1844))); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox" id="<?php the_title(); ?>">
          <div class="factsheader">
          <div class="col tab2">
              <?php if( get_field('factsfigures') ): ?>
                  <a href="#" class="trigger"></a>
              <?php else: ?>
              <a href="#"></a>
              <?php endif; ?>
          </div>
          <div class="col tab50">
              <p class="title"><?php the_title(); ?></p>
          </div>
          <div class="col tab5">
            <p  style="text-align:right"><?php the_date('Y'); ?></p>
          </div>
          <div class="col tab15">
              <p><?php the_field('location'); ?></p>
          </div>
          <div class="col tab28">
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

    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>