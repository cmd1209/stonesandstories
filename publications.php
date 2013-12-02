<?php /* Template Name: publications */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent"main>
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
            <div class="col col33">
            <h3>Books</h3>
              <?php if( get_field('books') ): ?>
                <?php the_field('books'); ?>
              <?php endif; ?>              
            </div>
            <div class="col col33">
            <h3>Zeitschriften</h3>
              <?php if( get_field('zeitschriften') ): ?>
                <?php the_field('zeitschriften'); ?>
              <?php endif; ?>
            </div>
            <div class="col col33">
            <h3>Ausstellungskataloge</h3>
              <?php if( get_field('ausstellungskataloge') ): ?>
                <?php the_field('ausstellungskataloge'); ?>
              <?php endif; ?>
            </div>
            <div class="col col100" style="padding:10px;background-color:black;color:white">
            <h3>Awards</h3>
              <?php if( get_field('awards') ): ?>
                <?php the_field('awards'); ?>
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