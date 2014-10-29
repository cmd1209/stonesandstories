<?php /* Template Name: factsfigures */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      <div class="col col100">
        <div class="module">
        <h1><strong><?php the_title(); ?></strong></h1>
          <div class="textwrap">
          <div class="col100">
          <?php query_posts( array( 'category__in' => array(88), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="factbox">
                    <table>
          <tbody>
            <tr class="factsheader col100">
              <td class="tab2">
                <?php if( get_field('factsfigures') ): ?>
                  <a href="#" class="trigger"></a>
                <?php else: ?>
                  <a href="#" class="blank"></a>
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
                <ul class="post-categories facts">
                  <?php if( get_field('divsions') ): ?>
                    <?php the_field('divsions'); ?>
                  <?php endif; ?>
                </ul>
              </td>
            </tr>
          </tbody>
          </table>
          <div class="toggle col100">
               <?php if( get_field('factsfigures') ): ?>
                    <?php the_field('factsfigures'); ?>
                <?php endif; ?>
              </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          </div>

          <?php query_posts( array( 'category__in' => array(60,11,42,95), 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC', 'post__not_in' => array(73,225,1605,1637,1844,2476,1815,2666,1849))); ?>
          <?php while (have_posts()) : the_post(); ?>
<div class="factbox">
                    <table>
          <tbody>
            <tr class="factsheader col100">
              <td class="tab2">
                <?php if( get_field('factsfigures') ): ?>
                  <a href="#" class="trigger"></a>
                <?php else: ?>
                  <a href="#" class="blank"></a>
                <?php endif; ?>
              </td>
              <td class="tab50">
                <p class="title"><?php the_title(); ?></p>
              </td>
              <td class="tab5">
                <p><?php the_date('Y'); ?></p>
              </td>
              <td class="tab15">
                <p><?php the_field('location'); ?></p>
              </td>
              <td class="tab28">
                <ul class="post-categories facts">
                  <?php if( get_field('divsions') ): ?>
                    <?php the_field('divsions'); ?>
                  <?php endif; ?>
                </ul>
              </td>
            </tr>
          </tbody>
          </table>
               <?php if( get_field('factsfigures') ): ?>
          <div class="toggle col100">
                    <?php the_field('factsfigures'); ?>
          </div>
                <?php endif; ?>
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