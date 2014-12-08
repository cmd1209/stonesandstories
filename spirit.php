<?php /* Template Name: spirit */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="maincontent"main>

      <div class="col col100">
        <div class="module">
          <div class="textwrap categorysingle">
            <div class="singletitle">
              <h2><?php the_title(); ?>
                <?php if( get_field('subheadline') ): ?>
                 <span><?php the_field('subheadline'); ?></span></h2>
                <?php endif; ?>
               </div>

               <div class="factbox" style="margin-bottom: 30px;padding-left:0;" id="<?php the_title(); ?>">
                <?php wp_nav_menu( array('menu' => 'spirit' )); ?>
              </div>

            <?php the_content(); ?>
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