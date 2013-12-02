<?php /* Template Name: publications */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section role="main">
    <div class="col maincontent"main>
      <div class="col col100">
        <div class="module">
          <div class="textwrap singletitle">
            <div class="col col33">
            <h2><span>Books</span></h2>
              <?php if( get_field('books') ): ?>
                <?php the_field('books'); ?>
              <?php endif; ?>              
            </div>
            <div class="col col33">
            <h2><span>Zeitschriften</span></h2>
              <?php if( get_field('zeitschriften') ): ?>
                <?php the_field('zeitschriften'); ?>
              <?php endif; ?>
            </div>
            <div class="col col33">
            <h2><span>Ausstellungskataloge</span></h2>
              <?php if( get_field('ausstellungskataloge') ): ?>
                <?php the_field('ausstellungskataloge'); ?>
              <?php endif; ?>
            </div>
            <div class="col col100" style="padding:10px;background-color:black;color:white">
            <h2><span>Awards</span></h2>
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