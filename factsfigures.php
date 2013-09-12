<?php /* Template Name: factsfigures */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent">
      
        <div class="col col100">
            <table class="factbox">
             <?php query_posts( array( 'category__in' => array(1,10), 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
              <?php while (have_posts()) : the_post(); ?>
              <tr>
                <td>
                  <a href="#"> <?php the_title(); ?></a>
                </td>
                <td>
                  <?php the_date('Y', '<p>', '</p>'); ?>
                </td>
                <td>
                  <?php the_category(); ?>
                </td>
                <td>   
                  <a href="<?php echo get_permalink(); ?>"> mehr...</a>
                </td>
                </tr>     
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>              
            </table>
        </div>

    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
  </section>
  <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>