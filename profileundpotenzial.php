<?php /* Template Name: profile+potenzial */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="maincontent" role="main">
      <div class="col col100">
        <div class="module">
          <div class="textwrap categorysingle">
            <div class="singletitle">
              <h2><?php if( get_field('subheadline') ): ?><?php the_field('subheadline'); ?></h2>
                <?php endif; ?>
               </div>
               <div class="factbox" style="margin-bottom: 30px;padding-left:0;" id="<?php the_title(); ?>">
                  <?php wp_nav_menu( array('menu' => 'spirit' )); ?>
              </div>
            <div class="col col50">
            <h3>Profil</h3>
            <?php the_content(); ?>
            </div>

          <div class="col col50">
            <h3>Potenzial</h3>
            <?php if( get_field('potenzial') ): ?>
              <?php the_field('potenzial'); ?>
            <?php endif; ?>
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