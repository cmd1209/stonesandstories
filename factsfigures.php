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
          
          <table class="factbox">
          <tbody>
            <tr class="factsheader">
              <td class="tab2">
                <?php if($post->post_content != "") : ?>
                  <a href="#" class="trigger"></a>
                <?php else: ?>
                  <a href="#"></a>
                <?php endif; ?>
              </td>
              <td class="tab50">
                <p class="title"><?php the_title(); ?></p>
              </td>
              <td class="tab5">
                <p>Aktuell</p>
              </td>
              <td class="tab15">
                <p><?php the_field('location'); ?></p>
              </td>
              <td class="tab28">
                <ul class="post-categories">
                  <?php if( get_field('divsions') ): ?>
                    <?php the_field('divsions'); ?>
                  <?php endif; ?>
                </ul>
              </td>
            </tr>
            <tr class="toggle col100">
              <td class="toggle col100">
                <?php if( get_field('factsfigures') ): ?>
                  <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </td>
            </tr>
          </tbody>
          </table>

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